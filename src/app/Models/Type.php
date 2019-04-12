<?php

namespace App\Models;

use App\AttributeGroup;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    public $fillable = [
        'type_name',
        'type_slug',
    ];


    public function attributes(){
        return $this->belongsToMany( Attribute::class, 'attribute_type', 'type_id','attribute_id');
    }

}
