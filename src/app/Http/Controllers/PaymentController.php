<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/** All Paypal Details class **/
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
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
use Mail;
use Auth;
use DB;

use Modules\Visa\Entities\Transaction as VisaTransaction;

class PaymentController extends Controller
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

    public function payment( $orderID ){
        $order = Booking::findOrFail( $orderID );

        if( ! $order ){
            return back()->with('status', 'Order not found');
        }

        $payer = new \PayPal\Api\Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new \PayPal\Api\Amount();
        $amount->setTotal( $order->total );
        $amount->setCurrency('USD');

        $transaction = new \PayPal\Api\Transaction();
        $transaction->setAmount($amount);

        $redirectUrls = new \PayPal\Api\RedirectUrls();
        $redirectUrls->setReturnUrl( route('apply.visa.step3.success', [ 'order_id' => $orderID ]) )
            ->setCancelUrl( route('home') );

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


    public function paymentPaypalCallback(Request $request, $order_id){
        Session::put('cart.step', 4);
        // Save transaction
        $order = Booking::findOrFail( $order_id );

        if( ! $order ){
            return redirect()->route('home')->with('status','Payment for Order not found');;
        }

        if( !$request->has('paymentId') && !$request->has('token') && $request->has('PayerID')){
            return redirect()->route('home')->with('status','Payment fail');
        }

        $transaction = new VisaTransaction();
        $transaction->user_id = auth()->id();
        $transaction->order_id = $order_id;
        $transaction->payment_title = 'Paypal';
        $transaction->paymentId = $request->input('paymentId') ;
        $transaction->token = $request->input('token') ;
        $transaction->PayerID = $request->input('PayerID') ;

        try{
            DB::beginTransaction();
            $transaction->save();

            $order->payment_status = 'paid';
            $order->save();

            DB::commit();

            Mail::to( auth()->user()->email )
                ->queue(new PaymentSuccessEmail($order));

        }catch (Exception $e){
            DB::rollback();
            return redirect()->route('apply.visa.step3', ['order_id', $order->id ] )->with('status','Payment fail!');
        }

        // send mail payment completed
        return redirect()->route('apply.visa.step4');
    }

}
