<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IDC10ChuanDoanChuong extends Model
{
    protected $table = 'tbl_IDC10chandoanchuong';
    public $timestamps = false;

    protected $fillable = [
        'Tenchuongchandoan',
        'Souutien',
        'Benhthuonggap',
        'TenTA',
    ];
}
