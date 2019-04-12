<?php

namespace Modules\Visa\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [];

    public function persons(){
        return $this->hasMany( BookingPerson::class, 'booking_id' );
    }

    public function items(){
        return $this->hasMany( BookingItems::class, 'booking_id' );
    }

    public function user(){
        return $this->belongsTo( User::class , 'user_id');
    }

    public function transport(){
        return $this->belongsTo( Transportation::class, 'transport_id' );
    }
}
