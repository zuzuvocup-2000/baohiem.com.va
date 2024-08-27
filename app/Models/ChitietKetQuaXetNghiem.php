<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietKetQuaXetNghiem extends Model
{
    protected $table = 'TBL_CHITIETKETQUAXETNGHIEM';
    protected $primaryKey = 'CHITIETKETQUAXN';
    public $timestamps = false;

    protected $fillable = [
        'MADOTKHAM',
        'MACHITIETXETNGHIEM',
        'MAUSER',
        'MATAIKHOANSUCKHOE',
        'ACTIVE',
        'KETQUA',
        'NGAYTHUCHIEN',
    ];

   
}
