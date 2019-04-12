<?php

namespace App\Http\Controllers\Admin;


use App\AttributeGroup;
use App\Http\Controllers\Controller;
use App\TypeAttributeGroup;
use Validator;
use App\Models\Type;
use Illuminate\Http\Request;

use DB;

class ProductTypeController extends Controller
{
    public function index(){
        $data = Type::orderBy('type_name')->paginate();
        return view('admin.types.index', compact('data'));
    }

    public function create(){

        return view('admin.types.create');
    }

    public function store(Request $request){
        $rules = [
            'type_name' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $data = new Type();
        $data->type_name = $request->input('type_name');

        try {
            DB::beginTransaction();
            if( $data->save() ){
                // save type group attributes
                DB::commit();
                return redirect()->route( 'type.edit', $data->id )
                    ->with('status', trans('app.success'));
            }

        }catch( Exception $e ){
            DB::rollBack();
        }

        return back()->with('status',trans('app.fail'));


    }

    public function edit( Request $request, $id ){
        $data = Type::findOrFail( $id );
        return view('admin.types.edit', compact('data'));

    }

    public function update(Request $request, $id){
        $data = Type::findOrFail( $id );

        if( $request->has('submit') && $request->input('submit') == 'save' ){
            $rules = [
                'type_name' => 'required|string',
            ];

            $validator = Validator::make($request->all(), $rules );
            if ($validator->fails()) {
                return back()->withErrors ( $validator )->withInput();
            }

            $data->type_name = $request->input('type_name');

            if( $data->save() ){
                return redirect()->route( 'type.edit', $data->id )
                    ->with('status',trans('app.success'));
            }
        }

        if( $request->has('submit') && $request->input('submit') == 'add_attribute_to_type' ){

            $data->attributes()->attach([
               'attribute_id' => $request->input('attribute_id')
            ]);

            return redirect()->route( 'type.edit', $data->id )->with('status',trans('app.success'));

        }

        if( $request->has('submit') && $request->input('submit') == 'remove_attribute_from_type' ){


            $data->attributes()->detach([
                'attribute_id' => $request->input('attribute_id')
            ]);

            return redirect()->route( 'type.edit', $data->id )->with('status',trans('app.success'));

        }




        return back()->with('status',trans('app.fail'));
    }
}