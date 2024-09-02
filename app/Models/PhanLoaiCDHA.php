<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhanLoaiCDHA extends Model
{
    protected $table = 'TBL_PHANLOAICDHA';
    public $timestamps = false;

    protected $fillable = [
        'TENPHANLOAICDHA',
        'ACTIVE',
        'maphongkham',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];
}
