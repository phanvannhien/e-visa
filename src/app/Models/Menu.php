<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';


    // relations

    public function menu_items(){
        return $this->hasMany( MenuItems::class );
    }
}
