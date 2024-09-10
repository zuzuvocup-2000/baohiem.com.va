<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassifyCDHA extends Model
{
    protected $table = 'tbl_classify_cdha';
    public $timestamps = false;

    protected $fillable = [
        'cdha_name',
        'active',
        'clinic_id',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
