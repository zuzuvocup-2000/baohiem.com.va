<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\CustomerGroupService;
use App\Services\CompanyService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Renewal\CreateRenewalRequest;
use App\Models\Contract;
use App\Services\ContractService;
use App\Services\CustomerService;
use App\Services\PeriodDetailService;
use App\Services\PeriodService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RenewalController extends Controller
{
    protected $customerGroupService;
    protected $companyService;
    protected $periodService;
    protected $contractService;
    protected $customerService;
    protected $periodDetailService;

    public function __construct(CompanyService $companyService, PeriodService $periodService, ContractService $contractService, CustomerGroupService $customerGroupService, CustomerService $customerService, PeriodDetailService $periodDetailService)
    {
        $this->customerGroupService = $customerGroupService;
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
        $this->customerService = $customerService;
        $this->periodDetailService = $periodDetailService;
    }

    public function index(Request $request)
    {
        $params = $request->query();
        $companyList = $this->companyService->getCompanyActiveSortByOrder();

        if (!isset($params['company'])) {
            $params['company'] = $companyList->first()->id;
        }
        $companyName = $this->companyService->getCompanyNameInList($params['company'], $companyList);

        // Lấy danh sách niên hạn
        $periodListByCompany = $this->periodService->getPeriodActiveByCompany($params['company']);
        $periodList = $this->periodService->getPeriodList();

        // Lấy danh sách hợp đồng
        if (!isset($params['period'])) {
            $params['period'] = $periodListByCompany->first() ? $periodListByCompany->first()->id : 0;
        }
        $contractList = $this->contractService->getContractByPeriod($params['period']);

        $contractDetail = $this->contractService->getContractDetail(isset($params['contract']) ? $params['contract'] : (isset($contractList->first()->id) ? $contractList->first()->id : 0));
        $customerPrimary = $this->contractService->getCustomerPrimary($contractDetail->id);
        $customerSecondary = $this->contractService->getCustomerSecondary($contractDetail->id);
        return view('admin.renewal.index', compact(['contractDetail', 'companyList', 'periodListByCompany', 'periodList', 'contractList', 'companyName', 'customerPrimary', 'customerSecondary']));
    }

    public function store(CreateRenewalRequest $createRequest)
    {
        try {
            DB::beginTransaction();
            $extend = $this->contractService->getExtendContract($createRequest->contract);

            if (isset($extend->extend) && !$extend->extend) {
                if ($createRequest->period == $createRequest->period_id) {
                    return redirect()->route('renewal.index')->with('error', 'Niên hạn mới không đúng.Vui lòng kiểm tra lại thông tin.')->withInput();
                }

                // Cập nhật trạng thái gia hạn cho hợp đồng cũ
                $this->contractService->updateExtendContract($createRequest->contract);

                // Kiểm tra tồn tại chi tiết niên hạn, nếu không thì thêm mới
                $periodDetail = $this->periodDetailService->checkAndInsertPeriodDetail($createRequest->company, $createRequest->period_id);

                $dateParts = explode(' - ', $createRequest->time_range);
                $startDate = trim($dateParts[0]);
                $endDate = trim($dateParts[1]);
                $userId = Auth::user()->id;

                $contractNew = Contract::create([
                    'user_id' => $userId,
                    'period_id' => $periodDetail->id,
                    'contract_name' => $createRequest->contract_name,
                    'contract_supplement_number' => $createRequest->contract_supplement_number,
                    'signature_date' => date('Y-m-d', strtotime($createRequest->signature_date)),
                    'total_contract_value' => (int) str_replace('.', '', $createRequest->total_contract_value),
                    'effective_time' => date('Y-m-d', strtotime($startDate)),
                    'end_time' => date('Y-m-d', strtotime($endDate)),
                    'extend' => STATUS_INACTIVE,
                    'status' => STATUS_ACTIVE,
                    'previous_contract_code' => (int) $createRequest->contract,
                ]);

                if ($contractNew) {
                    DB::commit();
                    $this->saveLog($userId, 'Gia hạn hợp đồng thành công.');
                    return redirect()->route('renewal.index')->with('success', 'Gia hạn hợp đồng thành công.')->withInput();
                } else {
                    return redirect()->route('renewal.index')->with('error', 'Gia hạn hợp đồng thất bại.Vui lòng kiểm tra thông tin.')->withInput();
                }
            } else {
                return redirect()->route('renewal.index')->with('error', 'Hợp đồng này đã được gia hạn. Vui lòng kiểm tra lại thông tin.')->withInput();
            }
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('renewal.index')->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại sau.')->withInput();
        }
    }
}
