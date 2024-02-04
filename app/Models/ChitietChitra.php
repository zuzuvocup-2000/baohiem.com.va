<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietChitra extends Model
{
    protected $table = 'TBL_CHITIETCHITRA';
    protected $primaryKey = 'MACHITIETCHITRA';
    public $timestamps = false;

    protected $fillable = [
        'MAUSER',
        'MACHITIETTAIKHOAN',
        'MABENHVIEN',
        'SOTIENCHITRA',
        'ACTIVE',
        'NGAYCHI',
        'GHICHU',
        'NGAYKHAM',
        'DADUYET',
        'UOCCHI',
        'MALOAICHI',
        'MAUSER_BENHVIEN',
        'sotienbituchoi',
        'logdate',
        'MANOIDUNGDIEUTRI',
        'MAKQCHUNGNGUA',
    ];

    // If you have relationships, define them here
    public function benhVien()
    {
        return $this->belongsTo(BenhVien::class, 'MABENHVIEN', 'MABENHVIEN');
    }

    public function chitietTaiKhoan()
    {
        return $this->belongsTo(ChitietTaiKhoan::class, 'MACHITIETTAIKHOAN', 'MACHITIETTAIKHOAN');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'MAUSER', 'MAUSER');
    }

    public function loaiChi()
    {
        return $this->belongsTo(LoaiChi::class, 'MALOAICHI', 'MALOAICHI');
    }

    public function userBenhVien()
    {
        return $this->belongsTo(UserBenhVien::class, 'MAUSER_BENHVIEN', 'MAUSER_BENHVIEN');
    }
}
