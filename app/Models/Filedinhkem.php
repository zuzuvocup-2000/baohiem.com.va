<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filedinhkem extends Model
{
    protected $table = 'TBL_FILEDINHKEM';
    public $timestamps = false;

    protected $fillable = [
        'TENFILE',
        'FOLDER',
        'GHICHU',
        'ACTIVE',
        'MADOTKHAM',
        'LOGDATE',
    ];


    public function thongtindotkham()
    {
        return $this->belongsTo('App\Thongtindotkham', 'MADOTKHAM');
    }
}
