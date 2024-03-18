<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogUser extends Model
{
    protected $table = 'tbl_log_user';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'action',
        'date_log',
        'active',
        'local_ip',
        'computer_name',
        'old_value',
        'payment_detail_id',
    ];

    protected $dates = [
        'datelog',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function paymentDetail()
    {
        return $this->belongsTo(PaymentDetail::class, 'payment_detail_id', 'id');
    }
}
