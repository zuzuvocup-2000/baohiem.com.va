<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThongTinTaiKhoanSucKhoe extends Model
{
    protected $table = 'TBL_THONGTINTAIKHOANSUCKHOE';
    public $timestamps = false;

    protected $fillable = [
        'MAKHACHHANG',
        'MATINHTRANGGIADINH',
        'NHOMMAU',
        'RHESUS',
        'ACTIVE',
        'logdate',
    ];

    protected $dates = [
        'logdate',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];

    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'MAKHACHHANG', 'MAKHACHHANG');
    }

    public function tinhTrangGiaDinh()
    {
        return $this->belongsTo(TinhTrangGiaDinh::class, 'MATINHTRANGGIADINH', 'MATINHTRANGGIADINH');
    }
}
