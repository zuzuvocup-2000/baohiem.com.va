<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailExaminationContent extends Model
{
    protected $table = 'tbl_detailed_examination_content';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'examination_package_content_id',
        'active',
        'category_specialist_examination_id',
        'category_test_indications_id',
        'diag_imaging_category_id',
        'examination_package_condition_id',
    ];

}
