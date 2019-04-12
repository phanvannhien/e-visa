<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use Illuminate\Support\Facades\Cache;

class SliderController extends Controller
{
    public function index(){
        $data=  Slider::paginate();
        return view('admin.slider.index', compact('data') );
    }
    public function create(){
        return view('admin.slider.create');
    }

    public function store(Request $request){

        $rules = [
            'title' => 'required|string',
            'file_path' => 'required|string',
            'url' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }


        $slider = new Slider();
        $slider->title = $request->input('title');
        $slider->image = $request->input('file_path');
        $slider->url = $request->input('url');
        $slider->status = $request->input('status');

        if( $slider->save() ){
            Cache::flush();
            return redirect()
                ->route( 'slider.edit', $slider->id )
                ->with('status',  trans('app.success') );
        }
        return back()->with('status',  trans('app.fail') );
    }


    public function edit($id){
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update( Request $request, $id ){
        $rules = [
            'title' => 'required|string',
            'file_path' => 'required|string',
            'url' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $slider = Slider::findOrFail($id);
        $slider->title = $request->input('title');
        $slider->image = $request->input('file_path');
        $slider->url = $request->input('url');
        $slider->status = $request->input('status');


        if( $slider->save() ){
            Cache::flush();
            return redirect()
                ->route( 'slider.edit', $slider->id )
                ->with('status',  trans('app.success') );
        }
        return back()->with('status',  trans('app.fail') );
    }
}
