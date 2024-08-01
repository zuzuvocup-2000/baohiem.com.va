<?php

namespace App\Services;

use App\Models\Position;
use App\Models\User;

/**
 * Class PositionService
 * @package App\Services
 */
class PositionService
{
    public function getActivePositions()
    {
        return Position::where('active', STATUS_ACTIVE)->get();
    }

    public function getUserByPositions($id)
    {
        return User::select('tbl_user.id', 'tbl_user.username', 'tbl_position.id', 'tbl_position.active')
            ->join('tbl_employee', 'tbl_employee.id', '=', 'tbl_user.id')
            ->join('tbl_position', 'tbl_position.id', '=', 'tbl_employee.position_id')
            ->where(['tbl_position.active' => STATUS_ACTIVE, 'tbl_position.id' => $id])
            ->get();
    }
}
