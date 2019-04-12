<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //

    public function getStatus(){
        if( $this->status ){
            return '<span class="label label-success">'.trans('app.activate').'</span>';
        }
        return '<span class="label label-danger">'.trans('app.deactivate').'</span>';
    }
}
