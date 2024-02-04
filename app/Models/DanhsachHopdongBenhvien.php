<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhsachHopdongBenhvien extends Model
{
    protected $table = 'TBL_DANHSACHHOPDONG_BENHVIEN';
    public $timestamps = false;

    protected $fillable = [
        'MAHOPDONG',
        'MAUSER_BENHVIEN',
        'ACTIVE',
    ];


    public function hopdongcty()
    {
        return $this->belongsTo('App\Hopdongcty', 'MAHOPDONG');
    }

    public function userbenhvien()
    {
        return $this->belongsTo('App\UserBenhvien', 'MAUSER_BENHVIEN');
    }
}
