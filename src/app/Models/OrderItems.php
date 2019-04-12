<?php

namespace App\Models;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    //

    public $fillable = [
        'order_id',
        'product_sku',
        'product_type',
        'product_title',
        'qty_ordered',
        'price',
        'base_price',
        'total',
        'product_id',
    ];

    public function product(){
        return $this->belongsTo( Product::class, 'product_id' );
    }



}
