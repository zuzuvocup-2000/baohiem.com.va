<?php

namespace App\Services;

use App\Models\CustomerType;

/**
 * Class CustomerTypeService
 * @package App\Services
 */
class CustomerTypeService
{
    public function getCustomerTypeActive()
    {
        return CustomerType::where(['active' => STATUS_ACTIVE])->orderBy('order', 'asc')->get();
    }
}
