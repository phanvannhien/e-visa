<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Visa\Entities\Payment;


use Barryvdh\DomPDF\Facade as PDF;

class MakePaymentEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $order;


    public function __construct( Payment $order )
    {
        $this->order = $order;
        $this->from( app('Configuration')->get('email') );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $filePath = public_path('media/pdfs/').'order_make_payment_'.$this->order->id.'.pdf';
        PDF::loadView( 'visa::orders.order_payment', ['order' => $this->order ])->save(  $filePath );
        return $this->markdown('emails.order_make_payment')->attach( $filePath , [
            'mime' => 'application/pdf',
        ]);

    }
}
