<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserBenhvien extends Authenticatable
{
    protected $table = 'TBL_USER_BENHVIEN';
    public $timestamps = false;

    protected $fillable = [
        'MABENHVIEN',
        'TENNHANVIEN',
        'username',
        'password',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];


    public function benhvien()
    {
        return $this->belongsTo(Benhvien::class, 'MABENHVIEN', 'MABENHVIEN');
    }
}
