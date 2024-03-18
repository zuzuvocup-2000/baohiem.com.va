<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $table = 'tbl_payment_type';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'payment_type_name',
        'active',
    ];
}
