<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhanLoaiBenhVien extends Model
{
    protected $table = 'TBL_PHANLOAIBENHVIEN';
    public $timestamps = false;

    protected $fillable = [
        'TENPHANLOAIBENHVIEN',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];
}
