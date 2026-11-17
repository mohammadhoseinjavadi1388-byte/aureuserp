<?php

return [
    'navigation' => [
        'title' => 'تیم‌ها',
    ],

    'form' => [
        'name'    => 'نام',
        'company' => 'شرکت',
        'users'   => 'اعضای تیم',
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'company'    => 'شرکت',
            'users'      => 'اعضای تیم',
            'created-at' => 'تاریخ ایجاد',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تیم به‌روزرسانی شد',
                    'body'  => 'تیم با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'تیم بازیابی شد',
                    'body'  => 'تیم با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تیم حذف شد',
                    'body'  => 'تیم با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تیم برای همیشه حذف شد',
                        'body'  => 'تیم با موفقیت برای همیشه حذف شد.',
                    ],
                    'error' => [
                        'title' => 'حذف دائمی تیم ممکن نیست',
                        'body'  => 'این تیم در حال استفاده است و نمی‌توان آن را برای همیشه حذف کرد.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تیم‌ها بازیابی شدند',
                    'body'  => 'تیم‌ها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تیم‌ها حذف شدند',
                    'body'  => 'تیم‌ها با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],
];
