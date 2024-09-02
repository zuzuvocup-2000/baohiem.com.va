<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhanLoaiSKTongQuat extends Model
{
    protected $table = 'TBL_PHANLOAISKTONGQUAT';
    public $timestamps = false;

    protected $fillable = [
        'TENPHANLOAI',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];
}
