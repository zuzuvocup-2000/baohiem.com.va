<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TieuSuBanThan extends Model
{
    protected $table = 'TBL_TIEUSU_BANTHAN';
    public $timestamps = false;

    protected $fillable = [
        'TENBENH',
        'PHATHIENNAM_BENH',
        'BENHNGHENGHIEP',
        'PHATHIENNAM_BENHNGHENGHIEP',
        'ACTIVE',
        'MADOTKHAM',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];

    public function thongTinDotKham()
    {
        return $this->belongsTo(ThongTinDotKham::class, 'MADOTKHAM', 'MADOTKHAM');
    }
}
