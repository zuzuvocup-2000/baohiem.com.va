<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GasUserStaffDetail extends Model
{
    protected $table = 'tbl_gas_user_staff_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'staff_id',
        'gas_branch_id',
        'active',
    ];
}
