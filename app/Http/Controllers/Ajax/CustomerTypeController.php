<?php

namespace App\Http\Controllers\Ajax;

use App\Models\CustomerType;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerTypeController extends Controller
{
    public function create(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $customerType = CustomerType::create([
                'type_name' => (string) $data['type_name'],
                'order' => (int) $data['order'],
                'active' => STATUS_ACTIVE,
            ]);

            if (!$customerType) {
                throw new \Exception('Error creating customerType');
            }

            DB::commit();
            return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thông tin phân loại khách hàng được tạo thành công.']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm mới thất bại.']);
        }
    }

    public function delete(Request $request)
    {
        try {
            DB::beginTransaction();

            $customerTypeId = $request->input('customerTypeId');
            $customerType = CustomerType::find($customerTypeId);

            if ($customerType) {
                $customerType->update(['active' => 0]);

                DB::commit();

                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa phân loại khách hàng thành công.']);
            }

            throw new \Exception('Không tìm thấy phân nhóm khách hàng theo bệnh viện.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Xóa phân loại khách hàng thất bại.']);
        }
    }

    public function update(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $customerType = CustomerType::find($data['customerTypeId']);
            if ($customerType) {
                $customerType->update([
                    'type_name' => (string) $data['type_name'],
                    'order' => (int) $data['order'],
                ]);

                DB::commit();

                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Cập nhật phân loại khách hàng thành công.']);
            }

            throw new \Exception('Không tìm thấy phân nhóm khách hàng theo bệnh viện.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Cập nhật phân loại khách hàng thất bại.']);
        }
    }
}
