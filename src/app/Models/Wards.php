<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    protected $connection = 'mysql';
    protected $table = 'wards';
    protected $primaryKey = 'xaid';

    public $timestamps = false;

    public function district(){
        return $this->belongsTo( District::class, 'maqh' );
    }
}
