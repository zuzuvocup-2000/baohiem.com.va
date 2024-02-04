<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhmucChidinhXetnghiem extends Model
{
    protected $table = 'TBL_DANHMUCCHIDINHXETNGHIEM';
    public $timestamps = false;

    protected $fillable = [
        'TENXETNGHIEM',
        'ACTIVE',
        'MAPHANLOAIXN',
        'MAPHONGKHAM',
    ];


    public function phanloaiXetnghiem()
    {
        return $this->belongsTo('App\PhanloaiXetnghiem', 'MAPHANLOAIXN');
    }

    public function phongkham()
    {
        return $this->belongsTo('App\Phongkham', 'MAPHONGKHAM');
    }
}
