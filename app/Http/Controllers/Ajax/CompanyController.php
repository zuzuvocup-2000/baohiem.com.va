<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $data = $request->all();
            $company = Company::create([
                'province_id' => (int)$data['province_id'],
                'company_name' => (string)$data['company_name'],
                'address' => (string)$data['address'],
                'phone_number' => (string)$data['phone_number'],
                'email' => (string)$data['email'],
                'ceo_name' => (string)$data['ceo_name'],
                'responsibility_officer_name' => (string)$data['responsibility_officer_name'],
                'order' => ORDER_DEFAULT,
                'active' => STATUS_ACTIVE,
            ]);
            if ($company) {
                $this->saveLog(Auth::user()->id, 'Thông tin công ty được tạo thành công.');
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thông tin công ty được tạo thành công.', 'company' => $company]);
            }
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm mới thất bại.', 'company' => []]);
        }
    }

    public function delete(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $companyId = $request->input('companyId');
            $company = Company::find($companyId);

            if ($company) {
                $company->update(['active' => STATUS_INACTIVE]);
                $this->saveLog(Auth::user()->id, 'Xóa công ty thành công.');
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa công ty thành công.']);
            }
        }
        return response()->json(['status' => STATUS_ERROR, 'message' => 'Không tìm thấy công ty.']);
    }

    public function update(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $data = $request->all();
            $company = Company::find($data['companyId']);

            if ($company) {
                $company->update($data);
                $this->saveLog(Auth::user()->id, 'Cập nhật công ty thành công.');
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Cập nhật công ty thành công.']);
            }
        }
        return response()->json(['status' => STATUS_ERROR, 'message' => 'Không tìm thấy công ty.']);
    }
}
