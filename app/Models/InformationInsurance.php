<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationInsurance extends Model
{
    protected $table = 'tbl_information_insurance';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'card_number',
        'card_type',
        'issued_date',
        'active',
        'old_card_number',
    ];

    protected $dates = [
        'issued_date',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
