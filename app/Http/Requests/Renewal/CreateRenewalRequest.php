<?php

namespace App\Http\Requests\Renewal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class CreateRenewalRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'contract' => 'required|numeric',
            'contract_name' => 'required|string',
            'contract_supplement_number' => 'required|string',
            'signature_date' => 'required',
            'period_id' => 'required',
            'time_range' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'contract.required' => 'Xin vui lòng chọn hợp đồng.',
            'contract.numeric' => 'Xin vui lòng chọn hợp đồng.',
            'contract_name.required' => 'Xin vui lòng nhập tên hợp đồng.',
            'contract_name.string' => 'Tên hợp đồng phải là 1 chuỗi.',
            'contract_supplement_number.required' => 'Xin vui lòng nhập số hợp đồng.',
            'contract_supplement_number.string' => 'Số hợp đồng phải là 1 chuỗi.',
            'signature_date.required' => 'Xin vui lòng chọn ngày ký hợp đồng.',
            'period_id.required' => 'Xin vui lòng chọn niên hạn.',
            'period_id.time_range' => 'Xin vui lòng chọn thời hạn hợp đồng.',
        ];
    }
}
