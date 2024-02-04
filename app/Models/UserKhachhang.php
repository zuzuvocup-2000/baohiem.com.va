<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserKhachhang extends Model
{
    protected $table = 'TBL_USERKHACHHANG';
    public $timestamps = false;

    protected $fillable = [
        'active',
        'tendangnhap',
        'MATKHAU',
        'logdate',
        'MAKHACHHANG',
        'ChinhanhGASID',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];


    public function khachhang()
    {
        return $this->belongsTo(Khachhang::class, 'MAKHACHHANG', 'MAKHACHHANG');
    }
}
