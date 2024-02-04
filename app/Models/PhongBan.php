<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhongBan extends Model
{
    protected $table = 'TBL_PHONGBAN';
    public $timestamps = false;

    protected $fillable = [
        'TENPHONGBAN',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];
}
