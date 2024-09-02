<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhmucSKTongquat extends Model
{
    protected $table = 'TBL_DANHMUCSKTONGQUAT';
    public $timestamps = false;

    protected $fillable = [
        'MAPHANLOAISKTONGQUAT',
        'TENSKTONGQUAT',
        'ACTIVE',
    ];


    public function phanloaiSKTongquat()
    {
        return $this->belongsTo('App\PhanloaiSKTongquat', 'MAPHANLOAISKTONGQUAT');
    }
}
