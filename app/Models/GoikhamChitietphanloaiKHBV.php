<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoikhamChitietphanloaiKHBV extends Model
{
    protected $table = 'tbl_$goikham_chitietphanloaiKH_BV';
    protected $primaryKey = 'machitietgoikham_phanloai';
    public $timestamps = false;

    protected $fillable = [
        'maphanloaiKH_BV',
        'magoikham',
        'active',
    ];

    public function goikham()
    {
        return $this->belongsTo(Goikham::class, 'magoikham', 'magoikham');
    }
}
