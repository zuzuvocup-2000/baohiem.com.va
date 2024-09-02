<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KetQuaKham extends Model
{
    protected $table = 'TBL_KETQUAKHAM';
    public $timestamps = false;

    protected $fillable = [
        'MADANHMUCCHUYENKHOA',
        'MADOTKHAM',
        'KETQUA',
        'KETLUAN',
        'BSKHAM',
        'ACTIVE',
    ];

    public function danhMucChuyenKhoa()
    {
        return $this->belongsTo(DanhMucChuyenKhoa::class, 'MADANHMUCCHUYENKHOA');
    }

    public function thongTinDotKham()
    {
        return $this->belongsTo(ThongTinDotKham::class, 'MADOTKHAM');
    }
}
