<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietKetQuaXetNghiem extends Model
{
    protected $table = 'TBL_CHITIETKETQUAXETNGHIEM';
    protected $primaryKey = 'CHITIETKETQUAXN';
    public $timestamps = false;

    protected $fillable = [
        'MADOTKHAM',
        'MACHITIETXETNGHIEM',
        'MAUSER',
        'MATAIKHOANSUCKHOE',
        'ACTIVE',
        'KETQUA',
        'NGAYTHUCHIEN',
    ];

    // If you have relationships, define them here
    public function taiKhoanSucKhoe()
    {
        return $this->belongsTo(ThongTinTaiKhoanSucKhoe::class, 'MATAIKHOANSUCKHOE', 'MATAIKHOANSUCKHOE');
    }

    public function chiTietXetNghiem()
    {
        return $this->belongsTo(ChiTietXetNghiem::class, 'MACHITIETXETNGHIEM', 'MACHITIETXETNGHIEM');
    }

    public function thongTinDotKham()
    {
        return $this->belongsTo(ThongTinDotKham::class, 'MADOTKHAM', 'MADOTKHAM');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'MAUSER', 'MAUSER');
    }
}
