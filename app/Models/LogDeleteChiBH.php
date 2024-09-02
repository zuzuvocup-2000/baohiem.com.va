<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogDeleteChiBH extends Model
{
    protected $table = 'tbl_logdelete_chiBH';
    public $timestamps = false;

    protected $fillable = [
        'machitietchitra',
        'user_benhvien',
        'mauser',
        'mauser_benhvien',
        'active',
    ];

    protected $dates = [
        'logdate',
    ];

    public function chiTietChiTra()
    {
        return $this->belongsTo(ChiTietChiTra::class, 'machitietchitra', 'MACHITIETCHITRA');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'mauser', 'MAUSER');
    }

    public function userBenhVien()
    {
        return $this->belongsTo(UserBenhVien::class, 'mauser_benhvien', 'MAUSER_BENHVIEN');
    }
}
