<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table = 'TBL_NHANVIEN';
    public $timestamps = false;

    protected $fillable = [
        'MAPHONGBAN',
        'TENNHANVIEN',
        'DIACHI',
        'DIENTHOAI',
        'EMAIL',
        'ACTIVE',
        'MAVITRICHUCVU',
    ];


    public function phongBan()
    {
        return $this->belongsTo(PhongBan::class, 'MAPHONGBAN');
    }

    public function viTriChucVu()
    {
        return $this->belongsTo(ViTriChucVu::class, 'MAVITRICHUCVU');
    }
}
