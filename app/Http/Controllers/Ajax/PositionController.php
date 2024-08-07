<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function create(Request $request)
    {
        try {
            if (Auth::guard('isUserAdmin')->check()) {
                DB::beginTransaction();

                $data = $request->all();
                $position = Position::create([
                    'name' => (string)$data['name'],
                    'active' => STATUS_ACTIVE
                ]);

                if (!$position) {
                    throw new \Exception('Error creating position');
                }

                $this->saveLog(Auth::user()->id, 'Thêm mới vị trí chức vụ thành công.');

                DB::commit();
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thêm mới vị trí chức vụ thành công.']);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm mới thất bại.']);
        }
    }

    public function delete(Request $request)
    {
        try {
            DB::beginTransaction();

            $positionId = $request->input('positionId');
            $position = Position::find($positionId);

            if ($position) {
                $position->update(['active' => STATUS_INACTIVE]);
                $this->saveLog(Auth::user()->id, 'Xóa vị trí chức vụ thành công.');
                DB::commit();

                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa vị trí chức vụ thành công.']);
            }


            throw new \Exception('Không tìm thấy vị trí chức vụ  .');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Xóa vị trí chức vụ thất bại.']);
        }
    }

    public function update(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $position = Position::find($data['positionId']);

            if ($position) {
                $position->update([
                    'name' => (string)$data['name'],
                ]);
                $this->saveLog(Auth::user()->id, 'Cập nhật vị trí chức vụ thành công.');
                DB::commit();

                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Cập nhật vị trí chức vụ thành công.']);
            }


            throw new \Exception('Không tìm thấy vị trí chức vụ.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Cập nhật vị trí chức vụ  thất bại.']);
        }
    }
}
