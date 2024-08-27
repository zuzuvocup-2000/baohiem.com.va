<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExaminationPackageCondition extends Model
{
    protected $table = 'tbl_examination_package_condition';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'condition_name',
        'active',
    ];
}
