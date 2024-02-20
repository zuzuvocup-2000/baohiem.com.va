<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospitals';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'hospital_type_id',
        'hospital_name',
        'active',
        'address',
        'email',
        'phone',
        'contact_person',
    ];

    public function hospitalType()
    {
        return $this->belongsTo(HospitalType::class, 'hospital_type_id');
    }
}
