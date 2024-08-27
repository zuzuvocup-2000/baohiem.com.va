<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailExaminationContent extends Model
{
    protected $table = 'tbl_detailed_examination_content';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'examination_content_id',
        'active',
        'category_specialist_examination_id',
        'category_test_indications_id',
        'category_cdha_id',
        'condition_id',
    ];

   
}
