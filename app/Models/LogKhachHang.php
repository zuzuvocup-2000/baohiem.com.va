<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogKhachHang extends Model
{
    protected $table = 'TBL_LOGKHACHHANG';
    public $timestamps = false;

    protected $fillable = [
        'Mauserkhachhang',
        'active',
        'hanhdong',
    ];

    protected $dates = [
        'logdate',
    ];

    public function userKhachHang()
    {
        return $this->belongsTo(UserKhachHang::class, 'Mauserkhachhang', 'MAUSERKHACHHANG');
    }
}
