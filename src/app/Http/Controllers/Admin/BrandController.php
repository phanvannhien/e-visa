<?php

namespace App\Http\Controllers\Admin;

use App\Http\Filters\BrandFilter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Brand;
use Validator;




class BrandController extends Controller
{
    public function index(BrandFilter $filter) {
        $data = Brand::filter($filter)->orderBy('brand_name')->paginate();
        return view('admin.brand.index', compact('data'));
    }

    public function create(){
        return view('admin.brand.create');
    }

    public function store(Request $request){
        $rules = [
            'brand_name' => 'required|string',
            'brand_logo' => 'required|string',
            'brand_description' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $data = new Brand();
        $data->brand_name = $request->input('brand_name');
        $data->brand_logo = $request->input('brand_logo');
        $data->brand_description = $request->input('brand_description');
        $data->brand_website = $request->input('brand_website');

        if( $data->save() ){
            return redirect()->route( 'brand.edit', $data->id )
                ->with('status', trans('app.success'));
        }
        return back()->with('status',trans('app.fail'));


    }

    public function edit( Request $request, $id ){
        $data = Brand::findOrFail( $id );
        return view('admin.brand.edit', compact('data'));

    }

    public function update(Request $request, $id){
        $rules = [
            'brand_name' => 'required|string',
            'brand_logo' => 'required|string',
            'brand_description' => 'required|string',
        ];


        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }


        $data = Brand::findOrFail( $id );
        $data->brand_name = $request->input('brand_name');
        $data->brand_logo = $request->input('brand_logo');
        $data->brand_description = $request->input('brand_description');
        $data->brand_website = $request->input('brand_website');

        if( $data->save() ){
            return redirect()->route( 'brand.edit', $data->id )
                ->with('status',trans('app.success'));
        }
        return back()->with('status',trans('app.fail'));
    }

}
