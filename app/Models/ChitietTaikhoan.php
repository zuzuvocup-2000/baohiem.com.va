<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietTaikhoan extends Model
{
    protected $table = 'TBL_CHITIETTAIKHOAN';
    public $timestamps = false;

    protected $fillable = [
        'MATAIKHOAN',
        'MAUSER',
        'MAKHACHHANG',
        'ACTIVE',
        'LOGDATE',
        'DUKYTRUOC',
        'chutaikhoan',
        'ngaythamgiadautien',
    ];

    // If you have relationships, define them here
    public function taiKhoan()
    {
        return $this->belongsTo(Taikhoan::class, 'MATAIKHOAN', 'MATAIKHOAN');
    }

    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'MAKHACHHANG', 'MAKHACHHANG');
    }
}
