<?php

namespace Modules\Visa\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Visa\Entities\Government;

class GovernmentController extends Controller
{
    public function index( Request $request ){
        $data = Government::with('country')
            ->paginate(20);

        return view('visa::government.index', ['data' => $data ]);
    }

    public function edit( $id ){
        $data = Government::findOrFail($id);
        return view('visa::government.edit', [ 'data' => $data ] );
    }

    public function update(Request $request, $id){
        $data = Government::findOrFail($id);
        $data->visa_fee = $request->input('visa_fee');
        $data->save();

        return redirect()->route('government.edit', $id)->with('status','Success');
    }
}
