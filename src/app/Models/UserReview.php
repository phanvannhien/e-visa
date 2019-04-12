<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    //



    public function author()
    {
        return $this->belongsTo(User::class, 'user_id')->select('avatar','id','user_name');
    }
}
