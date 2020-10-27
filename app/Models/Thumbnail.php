<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    //
    public $table = 'thumbnails';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'product_id',
        'img_path'
    ];

    public function products()
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }
}
