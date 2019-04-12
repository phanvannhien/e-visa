<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;


class TypeAttributeGroup extends Model
{
    //

    use SortableTrait;

    public $sortable = [
        'order_column_name' => 'position',
        'sort_when_creating' => true,
    ];


    public $timestamps = false;

    protected $table = 'type_attribute_groups';

    public $fillable = ['attribute_id','attribute_group_id','position','is_user_defined'];


    public function group_attributes(){
        return $this->hasMany( Attributes::class, 'attribute_id' );
    }

}
