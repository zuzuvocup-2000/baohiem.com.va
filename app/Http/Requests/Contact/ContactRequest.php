<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email_title' => 'required|string|max:255|regex:/(.+)@(.+)\.(.+)/|not_regex:/[\[\]{}+\-\()\;]/i',
            'email_receive' => 'required|string|max:255|regex:/(.+)@(.+)\.(.+)/|not_regex:/[\[\]{}+\-\()\;]/i',
            'title' => 'required',
            // 'file' => 'file|mimes:pdf,doc,docx,xlsx,pdf|max:10240',
            'ckeditor_contact' => 'required|min:10',
        ];
    }
    public function messages()
    {
        return [
            'email_title.required' => __('validation.custom.email_title.required'),
            'email_title.string' => __('validation.custom.email_title.string'),
            'email_title.max' => __('validation.custom.email_title.max'),
            'email_title.regex' => __('validation.custom.email_title.regex'),
            'email_title.not_regex' => __('validation.custom.email_title.not_regex'),
            'email_receive.required' => __('validation.custom.email_receive.required'),
            'email_receive.string' => __('validation.custom.email_receive.string'),
            'email_receive.max' => __('validation.custom.email_receive.max'),
            'email_receive.regex' => __('validation.custom.email_receive.regex'),
            'email_receive.not_regex' => __('validation.custom.email_receive.not_regex'),
            'title.required' => __('validation.custom.title.required'),
            // 'file.file' => __('validation.custom.file.file'),
            // 'file.mimes' => __('validation.custom.file.mimes'),
            // 'file.max' => __('validation.custom.file.max'),
            'ckeditor_contact.required' => __('validation.custom.ckeditor_contact.required'),
            'ckeditor_contact.min' => __('validation.custom.ckeditor_contact.min'),
        ];
    }
}
