<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsuranceAllowancebenefits extends Model
{
    protected $table = 'tbl_insurance_allowancebenefits';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'amount_usd',
        'exchange_rate',
        'amount_vnd',
        'active',
        'period_id',
        'maximum_value_of_the_fund',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
