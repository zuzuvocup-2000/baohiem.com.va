<?php
// app/ChitietNhansu.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietNhansu extends Model
{
    protected $table = 'TBL_CHITIETNHANSU';
    protected $primaryKey = 'MACHITIETNHANSU';
    public $timestamps = false;

    protected $fillable = [
        'MAUSERNHANSU',
        'MAKB_USERNHANSU',
    ];

    // If you have relationships, define them here
    public function userNhansu()
    {
        return $this->belongsTo(UserNhansu::class, 'MAUSERNHANSU', 'mauser_nhansu');
    }
}
