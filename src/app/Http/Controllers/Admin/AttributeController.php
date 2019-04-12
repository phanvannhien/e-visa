<?php

namespace App\Http\Controllers\Admin;


use App\Http\Filters\AttributeFilter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Attribute;
use DB;
use Validator;

class AttributeController extends Controller
{
    public function index(AttributeFilter $filter){

        $data = Attribute::filter($filter)->paginate();
        return view('admin.attributes.index', compact('data'));
    }

    public function create(){
        return view('admin.attributes.create');
    }

    public function edit($id){
        return view('admin.attributes.edit',['data' => Attribute::findOrFail($id) ]);
    }


    public function store(Request $request){
        $rules = [
            'code' => 'required|max:254|unique:attributes',
            'admin_name' => 'required|max:254',
            'attribute_name' => 'required|max:254',
            'type' => 'required|max:254',
        ];


        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $attribute = new Attribute();
        $attribute->code = $request->input('code');
        $attribute->admin_name = $request->input('admin_name');
        $attribute->attribute_name = $request->input('attribute_name');
        $attribute->type = $request->input('type');
        $attribute->validation = $request->input('validation');
        $attribute->position = $request->input('position');
        $attribute->is_required = $request->input('is_required');
        $attribute->is_unique = $request->input('is_unique');
        $attribute->is_filterable = $request->input('is_filterable');
        $attribute->is_configurable = $request->input('is_configurable');
        $attribute->is_visible_on_front = $request->input('is_visible_on_front');
        $attribute->is_user_defined = 0;


        try{
            DB::beginTransaction();

            if( $attribute->save() ){

                // save options
                if( $attribute->type == 'select' ){
                    $options = $request->input('options');

                    $i = 1;
                    foreach ( $options as $key => $option ){

                        // create option
                        $optionCreated = $attribute->options()->create([
                            'admin_name' => $option['option_admin_name'],
                            'option_value' => $option['option_value'],
                            'sort_order' => $i
                        ]);

                        $attribute->options()->save($optionCreated);
                        $i++;

                    }

                }



                DB::commit();
                return redirect()->route( 'attribute.edit', $attribute->id )
                    ->with('status', trans('app.success') );
            }

        }catch( Exception $e ){
            DB::rollBack();
        }


        return back()->with('status', trans('app.fail'));

    }

    public function update(Request $request, $id){



        $attribute = Attribute::findOrFail($id);
        $rules = [
            'code' => 'required|max:254',
            'admin_name' => 'required|max:254',
            'attribute_name' => 'required|max:254',
            'type' => 'required|max:254',
        ];



        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $attribute->code = $request->input('code');
        $attribute->admin_name = $request->input('admin_name');
        $attribute->attribute_name = $request->input('attribute_name');
        $attribute->type = $request->input('type');
        $attribute->validation = $request->input('validation');
        $attribute->position = $request->input('position');
        $attribute->is_required = $request->input('is_required');
        $attribute->is_unique = $request->input('is_unique');
        $attribute->is_filterable = $request->input('is_filterable');
        $attribute->is_configurable = $request->input('is_configurable');
        $attribute->is_visible_on_front = $request->input('is_visible_on_front');
        $attribute->is_user_defined = 0;


        try{
            DB::beginTransaction();

            if( $attribute->save() ){


                // save options

                if( $attribute->type == 'select' ){
                    $options = $request->input('options');
                    if( $options ){
                        $attribute->options()->delete();
                    }

                    $i = 1;
                    foreach ( $options as $key => $option ){

                        // create option
                        $optionCreated = $attribute->options()->updateOrCreate([
                            'admin_name' => $option['option_admin_name'],
                            'option_value' => $option['option_value'],
                            'sort_order' => $i
                        ]);

                        $attribute->options()->save($optionCreated);
                        $i++;

                    }


                }


                DB::commit();
                return redirect()->route( 'attribute.edit', $attribute->id )->with('status', trans('app.success') );
            }

        }catch( Exception $e ){
            DB::rollBack();
        }


        return back()->with('status', trans('app.fail'));

    }
}
