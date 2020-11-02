<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    //
    public $table = 'commodities';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'name',
        'image'
    ];

    public function categories()
    {
        return $this->hasMany(\App\Models\Category::class, 'commodity_id');
    }
}
