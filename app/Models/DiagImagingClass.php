<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagImagingClass extends Model
{
    protected $table = 'tbl_diag_imaging_class';
    public $timestamps = false;

    protected $fillable = [
        'diag_imaging_name',
        'active',
        'clinic_id',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
