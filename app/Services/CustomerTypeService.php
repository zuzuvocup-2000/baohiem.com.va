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
        return CustomerType::where(['active' => 1])->orderBy('order', 'desc')->get();
    }
}
