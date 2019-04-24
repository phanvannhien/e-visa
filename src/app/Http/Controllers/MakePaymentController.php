<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakePaymentController extends Controller
{
    public function index(){
        return view('theme.pages.make_payment');
    }
}
