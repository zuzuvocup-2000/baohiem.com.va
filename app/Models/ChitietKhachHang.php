<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietKhachHang extends Model
{
    protected $table = 'TBL_CHITIETKHACHHANG';
    protected $primaryKey = 'MACHITIETKHACHHANG';
    public $timestamps = false;

    protected $fillable = [
        'MAKHACHHANG',
        'MAKHACHHANG_CB',
        'LOGDATE',
        'ACTIVE',
    ];

    // If you have relationships, define them here
    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'MAKHACHHANG', 'MAKHACHHANG');
    }
}
