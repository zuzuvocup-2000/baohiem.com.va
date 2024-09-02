<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tam extends Model
{
    protected $table = 'Tam';
    protected $primaryKey = 'Matam';
    public $timestamps = false;

    protected $fillable = [
        'Tenkhongco',
        'Matkkhongco',
    ];
}
