<?php
return [
    'custom' => [
        'username' => [
            'required' => 'Trường tài khoản là bắt buộc.',
            'string' => 'Tài khoản phải là một chuỗi.',
            'max' => 'Tài khoản không được vượt quá :max kí tự.',
            'regex' => 'Tài khoản chỉ được chứa chữ cái và số.',
        ],
        'password' => [
            'required' => 'Trường mật khẩu là bắt buộc.',
            'string' => 'Mật khẩu phải là một chuỗi.',
            'min' => 'Mật khẩu phải có ít nhất :min kí tự.',
        ],
        'user' => [
            'employee_id_required' => 'Vui lòng chọn nhân viên.',
            'username_required' => 'Vui lòng nhập tên tài khoản.',
            'username_max' => 'Tên tài khoản không được vượt quá :max ký tự.',
            'username_unique' => 'Tên tài khoản đã tồn tại.',
            'password_required' => 'Vui lòng nhập mật khẩu.',
            'password_max' => 'Mật khẩu không được vượt quá :max ký tự.',
            'password_min' => 'Mật khẩu phải chứa ít nhất :min ký tự.',
        ],
        'email' => [
            'required' => 'Trường email là bắt buộc.',
            'string' => 'Email phải là một chuỗi.',
            'max' => 'Email phải có ít nhất :max kí tự.',
            'regex' => 'Định dạng email không hợp lệ',
            'not_regex' => 'Định dạng email không hợp lệ',
        ],
        'current_password' => [
            'required' => 'Bạn phải nhập mật khẩu cũ.',
        ],
        'new_password' => [
            'required' => 'Bạn phải nhập mật khẩu mới.',
            'min' => 'Mật khẩu phải có ít nhất :min kí tự.',
        ],
        'confirm_password' => [
            'required' => 'Bạn phải nhập lại mật khẩu mới vừa nhập.',
            'min' => 'Mật khẩu phải có ít nhất :min kí tự.',
            'same' => 'Mật khẩu không trùng khớp'
        ],
        'email_title' => [
            'required' => 'Trường email là bắt buộc.',
            'string' => 'Email phải là một chuỗi.',
            'max' => 'Email phải có ít nhất :max kí tự.',
            'not_regex' => 'Định dạng email không hợp lệ',
        ],
        'email_receive' => [
            'required' => 'Trường email là bắt buộc.',
            'string' => 'Email phải là một chuỗi.',
            'max' => 'Email phải có ít nhất :max kí tự.',
            'not_regex' => 'Định dạng email không hợp lệ',
        ],
        'title' => [
            'required' => 'Trường tiêu đề là bắt buộc.',
        ],
        // 'file' => [
        //     'file' => 'Trường file bắt buộc phải là một tệp.',
        //     'mimes' => 'Tệp được tải lên phải thuộc một trong các loại được chỉ định (PDF, DOC, DOCX, XLSX, PDF)',
        //     'max' => 'Tệp tải lên không được vượt quá 1024KB',
        // ],
        'ckeditor_contact' => [
            'required' => 'Trường nội dung là bắt buộc.',
            'min' => 'Nội dung phải tối thiểu 10 ký tự.',
        ],
    ]
];
