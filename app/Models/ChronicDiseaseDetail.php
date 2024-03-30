<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChronicDiseaseDetail extends Model
{
    protected $table = 'tbl_chronic_disease_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'chronic_disease_id',
        'main_disease',
        'secondary_disease',
        'health_account_id',
        'active',
        'doctor_name',
        'hospital_name',
        'log_date',
    ];

    public function idc10ChronicDisease()
    {
        return $this->belongsTo(Idc10ChronicDisease::class, 'chronic_disease_id', 'id');
    }

    public function healthAccount()
    {
        return $this->belongsTo(HealthAccount::class, 'health_account_id', 'id');
    }
}
