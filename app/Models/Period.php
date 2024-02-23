<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $table = 'tbl_period';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'period_name',
        'log_date',
        'from_year',
        'to_year',
        'active',
        'order',
    ];
}
