<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchOffice extends Model
{
    protected $table = 'tbl_branch_office';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'department_id',
        'province_id',
        'name',
        'address',
        'active',
        'phone_number',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

}
