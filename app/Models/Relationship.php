<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $table = 'tbl_relationship';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'relationship_name',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
