<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GasContractList extends Model
{
    protected $table = 'tbl_gas_contract_list';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'contract_id',
        'gas',
        'cl',
        'active',
    ];


    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }
}
