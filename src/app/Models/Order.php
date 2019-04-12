<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function items(){
        return $this->hasMany( OrderItems::class, 'order_id' );
    }

    public function customer(){
        return $this->belongsTo( User::class, 'user_id' );
    }

    public function city(){
        return $this->belongsTo( Cities::class, 'matp' );
    }
    public function district(){
        return $this->belongsTo( District::class, 'maqh' );
    }

}
