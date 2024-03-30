<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idc10DiagnosisList extends Model
{
    protected $table = 'tbl_idc10_diagnosis_list';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'icd10_name',
        'icd10_code',
        'active',
        'international_name',
        'idc10_diagnosis_chapter_id',
    ];

    public function idc10DiagnosisChapter()
    {
        return $this->belongsTo(Idc10DiagnosisChapter::class, 'idc10_diagnosis_chapter_id', 'id');
    }
}
