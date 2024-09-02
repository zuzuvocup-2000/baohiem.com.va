<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExaminationPackageTypecustomeDetail extends Model
{
    protected $table = 'tbl_examination_package_typecustome_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'customer_type_id',
        'examination_package_id',
        'active',
    ];

}
