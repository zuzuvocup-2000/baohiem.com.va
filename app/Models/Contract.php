<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'tbl_contract';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'contract_supplement_number',
        'signature_date',
        'effective_time',
        'end_time',
        'total_contract_value',
        'total_customers',
        'supplement',
        'reference_contract_supplement_number',
        'active',
        'contract_name',
        'user_id',
        'extension',
        'previous_contract_code',
        'period_id',
        'file_name',
        'folder',
        'gas_contract',
    ];

    public function periodDetail()
    {
        return $this->hasOne(PeriodDetail::class, 'period_id');
    }
}
