<?php

namespace App\Http\Controllers\Admin;

use App\Mail\OrderWaiting;
use App\Models\MailTemplate;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Modules\Visa\Entities\Booking;
use Validator;

class EmailTemplateController extends Controller
{

    public function index(){
        $data = MailTemplate::paginate();
        return view('admin.email_templates.index', compact('data') );
    }


    public function create(){
        return view('admin.email_templates.create');
    }

    public function store( Request $request ){
        $rules = [
            'template_name' => 'required|string',
            'template_group' => 'required|string',
            'template_class' => 'required|string',
            'mail_from' => 'required|string|email',
            //'mail_cc' => 'required|string',
        ];


        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }


        $template = new MailTemplate();
        $template->template_name = $request->input('template_name');
        $template->template_group = $request->input('template_group');
        $template->template_class = $request->input('template_class');
        $template->mail_from = $request->input('mail_from');
        $template->mail_cc = $request->input('mail_cc');

        if( $template->save() ){
            return redirect()
                ->route( 'email-template.edit', $template->id )
                ->with('status',  trans('app.success') );
        }
        return back()->with('status',  trans('app.fail') );
    }

    public function edit( $id ){
        $template = MailTemplate::findOrFail($id);
        return view('admin.email_templates.edit', compact('template') );
    }



    public function update( Request $request , $id ){
        $rules = [
            'template_name' => 'required|string',
            'template_group' => 'required|string',
            'template_class' => 'required|string',
            'mail_from' => 'required|string|email',
            //'mail_cc' => 'required|string',
        ];


        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }


        $template = MailTemplate::findOrFail($id);
        $template->template_name = $request->input('template_name');
        $template->template_group = $request->input('template_group');
        $template->template_class = $request->input('template_class');
        $template->mail_from = $request->input('mail_from');
        $template->mail_cc = $request->input('mail_cc');

        if( $template->save() ){
            return redirect()
                ->route( 'email-template.edit', $template->id )
                ->with('status',  trans('app.success') );
        }
        return back()->with('status',  trans('app.fail') );
    }


    public function show( $id ){
        $order = Booking::first();
        $template = MailTemplate::findOrFail($id);
        $class = $template->template_class;


        return new $class( $order );
    }

}
