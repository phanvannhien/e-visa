<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\MenuItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

class MenuItemController extends Controller
{
    public function create(){

    }
    public function store(Request $request){
        $rules = array(
            'menu_id' => 'required',
            'menu_title' => 'required',
            'menu_link' => 'required',
            'type' => 'required'
        );


        $validation = Validator::make( $request->all(), $rules );
        if( $validation->fails() ){
            return back()
                ->withErrors($validation)
                ->withInput();
        }

        $menuItem = new MenuItems();
        $menuItem->menu_id = $request->input('menu_id');
        $menuItem->menu_icon = $request->input('menu_icon');
        $menuItem->menu_title = $request->input('menu_title');
        $menuItem->menu_order = 0;
        $menuItem->menu_link = $request->input('menu_link');
        $menuItem->type = $request->input('type');
        $menuItem->classes = $request->input('classes');
        $menuItem->menu_status = $request->input('status');

        if( $request->input('parent') != 0 ){
            $menuItem->parent_id = $request->input('parent');
        }

        if( $menuItem->save() ){
            return back()->with('status', trans('app.success') );
        }
        return back()->with('status', trans('app.fail') );

    }

    public function edit( $id ){
        $menu = MenuItems::findOrFail($id);
        $rootMenu = Menu::findOrFail( $menu->menu_id );
        $menuItems = $rootMenu->menu_items()->withDepth()->get()->toTree();
        return view('admin.menu_item.edit', compact('menu','menuItems'))->render();
    }

    public function update(Request $request, $id){

        $rules = array(
            'menu_title' => 'required',
            'menu_link' => 'required',
            'type' => 'required'
        );


        $validation = Validator::make( $request->all(), $rules );
        if( $validation->fails() ){
            if( $request->ajax() ){
                return response()->json([
                    'success' => false,
                    'msg' => $validation->errors()
                ]);

            }
            return back()
                ->withErrors($validation)
                ->withInput();
        }

        $menuItem = MenuItems::findOrFail($id);
        $menuItem->menu_title = $request->input('menu_title');
        $menuItem->menu_icon = $request->input('menu_icon');
        $menuItem->menu_order = 0;
        $menuItem->menu_link = $request->input('menu_link');
        $menuItem->type = $request->input('type');
        $menuItem->classes = $request->input('classes');
        $menuItem->menu_status = $request->input('status');

        if( $request->input('parent') != 0 ){
            $menuItem->parent_id = $request->input('parent');
        }

        if( $menuItem->save() ){
            if( $request->ajax() ){
                return response()->json([
                    'success' => true,
                    'msg' => trans('app.success')
                ]);
            }
            return back()->with('status', trans('app.success') );
        }
        if( $request->ajax() ){
            return response()->json([
                'success' => false,
                'msg' => trans('app.fail')
            ]);
        }
        return back()->with('status', trans('app.fail') );
    }

    public function destroy($id){
        MenuItems::destroy( $id );
        return response()->json([
           'success' => true,
            'msg' => trans('app.success')
        ]);
    }

}
