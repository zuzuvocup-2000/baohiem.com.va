<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhanLoaiKhachHangTheoBenhVien extends Model
{
    protected $table = 'tbl_phanloaikhachhang_theobenhvien';
    public $timestamps = false;

    protected $fillable = [
        'tenphanloai',
        'active',
        'thutu',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
