<?php

namespace App\Models;

use App\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use Filterable;
    protected $table = 'attributes';
    public $fillable = [

        'code',
        'admin_name',
        'attribute_name',
        'type',
        'validation' ,
        'position' ,
        'is_required',
        'is_unique',
        'is_filterable',
        'is_configurable',
        'is_visible_on_front',
        'is_user_defined',
    ];

    public function options(){
        return $this->hasMany( AttributeOption::class,'attribute_id' );
    }

    public function getOptionSelectHtml(){
        $html = '';

        foreach ( $this->options as $option ){
            $html .= '<option value="'.$option->id.'">'.$option->option_value.'</option>';
        }
        return $html;

    }
}
