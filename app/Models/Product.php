<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'category_id',
        'name',
        'price',
        'description',
        'quantity',
        'image',
        'status',
        'slug'
    ];

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    public function thumbnails()
    {
        return $this->hasMany(\App\Models\Thumbnail::class, 'product_id');
    }
}
