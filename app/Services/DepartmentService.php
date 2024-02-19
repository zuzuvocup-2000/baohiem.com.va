<?php

namespace App\Services;

use App\Models\Department;

/**
 * Class DepartmentService
 * @package App\Services
 */
class DepartmentService
{
    /**
     * Get a list of active departments.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getActiveDepartments()
    {
        return Department::where('active', STATUS_ACTIVE)->get();
    }
}
