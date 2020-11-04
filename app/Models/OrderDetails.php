<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    //
    public $timestamp = false;
    public $fillable = [
        'order_code',
        'product_id',
        'product_name',
        'product_price'
    ];

    public $primaryKey = 'order_details_id';
    public $table = 'order_details';

    public function product(){
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }
}
