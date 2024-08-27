<?php

namespace App\Services;

use App\Models\VaccinationClassification;

/**
 * Class VaccinationClassificationService
 * @package App\Services
 */
class VaccinationClassificationService
{
    public function getActiveClassifications()
    {
        return VaccinationClassification::where('active', STATUS_ACTIVE)
            ->orderBy('classification_name', 'asc')
            ->get();
    }
}
