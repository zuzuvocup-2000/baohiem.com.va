<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChungnguaDanhsachPhanloai extends Model
{
    protected $table = 'TBL_CHUNGNGUA_DANHSACHPHANLOAICHUNGNGUA';
    public $timestamps = false;

    protected $fillable = [
        'TENPHANLOAI',
        'GHICHU',
        'ACTIVE',
    ];

    // If you have relationships, define them here
    public function chungNgua()
    {
        return $this->hasMany(Chungngua::class, 'MAPHANLOAICHUNGNGUA', 'MAPHANLOAICHUNGNGUA');
    }
}
