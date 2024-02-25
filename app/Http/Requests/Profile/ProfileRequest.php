<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class ProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $user = $this->user();

        return [
            'current_password' => [
                'required',
                function ($attribute, $value, $fail) use ($user) {
                    if ($user && !Hash::check($value, $user->password)) {
                        $fail(__('validation.custom.current_password.invalid'));
                    }
                },
            ],
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ];
    }

    public function messages()
    {
        return [
            'current_password.required' => __('validation.custom.current_password.required'),
            'current_password.invalid' => __('validation.custom.current_password.invalid'),
            'new_password.required' => __('validation.custom.new_password.required'),
            'new_password.min' => __('validation.custom.new_password.min'),
            'confirm_password.required' => __('validation.custom.confirm_password.required'),
            'confirm_password.same' => __('validation.custom.confirm_password.same'),
        ];
    }
}