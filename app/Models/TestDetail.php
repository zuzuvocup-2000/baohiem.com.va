<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestDetail extends Model
{
    protected $table = 'tbl_test_detail';
    public $timestamps = false;

    protected $fillable = [
        'list_of_test_id',
        'test_detail_name',
        'active',
        'max',
        'min',
        'unit',
        'normal_index',
        'clinic_id',
    ];

}
