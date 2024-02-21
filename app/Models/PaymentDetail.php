<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    protected $table = 'tbl_payment_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'account_detail_id',
        'hospital_id',
        'amount_paid',
        'active',
        'payment_date',
        'note',
        'examination_date',
        'approved',
        'expected_payment',
        'payment_type_id',
        'hospital_user_id',
        'rejected_amount',
        'log_date',
        'treatment_code',
        'vaccine_result_code',
    ];

    // If you have relationships, define them here
    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }

    public function accountDetail()
    {
        return $this->belongsTo(AccountDetail::class, 'account_detail_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class, 'payment_type_id');
    }

    public function userHospital()
    {
        return $this->belongsTo(UserHospital::class, 'user_hospital_id');
    }
}
