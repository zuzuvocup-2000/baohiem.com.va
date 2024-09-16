<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temporary extends Model
{
    protected $table = 'tbl_temporary';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'name_empty',
        'pass_empty',
    ];
}
