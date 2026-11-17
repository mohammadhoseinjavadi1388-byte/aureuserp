<?php

return [
    'form' => [
        'name' => 'نام',
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'created-at' => 'تاریخ ایجاد',
        ],

        'filters' => [
            'deleted-records' => 'رکوردهای حذف‌شده',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'مهارت به‌روزرسانی شد',
                    'body'  => 'مهارت با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'مهارت بازیابی شد',
                    'body'  => 'مهارت با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'مهارت حذف شد',
                    'body'  => 'مهارت با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'مهارت‌ها حذف شدند',
                    'body'  => 'مهارت‌ها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'مهارت‌ها برای همیشه حذف شدند',
                    'body'  => 'مهارت‌ها با موفقیت برای همیشه حذف شدند.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'مهارت‌ها بازیابی شدند',
                    'body'  => 'مهارت‌ها با موفقیت بازیابی شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => 'نام',
        ],
    ],
];
