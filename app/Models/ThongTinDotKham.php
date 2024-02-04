<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThongTinDotKham extends Model
{
    protected $table = 'TBL_THONGTIN_DOTKHAM';
    public $timestamps = false;

    protected $fillable = [
        'MATAIKHOANSUCKHOE',
        'MABENHVIEN',
        'BENHVIENKHAM',
        'NGAYKHAM',
        'ACTIVE',
        'BACSIKETLUAN',
        'CHIEUCAO',
        'VONGNGUC',
        'MACH',
        'NHIETDO',
        'CANNANG',
        'CHISOBMI',
        'HUYETAP',
        'NHIPTHO',
        'MACBENH',
        'TENBENH',
        'LOAISUCKHOE',
        'NGANHNGHE',
        'HUONGGIAIQUYET',
        'logdate',
    ];

    protected $dates = [
        'NGAYKHAM',
        'logdate',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
        'MACBENH' => 'boolean',
    ];
}
