<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'tbl_file';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'file_name',
        'folder',
        'note',
        'active',
        'examination_code',
        'log_date',
    ];

}
