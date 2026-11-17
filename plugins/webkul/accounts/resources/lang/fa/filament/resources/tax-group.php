<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'company'            => 'شرکت',
                'country'            => 'کشور',
                'name'               => 'نام',
                'preceding-subtotal' => 'جمع جزء پیشین',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'company'            => 'شرکت',
            'country'            => 'کشور',
            'created-by'         => 'ایجادکننده',
            'name'               => 'نام',
            'preceding-subtotal' => 'جمع جزء پیشین',
            'created-at'         => 'تاریخ ایجاد',
            'updated-at'         => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'name'       => 'نام',
            'company'    => 'شرکت',
            'country'    => 'کشور',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'گروه مالیاتی حذف شد',
                        'body'  => 'گروه مالیاتی با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف گروه مالیاتی ممکن نیست',
                        'body'  => 'این گروه مالیاتی قابل حذف نیست، زیرا در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'گروه‌های مالیاتی حذف شدند',
                        'body'  => 'گروه‌های مالیاتی با موفقیت حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف گروه‌های مالیاتی ممکن نیست',
                        'body'  => 'این گروه‌های مالیاتی قابل حذف نیستند، زیرا در حال استفاده هستند.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'company'            => 'شرکت',
                'country'            => 'کشور',
                'name'               => 'نام',
                'preceding-subtotal' => 'جمع جزء پیشین',
            ],
        ],
    ],
];
