<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Validator;
use LaravelLocalization;
use DB;

use App\CategoryProductTrans;

class CategoryController extends Controller
{

    public function index(){
        $data = Category::withDepth()->get()->toTree();
        return view('admin.categories.index', compact('data'));
    }

    public function create(){

        return view('admin.categories.index');
    }

    public function store(Request $request){


        $rules['category_name' ] = 'required|string:max:254';

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $category = new Category();
        $category->image = $request->input('image');
        $category->status = $request->input('status');
        $category->category_name = $request->input('category_name');
        $category->slug = Str::slug($request->input('category_name'));
        $category->category_description = $request->input('category_description');
        $category->meta_title = $request->input('meta_title');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->meta_description = $request->input('meta_description');

        if( $request->input('parent_id') != 0 ){
            $category->parent_id = $request->input('parent_id');
        }

        if( $category->save() ){
            return redirect()
                ->route( 'categories.edit', $category->id )
                ->with('status', trans('app.success') );
        }

        return back()->with('status', trans('app.fail'));

    }

    public function edit( Request $request, $id ){
        $category = Category::findOrFail( $id );
        $data = Category::withDepth()->get()->toTree();
        return view('admin.categories.edit', compact('category','data'));

    }

    public function update(Request $request, $id){

        $rules['category_name' ] = 'required|string:max:254';


        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $category = Category::findOrFail($id);
        $category->image = $request->input('image');
        $category->status = $request->input('status');
        $category->category_name = $request->input('category_name');
        $category->slug = Str::slug($request->input('category_name'));
        $category->category_description = $request->input('category_description');
        $category->meta_title = $request->input('meta_title');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->meta_description = $request->input('meta_description');

        if( $request->input('parent_id') != 0 ){
            $category->parent_id = $request->input('parent_id');
        }else{
            $category->makeRoot();
        }

        if( $category->save() ){
            return redirect()
                ->route( 'categories.edit', $category->id )
                ->with('status',  trans('app.success') );
        }
        return back()->with('status', trans('app.fail') );
    }


    public function destroy($id){


        try{
            DB::beginTransaction();
            $category = Category::findOrFail( $id );
            $category->products()->delete();
            $category->delete();

            DB::commit();
            return response()->json([
                'success' => true,
                'msg' => trans('app.success')
            ]);
        }catch ( \Exception $e ){
            DB::rollBack();

        }
        return response()->json([
            'success' => false,
            'msg' => trans('app.fail')
        ]);


    }


}
