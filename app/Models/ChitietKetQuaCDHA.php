<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietKetQuaCDHA extends Model
{
    protected $table = 'TBL_CHITIETKETQUACDHA';
    protected $primaryKey = 'MACHITIETKETQUACDHA';
    public $timestamps = false;

    protected $fillable = [
        'KETQUACDHA',
        'ACTIVE',
        'MADANHMUCCDHA',
        'MADOTKHAM',
    ];

    // If you have relationships, define them here
    public function danhMucCDHA()
    {
        return $this->belongsTo(DanhMucCDHA::class, 'MADANHMUCCDHA', 'MADANHMUCCDHA');
    }

    public function chitietKetQuaCDHA()
    {
        return $this->belongsTo(ChitietKetQuaCDHA::class, 'MACHITIETKETQUACDHA', 'MACHITIETKETQUACDHA');
    }
}
