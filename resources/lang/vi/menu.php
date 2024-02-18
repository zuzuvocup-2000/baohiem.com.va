<?php

return [
    [
        'name' => 'Trang chủ',
        'icon' => 'material-symbols:home',
        'url' => route('home'),
        'items' => []
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
                'url' => '',
            ],
        ]
    ]
];
