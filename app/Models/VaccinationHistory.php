<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccinationHistory extends Model
{
    protected $table = 'tbl_vaccination_history';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'relationship_id',
        'vaccination_id',
        'amount',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

}
