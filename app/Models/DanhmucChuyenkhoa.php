<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhmucChuyenkhoa extends Model
{
    protected $table = 'TBL_DANHMUCCHUYENKHOA';
    public $timestamps = false;

    protected $fillable = [
        'TENCHUYENKHOA',
        'ACTIVE',
        'maphongkham',
    ];


    public function phongkham()
    {
        return $this->belongsTo('App\Phongkham', 'maphongkham');
    }
}
