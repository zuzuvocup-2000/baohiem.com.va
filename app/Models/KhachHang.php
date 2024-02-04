<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'TBL_KHACHHANG';
    public $timestamps = false;

    protected $fillable = [
        'MAPHANNHOMKHACHHANG',
        'MATINHTHANH',
        'TENHO',
        'NAMSINH',
        'DIACHICUTRU',
        'SOCMND',
        'NGAYCAPCMND',
        'NOICAP',
        'ID',
        'DIENTHOAILIENLAC',
        'EMAIL',
        'ACTIVE',
        'mauser',
        'gioitinh',
        'images',
        'FileData',
        'Filename',
        'FileSize',
        'ContentType',
        'folder',
        'khoa',
        'ngaykhoa',
        'maphanloaiKH_BV',
        'CHUABENH',
        'Logdate',
    ];

    public function phanNhomKhachHang()
    {
        return $this->belongsTo(PhanNhomKhachHang::class, 'MAPHANNHOMKHACHHANG');
    }

    public function tinhThanh()
    {
        return $this->belongsTo(TinhThanh::class, 'MATINHTHANH');
    }

    public function phanLoaiKhachHang()
    {
        return $this->belongsTo(PhanLoaiKhachHang::class, 'maphanloaiKH_BV');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'mauser');
    }
}
