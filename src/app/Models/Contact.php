<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    CONST PENDING = 0;
    CONST ACCEPTED = 1;
    CONST DECLINED = 2;
    CONST BLOCKED = 3;

    protected  $table = 'contacts';

    public $fillable = [
        'full_name',
        'email',
        'phone',
        'subject',
        'topic',
        'message',
    ];




}
