<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GasBranchDetail extends Model
{
    protected $table = 'tbl_gas_branch_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'gas_branch_id',
        'active',
    ];


    public function gasBranch()
    {
        return $this->belongsTo(GasBranch::class, 'gas_branch_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
