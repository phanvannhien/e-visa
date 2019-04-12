<?php

namespace Modules\Visa\Entities;

use App\Filters\Filterable;
use App\Models\Countries;
use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
    use Filterable;

    protected $table = 'visa_government';
    protected $fillable = [];


    public $timestamps = false;


    public function country(){
        return $this->hasOne( Countries::class, 'code','code' );
    }

}
