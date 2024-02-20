<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountDetail extends Model
{
    protected $table = 'tbl_account_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'account_id',
        'user_id',
        'customer_id',
        'active',
        'log_date',
        'advance_payment',
        'account_holder',
        'first_visit_date',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
