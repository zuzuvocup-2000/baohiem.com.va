<?php

return [
    [
        'name' => 'Trang chủ',
        'icon' => 'material-symbols:home',
        'url' => route('home'),
        'items' => []
    ],
    [
        'name' => 'Thông tin tài khoản bảo hiểm',
        'icon' => 'iconoir:home-hospital',
        'url' => route('account.index'),
        'items' => [
            [
                'name' => 'Thông tin tài khoản',
                'url' => route('account.index'),
            ]
        ]
    ],
    [
        'name' => 'Quản trị',
        'icon' => 'material-symbols:shield-person-outline-rounded',
        'url' => route('user.index'),
        'items' => [
            [
                'name' => 'Quản lý tài khoản',
                'url' => route('user.index'),
            ],
            [
                'name' => 'Quản lý phân quyền',
                'url' => '/permissions'
            ],
        ]
    ],
    [
        'name' => 'Cấu hình hệ thống',
        'icon' => 'solar:settings-outline',
        'url' => route('system.index'),
        'items' => []
    ],
];
