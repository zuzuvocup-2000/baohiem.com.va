<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChungnguaThoigianchungngua extends Model
{
    protected $table = 'TBL_CHUNGNGUA_THOIGIANCHUNGNGUA';
    public $timestamps = false;

    protected $fillable = [
        'THOIGIANCHUNG',
        'GHICHU',
        'ACTIVE',
        'sothutu',
    ];
}
