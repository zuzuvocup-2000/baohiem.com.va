<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'tbl_customer';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'customer_group_id',
        'province_id',
        'full_name',
        'birth_year',
        'address',
        'identity_card_number',
        'issue_date',
        'issue_place',
        'customer_code',
        'contact_phone',
        'email',
        'active',
        'user_id',
        'gender',
        'images',
        'file_data',
        'filename',
        'file_size',
        'content_type',
        'folder',
        'locked',
        'lock_date',
        'customer_type_id',
        'hospitalized',
        'log_date',
    ];

    public function customerGroup()
    {
        return $this->belongsTo(CustomerGroup::class, 'customer_group_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function customerType()
    {
        return $this->belongsTo(CustomerType::class, 'customer_type_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
