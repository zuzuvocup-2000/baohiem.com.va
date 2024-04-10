<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractHospital extends Model
{
    protected $table = 'tbl_contract_hospital';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'contract_id',
        'user_hospital_id',
        'active',
    ];


    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }

    public function userHospital()
    {
        return $this->belongsTo(UserHospital::class, 'user_hospital_id');
    }
}
