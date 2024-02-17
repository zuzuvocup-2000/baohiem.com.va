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
        'email' => [
            'required' => 'Trường email là bắt buộc.',
            'string' => 'Email phải là một chuỗi.',
            'max' => 'Email phải có ít nhất :max kí tự.',
            'regex' => 'Định dạng email không hợp lệ',
            'not_regex' => 'Định dạng email không hợp lệ',
        ],
    ],
];
