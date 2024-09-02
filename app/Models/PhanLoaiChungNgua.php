<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhanLoaiChungNgua extends Model
{
    protected $table = 'TBL_PHANLOAICHUNGNGUA';
    public $timestamps = false;

    protected $fillable = [
        'CHUNGNGUABATBUOC',
        'TENPHANLOAI',
        'ACTIVE',
    ];

    protected $casts = [
        'CHUNGNGUABATBUOC' => 'boolean',
        'ACTIVE' => 'boolean',
    ];
}
