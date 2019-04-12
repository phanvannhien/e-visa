<?php

namespace Modules\Visa\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Visa\Entities\VisaService;

use Validator;

class VisaServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data = VisaService::paginate();
        return view('visa::service.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('visa::service.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $rules = [
            'service_type' => 'required|string',
            'service_name' => 'required|string',
            'service_price' => 'required|integer'
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $data = new VisaService();

        $data->service_type = $request->input('service_type');
        $data->service_name = $request->input('service_name');
        $data->service_price = $request->input('service_price');
        $data->service_description = $request->input('service_description');

        if( $data->save() ){
            return redirect()->route( 'visa-service.edit', $data->id )
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

    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $data = VisaService::findOrFail($id);
        return view('visa::service.edit', compact('data'));
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
            'service_type' => 'required|string',
            'service_name' => 'required|string',
            'service_price' => 'required|integer'
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $data = VisaService::findOrFail($id);

        $data->service_type = $request->input('service_type');
        $data->service_name = $request->input('service_name');
        $data->service_price = $request->input('service_price');
        $data->service_description = $request->input('service_description');

        if( $data->save() ){
            return redirect()->route( 'visa-service.edit', $data->id )
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
