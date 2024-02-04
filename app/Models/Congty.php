<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Congty extends Model
{
    protected $table = 'TBL_CONGTY';
    public $timestamps = false;

    protected $fillable = [
        'MATINHTHANH',
        'TENCONGTY',
        'DIACHI',
        'SODIENTHOAI',
        'EMAIL',
        'WEBSITE',
        'TENGIAMDOC',
        'TENCANBOTRACHNHIEM',
        'ACTIVE',
        'thutu',
    ];
}
