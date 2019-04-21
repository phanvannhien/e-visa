<?php

namespace Modules\Visa\Http\Controllers\Admin;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Visa\Entities\Booking;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data = Booking::paginate();

        return view('visa::orders.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('visa::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $order = Booking::findOrFail($id);
        return view('visa::orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('visa::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function viewPDF($id, $type){
        $order = Booking::findOrFail( $id );
        if( $type == 'paid' )
            return PDF::loadView( 'visa::orders.pdf_paid', compact('order') )->stream();
        if( $type == 'unpaid' ){
            return PDF::loadView( 'visa::orders.pdf', compact('order') )->stream();
        }
    }

}
