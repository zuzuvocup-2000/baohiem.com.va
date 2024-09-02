<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietXetNghiem extends Model
{
    protected $table = 'TBL_CHITIETXETNGHIEM';
    public $timestamps = false;

    protected $fillable = [
        'MADANHMUCHIDINHXETNGHIEM',
        'TENCHITIETXETNGHIEM',
        'ACTIVE',
        'GIATRIMAX',
        'GIATRIMIN',
        'DONVITINH',
        'Chisobinhthuong',
        'maphongkham',
    ];

    // If you have relationships, define them here
    public function danhMucXetNghiem()
    {
        return $this->belongsTo(DanhMucChidinhXetNghiem::class, 'MADANHMUCHIDINHXETNGHIEM', 'MADANHMUCHIDINHXETNGHIEM');
    }
}
