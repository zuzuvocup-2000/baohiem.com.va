<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Services\ContractService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ContractController extends Controller
{
    protected $contractService;

    public function __construct(ContractService $contractService)
    {
        $this->contractService = $contractService;
    }

    public function index(Request $request){
        $contracts = $this->contractService->getContractByPeriod($request->get('period_id'));
        return Response::json($contracts);
    }

    public function create(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $authUser = Auth::user();

            $contract = Contract::create([
                'contract_name' => (string)$data['contract_name'],
                'contract_supplement_number' => (string)$data['contract_supplement_number'],
                'signature_date' => Carbon::createFromFormat('d/m/Y', $data['signature_date'])->format('Y-m-d H:i:s'),
                'effective_time' => Carbon::createFromFormat('d/m/Y', $data['effective_time'])->format('Y-m-d H:i:s'),
                'end_time' => Carbon::createFromFormat('d/m/Y', $data['end_time'])->format('Y-m-d H:i:s'),
                'extension' => (bool)$data['extension'],
                'total_contract_value' => (int)$data['total_contract_value'],
                'company_id' => (int)$data['companyId'],
                'period_id' => (int)$data['periodId'],
                'user_id' => $authUser->id,
                'active' => STATUS_ACTIVE
            ]);


            if (!$contract) {
                throw new \Exception('Error creating Contract');
            }

            DB::commit();
            return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thông tin hợp đồng được tạo thành công.']);
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm mới thất bại.']);
        }
    }

    public function delete(Request $request)
    {
        try {
            DB::beginTransaction();

            $contractId = $request->input('ContractId');
            $contract = Contract::find($contractId);

            if ($contract) {
                $contract->update(['active' => 0]);

                DB::commit();

                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa hợp đồng thành công.']);
            }

            throw new \Exception('Không tìm thấy hợp đồng.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Xóa hợp đồng thất bại.']);
        }
    }

    public function update(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $contract = Contract::find($data['ContractId']);

            if ($contract) {
                $contract->update([
                    'group_name' => (string)$data['group_name'],
                ]);

                DB::commit();

                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Cập nhật hợp đồng thành công.']);
            }

            throw new \Exception('Không tìm thấy hợp đồng.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Cập nhật hợp đồng thất bại.']);
        }
    }
}
