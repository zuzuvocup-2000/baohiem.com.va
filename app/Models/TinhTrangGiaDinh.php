<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TinhTrangGiaDinh extends Model
{
    protected $table = 'TBL_TINHTRANGGIADINH';
    public $timestamps = false;

    protected $fillable = [
        'DOCTHAN',
        'KETHON',
        'LYDI',
        'ACTIVE',
    ];

    protected $casts = [
        'DOCTHAN' => 'boolean',
        'KETHON' => 'boolean',
        'LYDI' => 'boolean',
        'ACTIVE' => 'boolean',
    ];
}
