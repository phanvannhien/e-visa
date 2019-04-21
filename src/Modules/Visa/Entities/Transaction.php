<?php

namespace Modules\Visa\Entities;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [];

    public function order(){
        return $this->belongsTo( Booking::class, 'order_id' );

    }

}
