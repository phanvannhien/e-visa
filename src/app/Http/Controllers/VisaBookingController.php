<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;



use Mockery\Exception;
use Modules\Visa\Entities\Booking;
use Modules\Visa\Entities\BookingItems;
use Modules\Visa\Entities\BookingPerson;
use Modules\Visa\Entities\Government;
use Modules\Visa\Entities\Transportation;
use Modules\Visa\Entities\VisaService;

use Validator;
use Session;
use Auth;
use DB;

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use URL;




class VisaBookingController extends Controller
{
    private $_api_context;

    public function __construct()
    {
        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function applyVisaStep1(Request $request){

        $quantity = 1;

        Session::put( 'cart.step', 1 );

        if( !session()->has( 'cart.service_fee' ) ){
            $visa_type = VisaService::where('service_type','visa_fee')->firstOrFail();
            Session::put('cart.service_fee', array(
                'id' => $visa_type->id,
                'name' => $visa_type->service_name ,
                'price' =>  $visa_type->service_price ,
                'quantity' => (int)$quantity,
            ));
        }

        if( $request->has('rush') &&  $request->input('rush') == 1 ){
            if( !session()->has( 'cart.processing_fee' ) ){
                $processing = VisaService::where('service_type','visa_processing')
                    ->where('urgent', 1)
                    ->firstOrFail();
                Session::put('cart.processing_fee', array(
                    'id' => $processing->id,
                    'name' => $processing->service_name ,
                    'price' =>  $processing->service_price ,
                    'quantity' => (int)$quantity,
                ));
            }
        }else{
            if( !session()->has( 'cart.processing_fee' ) ){
                $processing = VisaService::where('service_type','visa_processing')->firstOrFail();
                Session::put('cart.processing_fee', array(
                    'id' => $processing->id,
                    'name' => $processing->service_name ,
                    'price' =>  $processing->service_price ,
                    'quantity' => (int)$quantity,
                ));
            }
        }




        if( !session()->has( 'cart.port' ) ){
            $transportation = Transportation::where('transport_type','airport')->firstOrFail();
            Session::put('cart.port', array(
                'id' => $transportation->id,
                'method' => $transportation->transport_type,
                'transport_name' => $transportation->transport_name
            ));
        }
        if( !session()->has( 'cart.quantity' ) ){

            Session::put('cart.quantity', $quantity);
        }


        return view('theme.pages.apply_visa.apply_visa');
    }

    public function applyVisaStep1Save(Request $request){
        return redirect()->route('apply.visa.step2');
    }

    public function applyVisaStep2(Request $request){

        Session::put('cart.step', 2);
        return view('theme.pages.apply_visa.apply_visa_step2');
    }

    public function applyVisaStep2Save(Request $request){


        $rules = [
            'start' => 'required|date|after:today',
            'end' => 'required|date|after:start',
            'agree_correct' => 'required',
            'agree_condition' => 'required',
        ];

        foreach( $request->get('person') as $key => $val){

            $rules = [
                'person.'.$key.'.sure_name' => 'required|string:max:254',
                'person.'.$key.'.given_name' => 'required|string:max:254',
                'person.'.$key.'.dob' => 'required|string:max:254',
                'person.'.$key.'.passport_number' => 'required|string:max:254',
                'person.'.$key.'.government' => 'required|string',
                'start' => 'required|date|after:today',
                'end' => 'required|date|after:start',
                'agree_correct' => 'required',
                'agree_condition' => 'required',
            ];

        }

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        // Save Order

        if( !session()->has('cart.quantity')
            || !session()->has('cart.service_fee')
            || !session()->has('cart.processing_fee')
            || !session()->has('cart.port')
        ){
            return redirect()->route('apply.visa.step1');
        }

        $quantity = session()->get('cart.quantity');
        $service_fee = session()->get('cart.service_fee');
        $processing_fee = session()->get('cart.processing_fee');
        $port = session()->get('cart.port');


        try{
            DB::beginTransaction();
            $booking = new Booking();
            $booking->start = $request->input('start');
            $booking->end = $request->input('end');
            $booking->special_request = $request->input('special_request');
            $booking->transport_id = $port['id'];
            $booking->user_id = auth()->id();

            $booking->save();

            $arrItems = array(
                array(
                    'booking_id' => $booking->id,
                    'service_id' => $service_fee['id'],
                    'service_name' => $service_fee['name'],
                    'quantity' => $quantity,
                    'price' => $service_fee['price'],
                    'total' => $service_fee['price']*$quantity,
                )
            );

            if( $processing_fee['price'] != 0 ){
                array_push( $arrItems, array(
                    'booking_id' => $booking->id,
                    'service_id' => $processing_fee['id'],
                    'service_name' => $processing_fee['name'],
                    'quantity' => $quantity,
                    'price' => $service_fee['price'],
                    'total' => $service_fee['price']*$quantity,
                ));
            }

            $arrPesons = [];
            foreach( $request->input('person') as $person ){
                $government = Government::where('code', $person['government'] )->first();
                $arrPesons[] = [
                    'booking_id' => $booking->id,
                    'sure_name' => $person['sure_name'],
                    'given_name' => $person['given_name'],
                    'gender' => $person['gender'],
                    'dob' => $person['dob'],
                    'government_id' => $government->id,
                    'passport_number' => $person['passport_number'],
                ];


                if($government){
                    array_push( $arrItems,array(
                        'booking_id' => $booking->id,
                        'service_id' => $government->id,
                        'service_name' => $government->country->value,
                        'quantity' => $quantity,
                        'price' => $government->visa_fee,
                        'total' => $government->visa_fee * $quantity,
                    ));
                }


            }
            BookingPerson::insert( $arrPesons );
            BookingItems::insert( $arrItems );

            DB::commit();

            return redirect()->route('apply.visa.step3');

        }catch (Exception $e){
            DB::rollback();
        }


    }

    public function applyVisaStep3(Request $request){
        Session::put('cart.step', 3);
        return view('theme.pages.apply_visa.apply_visa_step3');
    }

    public function applyVisaStep3Save(Request $request){
        $payer = new \PayPal\Api\Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new \PayPal\Api\Amount();
        $amount->setTotal('1.00');
        $amount->setCurrency('USD');

        $transaction = new \PayPal\Api\Transaction();
        $transaction->setAmount($amount);

        $redirectUrls = new \PayPal\Api\RedirectUrls();
        $redirectUrls->setReturnUrl( route('apply.visa.step4') )
            ->setCancelUrl( route('apply.visa.step3') );

        $payment = new \PayPal\Api\Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        // After Step 3
        try {
            $payment->create( $this->_api_context );
            echo $payment;
            echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";


            return redirect()->away( $payment->getApprovalLink() );

        }
        catch (\PayPal\Exception\PayPalConnectionException $ex) {
            // This will print the detailed information on the exception.
            //REALLY HELPFUL FOR DEBUGGING
            echo $ex->getData();
        }

    }

    public function applyVisaStep4(Request $request){
        Session::put('cart.step', 4);
        dd($request->all());
    }

    public function applyVisaStep4Save(Request $request){
        dd($request->all());
    }

    public function applyVisaPost(Request $request){


        $quantity = $request->input('quantity') ;
        $visa_type = VisaService::findOrFail( $request->input('visa_type') );
        $transportation = Transportation::findOrFail( $request->input('transport') );
        $processing = VisaService::findOrFail( $request->input('processing') );
        $transport_type =  $request->input('transport_type');

        Session::put('cart.service_fee', array(
            'id' => $visa_type->id,
            'name' => $visa_type->service_name ,
            'price' =>  $visa_type->service_price ,
            'quantity' => (int)$quantity,
        ));

        Session::put('cart.processing_fee', array(
            'id' => $processing->id,
            'name' => $processing->service_name ,
            'price' =>  $processing->service_price ,
            'quantity' => (int)$quantity,
        ));

        Session::put('cart.port', array(
            'id' => $transportation->id,
            'method' => $transportation->transport_type,
            'transport_name' => $transportation->transport_name
        ));

        Session::put('cart.quantity', $quantity);

        return view('theme.ajaxs.cart')->render();

    }

    public function getCart()
    {
        # code...
        return view('theme.ajaxs.cart')->render();
    }
}
