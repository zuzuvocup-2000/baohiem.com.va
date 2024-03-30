<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthAccount extends Model
{
    protected $table = 'tbl_health_account';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'family_status_id',
        'blood_group',
        'rhesus',
        'active',
        'log_date',
    ];

    protected $dates = [
        'log_date',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'custopmer_id', 'id');
    }

    public function familyStatus()
    {
        return $this->belongsTo(FamilyStatus::class, 'family_status_id', 'id');
    }
}
