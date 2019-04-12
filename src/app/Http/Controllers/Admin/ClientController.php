<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

class ClientController extends Controller
{
    public function index(){
        $data=  Client::paginate();
        return view('admin.client.index', compact('data') );
    }
    public function create(){
        return view('admin.client.create');
    }

    public function store(Request $request){

        $rules = [
            'name' => 'required|string',
            'file_path' => 'required|string',
            'url' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $client = new Client();
        $client->name = $request->input('name');
        $client->logo = $request->input('file_path');
        $client->url = $request->input('url');

        if( $client->save() ){
            return redirect()
                ->route( 'client.edit', $client->id )
                ->with('status',  trans('app.success') );
        }
        return back()->with('status',  trans('app.fail') );
    }


    public function edit($id){
        $client = Client::findOrFail($id);
        return view('admin.client.edit', compact('client'));
    }

    public function update( Request $request, $id ){
        $rules = [
            'name' => 'required|string',
            'file_path' => 'required|string',
            'url' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $client = Client::findOrFail($id);
        $client->name = $request->input('name');
        $client->logo = $request->input('file_path');
        $client->url = $request->input('url');

        if( $client->save() ){
            return redirect()
                ->route( 'client.edit', $client->id )
                ->with('status',  trans('app.success') );
        }
        return back()->with('status',  trans('app.fail') );
    }
}
