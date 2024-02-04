<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChungnguaLichChungngua extends Model
{
    protected $table = 'tbl_chungngua_LICHCHUNGNGUA';
    public $timestamps = false;

    protected $fillable = [
        'MACHUNGNGUA',
        'sothangcachlan1',
        'ACTIVE',
        'nhaclai',
        'sothangnhaclai',
        'tenlantiem',
    ];

    // If you have relationships, define them here
    public function chungngua()
    {
        return $this->belongsTo(ChungnguaDanhsachChungngua::class, 'MACHUNGNGUA', 'MACHUNGNGUA');
    }
}
