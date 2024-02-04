<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Benhvien extends Model
{
    protected $table = 'TBL_BENHVIEN';
    protected $primaryKey = 'MABENHVIEN';
    public $timestamps = false;

    protected $fillable = [
        'MAPHANLOAIBENHVIEN',
        'TENBENHVIEN',
        'ACTIVE',
        'DIACHI',
        'EMAIL',
        'PHONE',
        'NGUOILENHE',
    ];

    public function phanloaibenhvien()
    {
        return $this->belongsTo(Phanloaibenhvien::class, 'MAPHANLOAIBENHVIEN', 'MAPHANLOAIBENHVIEN');
    }
}
