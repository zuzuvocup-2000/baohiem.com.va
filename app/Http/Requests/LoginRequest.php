<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required|string|max:255|regex:/^[a-zA-Z0-9]+$/',
            'password' => 'required|string|min:6',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => __('validation.custom.username.required'),
            'username.string' => __('validation.custom.username.string'),
            'username.max' => __('validation.custom.username.max'),
            'username.regex' => __('validation.custom.username.regex'),
            'password.required' => __('validation.custom.password.required'),
            'password.string' => __('validation.custom.password.string'),
            'password.min' => __('validation.custom.password.min'),
        ];
    }
}
