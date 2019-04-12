<?php

namespace Modules\Visa\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Visa\Entities\Transportation;

use Nwidart\Modules\Facades\Module;

use Validator;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data = Transportation::paginate();
        return view('visa::transportation.index', compact('data') );
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('visa::transportation.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $rules = [
            'transport_type' => 'required|string',
            'transport_name' => 'required|string',
            'transport_fee' => 'required|integer'
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $data = new Transportation();

        $data->transport_type = $request->input('transport_type');
        $data->transport_name = $request->input('transport_name');
        $data->transport_fee = $request->input('transport_fee');

        if( $data->save() ){
            return redirect()->route( 'transportation.edit', $data->id )
                ->with('status', trans('app.success'));
        }
        return back()->with('status',trans('app.fail'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //return view('visa::transportation.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $data = Transportation::findOrFail($id);
        return view('visa::transportation.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'transport_type' => 'required|string',
            'transport_name' => 'required|string',
            'transport_fee' => 'required|integer'
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $data = Transportation::findOrFail($id);

        $data->transport_type = $request->input('transport_type');
        $data->transport_name = $request->input('transport_name');
        $data->transport_fee = $request->input('transport_fee');

        if( $data->save() ){
            return redirect()->route( 'transportation.edit', $data->id )
                ->with('status', trans('app.success'));
        }
        return back()->with('status',trans('app.fail'));


    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
