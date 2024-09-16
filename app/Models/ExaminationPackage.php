<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExaminationPackage extends Model
{
    protected $table = 'tbl_examination_package';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'package_name',
        'active',
        'note',
    ];

}
