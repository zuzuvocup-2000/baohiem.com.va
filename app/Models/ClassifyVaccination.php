<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassifyVaccination extends Model
{
    protected $table = 'tbl_classify_vaccination';
    public $timestamps = false;

    protected $fillable = [
        'compulsory_vaccination',
        'classify_name',
        'active',
    ];

    protected $casts = [
        'compulsory_vaccination' => 'boolean',
        'active' => 'boolean',
    ];
}
