<?php

namespace Modules\Visa\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [];

    public function user(){
        return $this->belongsTo( User::class, 'user_id' );
    }
}
