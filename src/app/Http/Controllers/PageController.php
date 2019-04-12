<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Validator;

class PageController extends Controller
{
    public function index(){
        $data=  Page::paginate();
        return view('admin.pages.index', compact('data') );
    }
    public function create(){
        return view('admin.pages.create');
    }

    public function store(Request $request){

        $rules = [
            'title' => 'required|string',
        ];


        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }


        $page = new Page();
        $page->title = $request->input('title');
        $page->content = $request->input('content');
        $page->meta_title = $request->input('meta_title');
        $page->meta_keyword = $request->input('meta_keyword');
        $page->meta_description = $request->input('meta_description');
        $page->status = $request->input('status');
        $page->thumbnail = $request->input('thumbnail');

        if( $page->save() ){
            return redirect()
                ->route( 'page.edit', $page->id )
                ->with('status',  trans('app.success') );
        }
        return back()->with('status',  trans('app.fail') );
    }


    public function edit($id){
        $page = Page::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }

    public function update( Request $request, $id ){
        $rules = [
            'title' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $page = Page::findOrFail($id);
        $page->title = $request->input('title');
        $page->content = $request->input('content');
        $page->meta_title = $request->input('meta_title');
        $page->meta_keyword = $request->input('meta_keyword');
        $page->meta_description = $request->input('meta_description');
        $page->status = $request->input('status');
        $page->thumbnail = $request->input('thumbnail');

        if( $request->input('slug') == '' ){
            $page->slug = Str::slug($request->input('title'));
        }else{
            $page->slug = $request->input('slug');
        }

        if( $page->save() ){
            return redirect()
                ->route( 'page.edit', $page->id )
                ->with('status',  trans('app.success') );
        }
        return back()->with('status',  trans('app.fail') );
    }


}
