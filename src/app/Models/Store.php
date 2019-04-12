<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Cities;
use App\Models\District;
use App\Models\Wards;

class Store extends Model
{
    protected $table = 'stores';

    public function getCity(){
        return $this->belongsTo( Cities::class, 'matp','matp' )
            ->select('name')->first();
    }

    public function getDistrict(){
        return $this->belongsTo( District::class, 'maqh','maqh' )
            ->select('name')
            ->first();
    }

    public function getWard(){
        return $this->belongsTo( Wards::class, 'xaid','xaid' )
            ->select('name')
            ->first();
    }

    public function getFullAddress(){
        return $this->address.', '.$this->getWard()->name.', '.$this->getDistrict()->name.', '.$this->getCity()->name;
    }

}
