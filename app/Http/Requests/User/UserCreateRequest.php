<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserCreateRequest extends FormRequest
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
            'employee_code' => 'required',
            'username' => [
                'required',
                'max:255',
                Rule::unique('TBL_USER', 'username'),
                Rule::unique('TBL_USER_BENHVIEN', 'username'),
                Rule::unique('TBL_USERKHACHHANG', 'username'),
                Rule::unique('tbl_usernhansu', 'username'),
            ],
            'password' => 'required|max:255|min:6',
        ];
    }

    public function messages()
    {
        return [
            'employee_code.required' => __('validation.custom.user.employee_code_required'),
            'username.required' => __('validation.custom.user.username_required'),
            'username.max' => __('validation.custom.user.username_max'),
            'username.unique' => __('validation.custom.user.username_unique'),
            'password.required' => __('validation.custom.user.password_required'),
            'password.max' => __('validation.custom.user.password_max'),
            'password.min' => __('validation.custom.user.password_min'),
        ];
    }
}
