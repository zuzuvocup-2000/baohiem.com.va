<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagImagingCategory extends Model
{
    protected $table = 'tbl_diag_imaging_category';
    public $timestamps = false;

    protected $fillable = [
        'diag_imaging_name',
        'active',
        'diag_imaging_class_id',
        'clinic_id',
    ];

}
