<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'tbl_company';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'province_id',
        'company_name',
        'address',
        'phone_number',
        'email',
        'website',
        'ceo_name',
        'responsibility_officer_name',
        'active',
        'order',
    ];
}
