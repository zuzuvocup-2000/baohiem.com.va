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
                'url' => route('account.insurance'),
            ],
            [
                'name' => 'Chi bảo hiểm',
                'url' => route('account.expenses'),
            ],
            [
                'name' => 'Gia hạn tài khoản',
                'url' => '',
            ],
            [
                'name' => 'Báo cáo thống kê',
                'url' => route('revenue.index'),
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
                'url' => route('physical.index'),
            ],
            [
                'name' => 'Khám sức khỏe',
                'url' => '',
            ],
            [
                'name' => 'Báo cáo khám sức khỏe',
                'url' => route('healthReport.index'),
            ]
        ]
    ],
    [
        'name' => 'Quản trị',
        'icon' => 'material-symbols:shield-person-outline-rounded',
        'url' => route('user.index'),
        'items' => [
            [
                'name' => 'Quản lý phòng ban',
                'url' => route('department.index'),
            ],
            [
                'name' => 'Quản lý tài khoản',
                'url' => route('user.index'),
            ],
            [
                'name' => 'Quản lý quyền',
                'url' => route('permission.index')
            ],
            [
                'name' => 'Quản lý vị trí chức vụ',
                'url' => route('role.index')
            ],
            [
                'name' => 'Nhật ký thao tác chứng từ',
                'url' => route('diary.index')
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
        'items' => [
            [
                'name' => 'Quản lý thông tin bảo hiểm',
                'url' => route('system.index'),
            ],
            [
                'name' => 'Quản lý thông tin bệnh viện',
                'url' => route('hospital.index')
            ],
        ]
    ],
    [
        'name' => 'Liên hệ',
        'icon' => 'carbon:email',
        'url' => route('contact.index'),
        'items' => []
    ],
];
