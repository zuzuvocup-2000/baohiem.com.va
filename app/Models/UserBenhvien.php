<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBenhvien extends Model
{
    protected $table = 'TBL_USER_BENHVIEN';
    public $timestamps = false;

    protected $fillable = [
        'MABENHVIEN',
        'TENNHANVIEN',
        'TENDANGNHAP',
        'MATKHAU',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];


    public function benhvien()
    {
        return $this->belongsTo(Benhvien::class, 'MABENHVIEN', 'MABENHVIEN');
    }
}
