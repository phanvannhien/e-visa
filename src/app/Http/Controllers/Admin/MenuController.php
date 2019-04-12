<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Menu;

use Matrix\Exception;
use Validator;
use Route;
use DB;


class MenuController extends Controller
{
    public function index( Request $request ){
        $menus = Menu::all();
        $selected_menu = null;
        $routers = null;
        if( $request->except('menu') && $request->get('menu')  != '' ){
            $menu_code = $request->get('menu');
            $selected_menu = Menu::findOrFail($menu_code);
            $routers = Route::getRoutes();
        }
        return view('admin.menus.index', compact('selected_menu', 'menus','routers'));
    }

    public function create (){
        return view('admin.menus.create');
    }

    public function store(Request $request){
        $rules = array(
            'menu_code' => 'required:max:255|alpha_dash|unique:menus,menu_code',
            'menu_title' => 'required|max:255'
        );
        $validation = Validator::make( $request->all(), $rules );
        if( $validation->fails() ){
            return back()
                ->withErrors($validation)
                ->withInput();
        }

        $menu = new Menu();
        $menu->menu_code = $request->input('menu_code');
        $menu->menu_title = $request->input('menu_title');
        if( $menu->save() ){
            return back()->with('status', trans('app.success') );
        }
        return back()->with('status', trans('app.fail') );
    }


    public function edit(Request $request, $menu_id){
        $menu = Menu::findOrFail($menu_id);
        return view('admin.systems.menus.edit', compact('menu'));
    }

    public function destroy($id){


        try{
            DB::beginTransaction();
            $menu = Menu::where( 'id',$id )->first();
            if($menu){
                $menu->menu_items()->delete();
                $menu->delete();
            }

            DB::commit();
            return response()->json([
                'success' => true,
                'redirect' => route('menu.index'),
                'msg' => trans('app.success')
            ]);

        }catch (Exception $e){
            DB::rollBack();
        }

        return response()->json([
            'success' => false,
            'msg' => trans('app.fail')
        ]);
    }


}
