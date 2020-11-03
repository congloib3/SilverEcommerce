<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    //
    public $timestamp = false;
    public $fillable = [
        'shipping_name',
        'shipping_address',
        'shipping_phone',
        'shipping_email',
        'shipping_notes',
        'shipping_method'
    ];
    public $primaryKey = 'shipping_id';
    public $table = 'shipping';
}
