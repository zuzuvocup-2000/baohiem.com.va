<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChungnguaKetqua extends Model
{
    protected $table = 'tbl_chungngua_KQCHUNGNGUA';
    public $timestamps = false;

    protected $fillable = [
        'MALICHCHUNGNGUA',
        'makhachhang',
        'GHICHU',
        'ACTIVE',
        'ngaytiem',
        'KQnhaclai',
    ];

    // If you have relationships, define them here
    public function lichChungngua()
    {
        return $this->belongsTo(ChungnguaLichChungngua::class, 'MALICHCHUNGNGUA', 'MALICHCHUNGNGUA');
    }

    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'makhachhang', 'MAKHACHHANG');
    }
}
