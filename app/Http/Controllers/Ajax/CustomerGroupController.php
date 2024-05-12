<?php

namespace App\Http\Controllers\Ajax;

use App\Models\CustomerGroup;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CustomerGroupController extends Controller
{
    public function create(Request $request)
    {
        try {
            if (Auth::guard('isUserAdmin')->check()) {
                DB::beginTransaction();
                $data = $request->all();
                $customerGroup = CustomerGroup::create([
                    'group_name' => (string)$data['group_name'],
                    'active' => STATUS_ACTIVE
                ]);

                if (!$customerGroup) {
                    throw new \Exception('Error creating customerGroup');
                }
                $this->saveLog(Auth::user()->id, 'Thông tin phân nhóm khách hàng theo bệnh viện được tạo thành công.');
                DB::commit();
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thông tin phân nhóm khách hàng theo bệnh viện được tạo thành công.']);
            } 
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm mới thất bại.']);
        }
    }

    public function delete(Request $request)
    {
        try {
            if (Auth::guard('isUserAdmin')->check()) {
                DB::beginTransaction();

                $customerGroupId = $request->input('customerGroupId');
                $customerGroup = CustomerGroup::find($customerGroupId);

                if ($customerGroup) {
                    $customerGroup->update(['active' => STATUS_INACTIVE]);
                    $this->saveLog(Auth::user()->id, 'Xóa phân nhóm khách hàng theo bệnh viện thành công.');
                    DB::commit();

                    return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa phân nhóm khách hàng theo bệnh viện thành công.']);
                }
            }
            throw new \Exception('Không tìm thấy phân nhóm khách hàng theo bệnh viện.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Xóa phân nhóm khách hàng theo bệnh viện thất bại.']);
        }
    }

    public function update(Request $request)
    {
        try {
            if (Auth::guard('isUserAdmin')->check()) {
                DB::beginTransaction();

                $data = $request->all();
                $customerGroup = CustomerGroup::find($data['customerGroupId']);

                if ($customerGroup) {
                    $customerGroup->update([
                        'group_name' => (string)$data['group_name'],
                    ]);
                    $this->saveLog(Auth::user()->id, 'Cập nhật phân nhóm khách hàng theo bệnh viện thành công.');
                    DB::commit();

                    return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Cập nhật phân nhóm khách hàng theo bệnh viện thành công.']);
                }
            }
            throw new \Exception('Không tìm thấy phân nhóm khách hàng theo bệnh viện.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Cập nhật phân nhóm khách hàng theo bệnh viện thất bại.']);
        }
    }
}
