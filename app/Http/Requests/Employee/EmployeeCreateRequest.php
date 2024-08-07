<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'department_id' => 'required',
            'employee_name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|string|max:255|regex:/(.+)@(.+)\.(.+)/|not_regex:/[\[\]{}+\-\()\;]/i',
            'position_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'department_id.required' => __('validation.custom.employee.department_id_required'),
            'employee_name.required' => 'validation.custom.employee.employee_name_required',
            'address.required' => __('validation.custom.employee.address_required'),
            'phone_number.required' => __('validation.custom.employee.phone_number_required'),
            'email.required' => __('validation.custom.employee.email_required'),
            'email.regex' => __('validation.custom.employee.email_regex'),
            'email.string' => __('validation.custom.email.string'),
            'email.max' => __('validation.custom.email.max'),
            'email.not_regex' => __('validation.custom.email.not_regex'),
            'position_id.required' => __('validation.custom.employee.position_id_required'),
        ];
    }
}
