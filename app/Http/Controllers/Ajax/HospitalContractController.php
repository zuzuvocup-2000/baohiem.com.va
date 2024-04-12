<?php

namespace App\Http\Controllers\Ajax;

use App\Models\Hospital;
use App\Models\UserHospital;
use App\Models\Contract;
use App\Models\ContractHospital;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HospitalContractController extends Controller
{
    public function create(Request $request)
    {
        try {
            if (Auth::guard('web')->check()) {
                DB::beginTransaction();
                $data = $request->all();
                $hospitalName = Hospital::create([
                    'hospital_name' => (string)$data['hospital_name'],
                    'active' => STATUS_ACTIVE
                ]);
                $employeeName = UserHospital::create([
                    'employee_name' => (string)$data['employee_name'],
                    'active' => STATUS_ACTIVE
                ]);
                $contractName = Contract::create([
                    'employee_name' => (string)$data['contract_name'],
                    'active' => STATUS_ACTIVE
                ]);
                if (!$hospitalName || !$employeeName || !$contractName) {  
                    throw new \Exception('Error creating Hospital Contract');
                }
                $this->saveLog(Auth::user()->id, 'Thêm mới hợp đồng bệnh viện thành công.');
                DB::commit();
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Hợp đồng bệnh viện được tạo thành công.']);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm mới thất bại.']);
        }
    }

    public function delete(Request $request)
    {
        try {
            if (Auth::guard('web')->check()) {
                DB::beginTransaction();

                $hospitalContractId = $request->input('hospitalContractId');
                $hospitalContract = ContractHospital::find($hospitalContractId);

                if ($hospitalContract) {
                    $hospitalContract->update(['active' => STATUS_INACTIVE]);
                    $this->saveLog(Auth::user()->id, 'Xóa hợp đồng bệnh viện thành công.');
                    DB::commit();

                    return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa bệnh viện thành công.']);
                }

            throw new \Exception('Không tìm thấy bệnh viện.');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Xóa hợp đồng bệnh viện thất bại.']);
        }
    }

    public function update(Request $request)
    {
        try {
            if (Auth::guard('web')->check()) {
            DB::beginTransaction();

                $data = $request->all();
                $hospitalContract  = ContractHospital::find($data['hospitalContractId']);
                if ($hospitalContract) {
                    $userHospital = UserHospital::find($hospitalContract->user_hospital_id);
                    $contract = Contract::find($hospitalContract->contract_id);
                    $hospital = Hospital::find($userHospital->hospital_id);
        
                    if ($userHospital && $contract && $hospital) {
                        $userHospital->update(['employee_name' => $data['employee_name']]);
                        $hospital->update(['hospital_name' => $data['hospital_name']]);
                        $contract->update(['contract_name' => $data['contract_name']]);
                        $this->saveLog(Auth::user()->id, 'Cập nhật bệnh viện thành công');
                        DB::commit();
                        // Log và commit transaction tại đây nếu cần
                        return response()->json(['status' => 'success', 'message' => 'Cập nhật hợp đồng bệnh viện thành công.']);
                    }
                }
               
            }
            throw new \Exception('Không tìm thấy bệnh viện.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Cập nhật bệnh viện thất bại.']);
        }
    }
}
