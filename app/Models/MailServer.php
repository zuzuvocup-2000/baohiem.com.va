<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailServer extends Model
{
    protected $table = 'TBL_MAILSERVER';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'pass',
        'mail',
        'port',
        'active',
    ];
}
