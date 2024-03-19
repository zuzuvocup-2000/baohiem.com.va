<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GasBranch extends Model
{
    protected $table = 'tbl_gas_branch';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'branch_name',
        'active',
        'company_id',
    ];


    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
