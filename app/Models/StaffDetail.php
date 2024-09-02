<?php
// app/StaffDetail.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffDetail extends Model
{
    protected $table = 'tbl_staff_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'user_staff_id',
        'staff_kb_id',
    ];

}
