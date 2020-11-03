<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feeship extends Model
{
    //
    public $timestamps = false;
    public $fillable = [
        'fee_matp',
        'fee_maqh',
        'fee_feeship'
    ];
    public $primaryKey = 'fee_id';
    public $table = 'tbl_feeship';

    public function city(){
        return $this->belongsTo(\App\Models\City::class, 'fee_matp');
    }
    public function province(){
        return $this->belongsTo(\App\Models\Province::class, 'fee_maqh');
    }
}
