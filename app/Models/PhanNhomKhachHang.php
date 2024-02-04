<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhanNhomKhachHang extends Model
{
    protected $table = 'TBL_PHANNHOMKHACHHANG';
    public $timestamps = false;

    protected $fillable = [
        'TENNHOMKHACHHANG',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];
}
