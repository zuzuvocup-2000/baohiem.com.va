<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhanLoaiXetNghiem extends Model
{
    protected $table = 'TBL_PHANLOAIXETNGHIEM';
    public $timestamps = false;

    protected $fillable = [
        'TENPHANLOAIXN',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];
}
