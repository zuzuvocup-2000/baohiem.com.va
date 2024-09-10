<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccinationClassification extends Model
{
    protected $table = 'tbl_vaccination_classification';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'classification_name',
        'note',
        'active',
    ];

}
