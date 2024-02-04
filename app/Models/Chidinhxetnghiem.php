<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chidinhxetnghiem extends Model
{
    protected $table = 'TBL_CHIDINHXETNGHIEM';
    protected $primaryKey = 'MACHIDINHXETNGHIEM';
    public $timestamps = false;

    protected $fillable = [
        'ACTIVE',
        'DATELOG',
        'MADOTKHAM',
        'MADANHMUCCCHIDINHXETNGHIEM',
    ];

    // If you have relationships, define them here
    public function dotkham()
    {
        return $this->belongsTo(Thongtindotkham::class, 'MADOTKHAM', 'MADOTKHAM');
    }

    public function danhmucchidinhxetnghiem()
    {
        return $this->belongsTo(Danhmucchidinhxetnghiem::class, 'MADANHMUCCCHIDINHXETNGHIEM', 'MADANHMUCCCHIDINHXETNGHIEM');
    }
}
