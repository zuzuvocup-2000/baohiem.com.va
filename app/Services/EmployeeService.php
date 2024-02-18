<?php

namespace App\Services;

use App\Models\NhanVien;

/**
 * Class EmployeeService
 * @package App\Services
 */
class EmployeeService
{
    public function getEmployeeListActive()
    {
        $nhanVienList = NhanVien::where('active', ACTIVE_USER)->get();
        $formattedNhanVienList = $nhanVienList->pluck('TENNHANVIEN', 'employee_code')->toArray();
        return $formattedNhanVienList;
    }
}
