<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestOrder extends Model
{
    protected $table = 'tbl_test_order';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'active',
        'datelog',
        'health_checkup_information_id',
        'test_category_id',
    ];

    public function healthCheckupInformation()
    {
        return $this->belongsTo(HealthCheckupInformation::class, 'health_checkup_information_id', 'id');
    }

    public function TestCategory()
    {
        return $this->belongsTo(TestCategory::class, 'test_category_id', 'id');
    }
}

