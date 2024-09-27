<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagImagingResultDetail extends Model
{
    protected $table = 'tbl_diag_imaging_result_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'diag_imaging_result',
        'active',
        'diag_imaging_category_id',
        'health_checkup_information_id',
    ];
}
