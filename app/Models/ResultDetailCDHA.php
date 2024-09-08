<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResultDetailCDHA extends Model
{
    protected $table = 'tbl_result_detail_cdha';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'result_cdha',
        'active',
        'cdha_category_id',
        'health_checkup_information_id',
    ];
}
