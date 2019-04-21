<?php

namespace Modules\Visa\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Visa\Entities\VisaDiscount;
use Validator;

class VisaDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data = VisaDiscount::paginate();
        return view('visa::discount.index', compact('data') );
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('visa::discount.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $rules = [
            'quantity_min' => 'required|integer',
            'quantity_max' => 'required|integer',
            'discount' => 'required|integer'
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $data = new VisaDiscount();

        $data->quantity_min = $request->input('quantity_min');
        $data->quantity_max = $request->input('quantity_max');
        $data->discount = $request->input('discount');

        if( $data->save() ){
            return redirect()->route( 'visa_discount.edit', $data->id )
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
        $data = VisaDiscount::findOrFail($id);
        return view('visa::show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $data = VisaDiscount::findOrFail($id);
     
        return view('visa::discount.edit', compact('data'));
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
            'quantity_min' => 'required|integer',
            'quantity_max' => 'required|integer',
            'discount' => 'required|integer'
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $data = VisaDiscount::findOrFail($id);
        $data->quantity_min = $request->input('quantity_min');
        $data->quantity_max = $request->input('quantity_max');
        $data->discount = $request->input('discount');

        if( $data->save() ){
            return redirect()->route( 'visa_discount.edit', $data->id )
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
        $data = VisaDiscount::destroy($id);
        return redirect()->route('visa_discount.index')->with('status', 'Success');
    }
}
