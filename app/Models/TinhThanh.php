<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TinhThanh extends Model
{
    protected $table = 'TBL_TINHTHANH';
    public $timestamps = false;

    protected $fillable = [
        'TENTINHTHANH',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];
}
