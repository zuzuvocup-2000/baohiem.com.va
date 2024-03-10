<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountDetailDetail extends Model
{
    protected $table = 'tbl_account_detail_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'package_detail_id',
        'account_id',
        'prepayment',
        'log_date',
        'active',
    ];

    protected $casts = [
        'log_date' => 'datetime',
        'active' => 'boolean',
    ];

    public function packageDetail()
    {
        return $this->belongsTo(PackageDetail::class, 'package_detail_id', 'id');
    }

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }
}
