<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    public $timestamp = false;
    public $fillable = [
        'name_quanhuyen',
        'type',
        'matp'
    ];
    public $primaryKey = 'maqh';
    public $table = 'tbl_quanhuyen';
}
