<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoiTaiKhoan extends Model
{
    protected $table = 'TBL_GOITAIKHOAN';
    public $timestamps = false;

    protected $fillable = [
        'TENGOIBH',
        'GIATRIGOI',
        'ACTIVE',
        'GHICHU',
        'manienhan',
    ];
}
