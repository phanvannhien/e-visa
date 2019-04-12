<?php

namespace App;

use App\Filters\Filterable;
use App\Models\Type;
use App\Models\UserReview;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


use App\Models\Cities;
use App\Models\District;
use App\Models\Wards;
use App\Models\Comment;
use App\Models\Brand;

class Product extends Model
{
    use Filterable, Sluggable;

    protected $table = 'products';

    public $fillable = [
        'title',
        'slug',
        'thumbnail',
        'sort_description',
        'description',
        'url',
        'status',
        'meta_title',
        'meta_description'
    ];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getThumbnail(){
        if( $this->thumbnail == '' ){
            return url('admin/dist/img/default-50x50.gif');
        }
        return $this->thumbnail;
    }


    public function getCategories(){
        $html = '';
        foreach ( $this->categories as $cat ){
           $html .= '<a href="'.route('categories.edit', $cat->id ).'">'.$cat->category_name.'</a>, ';
        }
        return $html;
    }

    public function getCategoriesFront(){
        $html = '';
        $arr = $this->categories->pluck('category_name')->toArray();
        return implode(', ', $arr);
    }

    public function getPriceHTML(){
        if( $this->sale_price != 0 || $this->sale_price != '' ){
            $html = '<p><strong class="price">'.number_format($this->sale_price).'đ</strong>
                <span class="regular-price">'.number_format($this->price).'đ</span></p>';
        }
        else{
            $html = '<strong class="price">'.number_format($this->price).'đ</strong>';
        }
        return $html;
    }

    public function getDiscount(){
        if( $this->sale_price != 0 || $this->sale_price != '' ){
            $discount = round(($this->price-$this->sale_price)/$this->price*100);
            return -$discount.'%';
        }

        return 0;
    }

    // Relations


    public function categories(){
        return $this->belongsToMany( Category::class );
    }


    public function galleries(){
        return $this->hasMany( ProductGallery::class,'product_id' );
    }

    public function brand(){
        return $this->belongsTo( Brand::class );
    }

    public function reviews(){
        return $this->hasMany( UserReview::class, 'product_id' );
    }

}

