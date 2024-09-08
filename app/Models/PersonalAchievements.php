<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalAchievements extends Model
{
    protected $table = 'tbl_personal_achievements';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'disease_name',
        'health_account_id',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

}
