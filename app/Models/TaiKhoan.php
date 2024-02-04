<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = 'TBL_TAIKHOAN';
    public $timestamps = false;

    protected $fillable = [
        'MAGOIACCOUNT',
        'MAHOPDONG',
        'GHICHU',
        'ACTIVE',
        'staffcode',
        'NGAYBATDAU',
        'NGAYKETTHUC',
        'Logdate',
        'tienquygiulai',
    ];

    protected $dates = [
        'NGAYBATDAU',
        'NGAYKETTHUC',
        'Logdate',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];
}
