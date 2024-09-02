<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageChitiet extends Model
{
    protected $table = 'TBL_pagechitiet';
    public $timestamps = false;

    protected $fillable = [
        'Maquyen',
        'matrang',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class, 'matrang', 'matrang');
    }

    public function pageQuyen()
    {
        return $this->belongsTo(PageQuyen::class, 'Maquyen', 'Maquyen');
    }
}
