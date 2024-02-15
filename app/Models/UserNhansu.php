<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserNhansu extends Authenticatable
{
    protected $table = 'tbl_usernhansu';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'makhachhang',
        'active',
        'logdate',
        'FullAdmin',
        'Gaspermission',
    ];

    protected $casts = [
        'active' => 'boolean',
        'FullAdmin' => 'boolean',
    ];

    public function khachhang()
    {
        return $this->belongsTo(Khachhang::class, 'makhachhang', 'MAKHACHHANG');
    }
}
