<?php

namespace App\Http\Controllers\Admin;

use App\Models\Block;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

class BlockController extends Controller
{
    public function index() {
        $data = Block::orderBy('block_code')->paginate();
        return view('admin.blocks.index', compact('data'));
    }

    public function create(){
        return view('admin.blocks.create');
    }

    public function store(Request $request){
        $rules = [
            'block_code' => 'required|string|alpha_dash',
            'block_title' => 'required|string',
            'block_content' => 'required|string'
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $data = new Block();

        $data->block_code = $request->input('block_code');
        $data->block_title = $request->input('block_title');
        $data->block_content = $request->input('block_content');

        if( $data->save() ){
            return redirect()->route( 'block.edit', $data->id )
                ->with('status', trans('app.success'));
        }
        return back()->with('status',trans('app.fail'));

    }

    public function edit( Request $request, $id ){
        $data = Block::findOrFail( $id );
        return view('admin.blocks.edit', compact('data'));

    }

    public function update(Request $request, $id){
        $rules = [
            'block_code' => 'required|string|alpha_dash',
            'block_title' => 'required|string',
            'block_content' => 'required|string'
        ];


        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $data = Block::findOrFail( $id );
        $data->block_code = $request->input('block_code');
        $data->block_title = $request->input('block_title');
        $data->block_content = $request->input('block_content');

        if( $data->save() ){
            return redirect()->route( 'block.edit', $data->id )
                ->with('status',trans('app.success'));
        }
        return back()->with('status',trans('app.fail'));
    }
}
