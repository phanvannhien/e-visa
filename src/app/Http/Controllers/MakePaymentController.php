<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

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

use Session;
use Auth;
use DB;
use Mail;
use Redirect;
use URL;
use App\User;

use Modules\Visa\Entities\Payment as MakePayment;
use App\Mail\MakePayment as EmailMakePayment;


class MakePaymentController extends Controller
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


    public function index(){
        return view('theme.pages.make_payment');
    }

    public function post(Request $request){
        $rules = [
            'amount' => 'required|numeric|min:1',
            'payment_for' => 'required',
            'note' => 'required|max:1000',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $cost = (float)$request->input('amount');


        Session::put('make_payment',[
            'amount' =>  $cost,
            'payment_for' => $request->input('payment_for'),
            'note' => $request->input('note'),
        ]);

        $payer = new \PayPal\Api\Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new \PayPal\Api\Amount();
        $amount->setTotal( $cost );
        $amount->setCurrency('USD');

        $transaction = new \PayPal\Api\Transaction();
        $transaction->setAmount($amount);

        $redirectUrls = new \PayPal\Api\RedirectUrls();
        $redirectUrls->setReturnUrl( route('make.payment.success') )
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

    public function success(Request $request){

        if( Session::has('make_payment') ){
            $paymentInfo = Session::get('make_payment');
            $makePayment = new MakePayment();
            $makePayment->amount = $paymentInfo['amount'];
            $makePayment->payment_method = 'Paypal';
            $makePayment->payment_for = $paymentInfo['payment_for'];
            $makePayment->note = $paymentInfo['note'];
            $makePayment->user_agent = $request->header('User-Agent');
            $makePayment->ip = $request->ip();
            $makePayment->user_id = auth()->id();
            $makePayment->payment_id = $request->input('paymentId') ;
            $makePayment->token = $request->input('token') ;
            $makePayment->PayerID = $request->input('PayerID') ;
            $makePayment->status = 'paid' ;
            $makePayment->save();

            Mail::to( auth()->user()->email )
                ->queue(new \App\Mail\MakePaymentEmail($makePayment));

            return redirect()->route('make.payment')->with('status', 'Success! Thanks for ypur payment');

        }
        return redirect()->route('make.payment')->with('warning', 'Fail to payment');

    }


}
