<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestResultsDetail extends Model
{
    protected $table = 'tbl_test_results_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'health_checkup_information_id',
        'test_detail_id',
        'user_id',
        'health_account_id',
        'active',
        'results',
        'date',
    ];

   
}
