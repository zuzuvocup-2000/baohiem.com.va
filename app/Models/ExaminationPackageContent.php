<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExaminationPackageContent extends Model
{
    protected $table = 'tbl_examination_package_content';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'content_code',
        'active',
        'note',
        'content',
    ];
}
