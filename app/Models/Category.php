<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $table = 'categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'name',
        'status',
        'image',
        'commodity_id'
    ];

    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'category_id');
    }
    public function commodity()
    {
        return $this->belongsTo(\App\Models\Commodity::class, 'commodity_id');
    }
}
