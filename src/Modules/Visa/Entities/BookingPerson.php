<?php

namespace Modules\Visa\Entities;

use Illuminate\Database\Eloquent\Model;

class BookingPerson extends Model
{
    protected $fillable = [
        'booking_id',
        'sure_name',
        'given_name',
        'gender',
        'dob',
        'government_id',
        'passport_number',
    ];


    public function booking(){
        return $this->belongsTo( Booking::class,'booking_id' );
    }

    public function government(){
        return $this->belongsTo( Government::class,'government_id' );
    }

}
