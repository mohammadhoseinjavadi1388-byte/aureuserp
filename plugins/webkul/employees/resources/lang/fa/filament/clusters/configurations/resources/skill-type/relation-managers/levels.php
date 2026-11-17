<?php

return [
    'form' => [
        'name'          => 'نام',
        'level'         => 'سطح',
        'default-level' => 'سطح پیش‌فرض',
    ],

    'table' => [
        'columns' => [
            'name'          => 'نام',
            'level'         => 'سطح',
            'default-level' => 'سطح پیش‌فرض',
            'created-at'    => 'تاریخ ایجاد',
            'updated-at'    => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'created-at' => 'تاریخ ایجاد',
        ],

        'filters' => [
            'deleted-records' => 'رکوردهای حذف‌شده',
        ],

        'actions' => [
            'create' => [
                'notification' => [
                    'title' => 'سطح مهارت ایجاد شد',
                    'body'  => 'سطح مهارت با موفقیت ایجاد شد.',
                ],
            ],

            'edit' => [
                'notification' => [
                    'title' => 'سطح مهارت به‌روزرسانی شد',
                    'body'  => 'سطح مهارت با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'سطح مهارت بازیابی شد',
                    'body'  => 'سطح مهارت با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'سطح مهارت حذف شد',
                    'body'  => 'سطح مهارت با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'سطوح مهارت حذف شدند',
                    'body'  => 'سطوح مهارت با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'سطوح مهارت برای همیشه حذف شدند',
                    'body'  => 'سطوح مهارت با موفقیت برای همیشه حذف شدند.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'سطوح مهارت بازیابی شدند',
                    'body'  => 'سطوح مهارت با موفقیت بازیابی شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'          => 'نام',
            'level'         => 'سطح',
            'default-level' => 'سطح پیش‌فرض',
        ],
    ],
];
