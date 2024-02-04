<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chungngua extends Model
{
    protected $table = 'tbl_chungngua_danhsachCHUNGNGUA';
    public $timestamps = false;

    protected $fillable = [
        'TENCHUNGNGUA',
        'tenvaxcin',
        'ACTIVE',
        'LIEULUONG',
        'CHIDINH',
        'TREEM',
        'MAPHANLOAICHUNGNGUA',
    ];

    // If you have relationships, define them here
    public function loaiChungNgua()
    {
        return $this->belongsTo(ChungnguaDanhsachPhanloai::class, 'MAPHANLOAICHUNGNGUA', 'MAPHANLOAICHUNGNGUA');
    }
}
