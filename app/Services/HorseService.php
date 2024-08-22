<?php

namespace App\Services;

use App\Models\Horse;

/**
 * Class HorseService
 * @package App\Services
 */
class HorseService
{
    public function getHorsesByClassification($classificationId)
    {
        return Horse::where('active', STATUS_ACTIVE)
            ->where('classification_id', $classificationId)
            ->get();
    }
}
