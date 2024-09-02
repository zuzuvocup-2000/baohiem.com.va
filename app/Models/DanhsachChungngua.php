<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhsachChungngua extends Model
{
    protected $table = 'TBL_DANHSACHCHUNGNGUA';
    public $timestamps = false;

    protected $fillable = [
        'MAPHANLOAICHUNGNGUA',
        'TENCHUNGNGUA',
        'ACTIVE',
        'GHICHU',
        'solanchungngua',
    ];


    public function phanloaichungngua()
    {
        return $this->belongsTo('App\Phanloaichungngua', 'MAPHANLOAICHUNGNGUA');
    }
}
