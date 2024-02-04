<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuanHe extends Model
{
    protected $table = 'TBL_QUANHE';
    public $timestamps = false;

    protected $fillable = [
        'TENQUANHE',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];
}
