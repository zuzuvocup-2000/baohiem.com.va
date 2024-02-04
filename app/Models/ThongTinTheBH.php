<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThongTinTheBH extends Model
{
    protected $table = 'TBL_thongtintheBH';
    public $timestamps = false;

    protected $fillable = [
        'Makhachhang',
        'sothe',
        'loaithe',
        'ngaycap',
        'active',
        'sothecu',
    ];

    protected $dates = [
        'ngaycap',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'Makhachhang', 'MAKHACHHANG');
    }
}
