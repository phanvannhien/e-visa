<?php

namespace Modules\Visa\Entities;

use Illuminate\Database\Eloquent\Model;

class BookingItems extends Model
{
    protected $fillable = [
        'booking_id',
        'service_id',
        'service_name',
        'quantity',
        'price',
        'total',
    ];

    public function service(){
        return $this->belongsTo( VisaService::class, 'service_id' );
    }

    public function booking(){
        return $this->belongsTo( Booking::class,'booking_id' );
    }

}
