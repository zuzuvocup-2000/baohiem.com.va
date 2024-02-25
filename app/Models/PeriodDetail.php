<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeriodDetail extends Model
{
    protected $table = 'tbl_period_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'period_id',
        'company_id',
        'active',
        'date_log',
    ];

    // If you have relationships, define them here
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }
}
