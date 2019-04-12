<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class MenuItems extends Model
{
    use NodeTrait;

    protected $table = 'menu_items';


    public function getStatus(){
        if( $this->menu_status ){
            return '<span class="label label-success">'.trans('app.activate').'</span>';
        }
        return '<span class="label label-danger">'.trans('app.deactivate').'</span>';
    }

}
