<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vitrichucvu extends Model
{
    protected $table = 'TBL_VITRICHUCVU';
    public $timestamps = false;

    protected $fillable = [
        'TENVITRICHUCVU',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];
}
