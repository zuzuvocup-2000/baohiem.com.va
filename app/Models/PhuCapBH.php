<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhuCapBH extends Model
{
    protected $table = 'tbl_phucapBH';
    public $timestamps = false;

    protected $fillable = [
        'SotienUSD',
        'tigia',
        'sotienVND',
        'active',
        'manienhan',
        'Giatrimaxcuaquy',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
