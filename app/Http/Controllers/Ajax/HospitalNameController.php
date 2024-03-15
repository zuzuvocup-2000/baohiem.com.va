<?php

namespace App\Http\Controllers\Ajax;

use App\Models\Hospital;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HospitalNameController extends Controller
{
    public function create(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $hospital = Hospital::create([
                'hospital_name' => (string)$data['hospital_name'],
                'hospital_type_id' => (string)$data['hospital_type_id'],
                'active' => STATUS_ACTIVE
            ]);

            if (!$hospital) {
                throw new \Exception('Error creating Hospital');
            }

            DB::commit();
            return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thông tin bệnh viện được tạo thành công.']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm mới thất bại.']);
        }
    }

    public function delete(Request $request)
    {
        try {
            DB::beginTransaction();

            $hospitalId = $request->input('hospitalId');
            $hospital = Hospital::find($hospitalId);

            if ($hospital) {
                $hospital->update(['active' => 0]);

                DB::commit();

                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa bệnh viện thành công.']);
            }

            throw new \Exception('Không tìm thấy bệnh viện.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Xóa bệnh viện thất bại.']);
        }
    }

    public function update(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $hospital = Hospital::find($data['hospitalId']);

            if ($hospital) {
                $hospital->update([
                    'hospital_name' => (string)$data['hospital_name'],
                ]);

                DB::commit();

                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Cập nhật bệnh viện thành công.']);
            }

            throw new \Exception('Không tìm thấy bệnh viện.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Cập nhật bệnh viện thất bại.']);
        }
    }
}
