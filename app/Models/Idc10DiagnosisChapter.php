<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idc10DiagnosisChapter extends Model
{
    protected $table = 'tbl_idc10_diagnosis_chapter';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'chapter_name',
        'order',
        'common_diseases',
        'international_name',
    ];
}
