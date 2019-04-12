<?php

namespace App\Http\Controllers\Admin;

use App\AttributeGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupAttributeController extends Controller
{
    //

    public function create($group_id){
        $group = AttributeGroup::findOrFail( $group_id );
        return view('admin.group_attributes.create', compact('group') );
    }
}
