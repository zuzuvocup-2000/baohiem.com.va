<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExaminationPackageExclusionDetail extends Model
{
    protected $table = 'tbl_examination_package_exclusion_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'package_detail_id',
        'examination_content_id',
        'active',
    ];

}
