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
            'employee_code_required' => 'Vui lòng chọn nhân viên.',
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
    ]
];
