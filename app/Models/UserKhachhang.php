<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserKhachhang extends Authenticatable
{
    protected $table = 'TBL_USERKHACHHANG';
    public $timestamps = false;

    protected $fillable = [
        'active',
        'username',
        'password',
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
