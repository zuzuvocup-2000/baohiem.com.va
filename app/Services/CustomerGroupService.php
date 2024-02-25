<?php

namespace App\Services;

use App\Models\CustomerGroup;

/**
 * Class CustomerGroupService
 * @package App\Services
 */
class CustomerGroupService
{
    public function getCustomerGroupActive()
    {
        return CustomerGroup::where(['active' => STATUS_ACTIVE])->get();
    }
}
