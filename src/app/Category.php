<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

use App\CategoryProductTrans;



class Category extends Model
{
    use NodeTrait;


    protected $table = 'categories';

    public $fillable = [
        'slug',
        'category_name',
        'category_description',
        'image',
        'status',
        'parent_id',
        'meta_title',
        'meta_description',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'category_name'
            ]
        ];
    }

    public function getImage(){
        if( $this->image == '' ){
            return url('admin/dist/img/default-50x50.gif');
        }
        return $this->image;
    }

    public function products(){
        return $this->belongsToMany( Product::class);
    }



}
