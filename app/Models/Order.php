<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public $timestamp = false;
    public $fillable = [
        'shipping_id',
        'order_status',
        'order_code',
        'created_at'
    ];
    public $primaryKey = 'order_id';
    public $table = 'orders';
}
