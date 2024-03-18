<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageDetail extends Model
{
    protected $table = 'tbl_package_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'account_package_id',
        'active',
        'company_id',
        'period_id',
    ];

    // If you have relationships, define them here
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function accountPackage()
    {
        return $this->belongsTo(AccountPackage::class, 'account_package_id');
    }

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }
}
