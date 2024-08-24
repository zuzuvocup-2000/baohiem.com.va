<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestClassification extends Model
{
    protected $table = 'tbl_test_classification';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'type_name',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
