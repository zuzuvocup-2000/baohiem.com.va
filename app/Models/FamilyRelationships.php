<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyRelationships extends Model
{
    protected $table = 'tbl_family_relationships';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'relationship_id',
        'disease_genes',
        'health_account_id',
        'active',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];

}
