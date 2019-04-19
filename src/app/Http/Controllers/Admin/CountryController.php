<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Http\Filters\CountryFilter;
use App\Models\Countries;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index( Request $request, CountryFilter $filters ){
        $data = Countries::filter($filters)->orderBy('name')
            ->select('id','code as country_code','value as name','native','phone','continent','capital','currency','languages','visa_fee')
            ->paginate(20);
        return view('admin.systems.countries.index', ['data' => $data ]);
    }

    public function edit( $id ){
        $countries = Countries::findOrFail($id);
        return view('admin.systems.countries.edit', [ 'data' => $countries] );
    }
}
