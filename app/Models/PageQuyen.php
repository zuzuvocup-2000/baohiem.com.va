<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageQuyen extends Model
{
    protected $table = 'TBL_page_quyen';
    public $timestamps = false;

    protected $fillable = [
        'quyentruycap',
        'active',
        'Khachang',
        'benhvien',
        'nhansu',
        'benhvien_kb',
        'khachhang_kb',
        'pviadmin',
    ];

    protected $casts = [
        'Khachang' => 'boolean',
        'benhvien' => 'boolean',
        'nhansu' => 'boolean',
        'benhvien_kb' => 'boolean',
        'khachhang_kb' => 'boolean',
        'pviadmin' => 'boolean',
    ];
}
