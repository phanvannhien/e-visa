<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Visa\Entities\Booking;

use Barryvdh\DomPDF\Facade as PDF;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( Booking $order )
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


        $filePath = public_path('media/pdfs/').'invoice_'.$this->order->id.'.pdf';

        PDF::loadView( 'visa::orders.pdf', ['order' => $this->order ])->save(  $filePath );

        return $this->markdown('emails.order')->attach( $filePath , [
            'mime' => 'application/pdf',
        ]);;

    }
}
