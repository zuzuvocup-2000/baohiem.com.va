<?php

namespace App\Services;

use App\Models\HorseClassification;

/**
 * Class HorseClassificationService
 * @package App\Services
 */
class HorseClassificationService
{
    public function getActiveClassifications()
    {
        return HorseClassification::where('active', STATUS_ACTIVE)
            ->orderBy('classification_name', 'asc')
            ->get();
    }
}
