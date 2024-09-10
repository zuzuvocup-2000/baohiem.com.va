<?php

namespace App\Services;

use App\Models\Vaccination;

/**
 * Class VaccinationService
 * @package App\Services
 */
class VaccinationService
{
    public function getVaccinationByClassification($classificationId)
    {
        return Vaccination::where('active', STATUS_ACTIVE)
            ->where('classification_id', $classificationId)
            ->get();
    }
}
