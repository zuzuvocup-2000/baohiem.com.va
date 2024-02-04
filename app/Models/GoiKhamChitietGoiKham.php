<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoiKhamChitietGoiKham extends Model
{
    protected $table = 'tbl_goikham_chitietgoikham';
    public $timestamps = false;

    protected $fillable = [
        'MADANHMUCHIDINHXETNGHIEM',
        'maphanloaiKH_BV',
        'active',
        'madanhmucchuyenkhoa',
        'madanhmuccdha',
    ];


    public function danhmuccdha()
    {
        return $this->belongsTo('App\DanhMucCDHA', 'madanhmuccdha');
    }

    public function danhmucchidinhxetnghiem()
    {
        return $this->belongsTo('App\DanhMucChidinhXetNghiem', 'MADANHMUCHIDINHXETNGHIEM');
    }

    public function danhmucchuyenkhoa()
    {
        return $this->belongsTo('App\DanhMucChuyenKhoa', 'madanhmucchuyenkhoa');
    }

    public function phanloaikhachhang()
    {
        return $this->belongsTo('App\PhanLoaiKhachHangBenhVien', 'maphanloaiKH_BV');
    }
}
