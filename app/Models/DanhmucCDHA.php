<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhmucCDHA extends Model
{
    protected $table = 'TBL_DANHMUCCDHA';
    public $timestamps = false;

    protected $fillable = [
        'TENCHIDINHCDHA',
        'ACTIVE',
        'MAPHANLOAICDHA',
        'maphongkham',
    ];


    public function phanloaiCDHA()
    {
        return $this->belongsTo('App\PhanloaiCDHA', 'MAPHANLOAICDHA');
    }

    public function phongkham()
    {
        return $this->belongsTo('App\Phongkham', 'maphongkham');
    }
}
