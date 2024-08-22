<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorseClassification extends Model
{
    protected $table = 'tbl_horse_classification';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'classification_name',
        'note',
        'active',
    ];

    // If you have relationships, define them here
    public function horse()
    {
        return $this->hasMany(Horse::class, 'classification_id', 'id');
    }
}
