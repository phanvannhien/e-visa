<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Sluggable;

    protected $table = 'pages';

    public $fillable = [
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_description',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getStatus(){
        if( $this->status ){
            return '<span class="label label-success">'.trans('app.activate').'</span>';
        }
        return '<span class="label label-danger">'.trans('app.deactivate').'</span>';
    }
}
