<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    protected $table = 'tbl_horse';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'horse_name',
        'vaccine_name',
        'active',
        'dosage',
        'indication',
        'for_children',
        'classification_id',
    ];

    // If you have relationships, define them here
    public function horseClassification()
    {
        return $this->belongsTo(HorseClassification::class, 'classification_id', 'id');
    }
}
