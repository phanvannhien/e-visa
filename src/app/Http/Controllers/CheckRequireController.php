<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class CheckRequireController extends Controller
{
    public function find( Request $request ){
        return redirect()->route('check.requirement', $request->input('code'));
    }

    public function index( $code ){
        $country = Countries::where('code', $code)->first();
        if( $country )
            return view('theme.pages.check_requirement', compact( 'country' ));
        return back();
    }
}
