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
            ],
            [
                'name' => 'Cập nhật tài khoản',
                'url' => '',
            ],
            [
                'name' => 'Chi bảo hiểm',
                'url' => '',
            ],
            [
                'name' => 'Gia hạn tài khoản',
                'url' => '',
            ],
            [
                'name' => 'Báo cáo thống kê',
                'url' => '',
            ]
        ]
    ],
    [
        'name' => 'Quản lý sức khỏe',
        'icon' => 'carbon:health-cross',
        'url' => route('account.index'),
        'items' => [
            [
                'name' => 'Danh sách khám sức khỏe',
                'url' => '',
            ],
            [
                'name' => 'Danh sách khám sức khỏe',
                'url' => '',
            ],
            [
                'name' => 'Danh sách khám sức khỏe',
                'url' => '',
            ],
            [
                'name' => 'Danh sách khám sức khỏe',
                'url' => '',
            ],
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
            [
                'name' => 'Supervisor',
                'url' => route('supervisor.insuranceExpenses'),
                'items' => [
                    [
                        'name' => 'Chi bảo hiểm đã xóa',
                        'url' => route('supervisor.insuranceExpenses'),
                    ],
                    [
                        'name' => 'Tài khoản khách hàng đã xóa',
                        'url' => route('supervisor.account'),
                    ],
                    [
                        'name' => 'Quản lý khách hàng online',
                        'url' => route('supervisor.accountOnline'),
                    ],
                ]
            ],
        ]
    ],
    [
        'name' => 'Cấu hình hệ thống',
        'icon' => 'solar:settings-outline',
        'url' => route('system.index'),
        'items' => []
    ],
    [
        'name' => 'Liên hệ',
        'icon' => 'carbon:email',
        'url' => route('contact.index'),
        'items' => []
    ],
];
