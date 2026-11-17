<?php

return [
    'navigation' => [
        'title' => 'برچسب‌ها',
        'group' => 'وبلاگ',
    ],

    'form' => [
        'name'  => 'نام',
        'color' => 'رنگ',
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'color'      => 'رنگ',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'برچسب به‌روزرسانی شد',
                    'body'  => 'برچسب با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'برچسب بازیابی شد',
                    'body'  => 'برچسب با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'برچسب حذف شد',
                    'body'  => 'برچسب با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'برچسب برای همیشه حذف شد',
                    'body'  => 'برچسب با موفقیت برای همیشه حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'برچسب‌ها بازیابی شدند',
                    'body'  => 'برچسب‌ها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'برچسب‌ها حذف شدند',
                    'body'  => 'برچسب‌ها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'برچسب‌ها برای همیشه حذف شدند',
                    'body'  => 'برچسب‌ها با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],
    ],
];
