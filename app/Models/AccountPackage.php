<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountPackage extends Model
{
    protected $table = 'tbl_account_package';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'package_name',
        'package_price',
        'active',
        'note',
        'period_id',
    ];
}
