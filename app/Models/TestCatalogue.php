<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestCatalogue extends Model
{
    protected $table = 'tbl_test_catalogue';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'test_catalogue_name',
        'active',
        'test_classification_id',
        'clinic_id',
    ];


    public function testClassification()
    {
        return $this->belongsTo(TestClassification::class, 'test_classification_id', 'id');
    }
}
