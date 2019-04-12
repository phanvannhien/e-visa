<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Configuration;

use Validator;

class ConfigurationController extends Controller
{

    public function index(){
        return view('admin.configurations.index', array('data' => Configuration::paginate()));
    }

    public function configuration(){
        return view('admin.configuration',array('configuration' => Configuration::all()) );
    }

    public function configurationSave(Request $request){
        $arrConfigs = $request->input('config');

        foreach ($arrConfigs as $key => $value) {
            # code...
            $config = Configuration::where('name',$key)->update(
                array( 'config_value' => $value)
            );

        }

        return view('admin.configuration',array('configuration' => Configuration::all()) )
            ->with('status', 'Lưu thành công' );

    }

    public function edit($id){
        $data = Configuration::findOrFail($id);
        return view('admin.configurations.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $rules = [
            'label' => 'required|string',
            'value' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $page = Configuration::findOrFail($id);
        $page->label = $request->input('label');
        $page->value = $request->input('value');

        if( $page->save() ){
            return redirect()
                ->route( 'configuration.edit', $page->id )
                ->with('status',  trans('app.success') );
        }
        return back()->with('status',  trans('app.fail') );
    }


}