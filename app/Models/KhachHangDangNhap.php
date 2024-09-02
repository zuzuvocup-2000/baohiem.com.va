<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHangDangNhap extends Model
{
    protected $table = 'TBL_KHACHHANG_DANGNHAP';
    public $timestamps = false;

    protected $fillable = [
        'makhachhang',
        'active',
        'datelog',
        'makhachhanng',
        'localIP',
        'Computername',
    ];

    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'makhachhang');
    }
}
