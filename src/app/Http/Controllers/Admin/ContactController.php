<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use Auth;

class ContactController extends Controller
{
    public function index(){
        $data = Contact::orderBy('created_at','DESC')->paginate();
        return view('admin.contact.index', compact('data'));
    }
}