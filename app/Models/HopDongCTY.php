<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HopDongCTY extends Model
{
    protected $table = 'TBL_HOPDONGCTY';
    public $timestamps = false;

    protected $fillable = [
        'SOHOPDONG_PHULUC',
        'NGAYKY',
        'THOIGIANHIEULUC',
        'THOIGIANKETTHUC',
        'TONGGIATRIHD',
        'TONGSOKHACHHANG',
        'PHULUC',
        'SOHDPHULUCTHAMKHAO',
        'ACTIVE',
        'TENHOPDONG',
        'mauser',
        'giahan',
        'mahopdongcu',
        'machitietnienhan',
        'tenfile',
        'folder',
        'HDGAS',
    ];
}
