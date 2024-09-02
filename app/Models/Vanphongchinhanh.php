<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vanphongchinhanh extends Model
{
    protected $table = 'TBL_VANPHONGCHINHANH';
    public $timestamps = false;

    protected $fillable = [
        'MAPHONGBAN',
        'MATINHTHANH',
        'TENVANPHONG',
        'DIACHIVANPHONG',
        'ACTIVE',
        'DIENTHOAIVANPHONG',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];


    public function phongban()
    {
        return $this->belongsTo(Phongban::class, 'MAPHONGBAN', 'MAPHONGBAN');
    }

    public function tinhtp()
    {
        return $this->belongsTo(Tinhthanh::class, 'MATINHTHANH', 'MATINHTHANH');
    }
}
