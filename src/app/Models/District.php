<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $connection = 'mysql';
    protected $table = 'districts';
    protected $primaryKey = 'maqh';

    public $timestamps = false;

    public function city(){
        return $this->belongsTo( Cities::class, 'matp' );
    }
}
