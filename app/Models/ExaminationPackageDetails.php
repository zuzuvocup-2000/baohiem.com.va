<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExaminationPackageDetails extends Model
{
    protected $table = 'tbl_examination_package_details';
    public $timestamps = false;

    protected $fillable = [
        'list_of_test_id',
        'customer_type_id',
        'active',
        'specialty_catalogue_id',
        'list_cdha_id',
    ];

}
