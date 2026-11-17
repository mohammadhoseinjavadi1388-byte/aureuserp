<?php

return [
    'navigation' => [
        'title' => 'بانک‌ها',
        'group' => 'حساب‌های بانکی',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'name'  => 'نام',
                    'code'  => 'کد شناسایی بانک (BIC)',
                    'email' => 'ایمیل',
                    'phone' => 'تلفن',
                ],
            ],

            'address' => [
                'title' => 'نشانی',

                'fields' => [
                    'address' => 'نشانی',
                    'city'    => 'شهر',
                    'street1' => 'خیابان 1',
                    'street2' => 'خیابان 2',
                    'state'   => 'استان',
                    'zip'     => 'کد پستی',
                    'country' => 'کشور',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'           => 'نام',
            'code'           => 'کد شناسایی بانک (BIC)',
            'country'        => 'کشور',
            'created-at'     => 'تاریخ ایجاد',
            'updated-at'     => 'تاریخ به‌روزرسانی',
            'deleted-at'     => 'تاریخ حذف',
        ],

        'groups' => [
            'country'               => 'کشور',
            'created-at'            => 'تاریخ ایجاد',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'بانک به‌روزرسانی شد',
                    'body'  => 'بانک با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'بانک بازیابی شد',
                    'body'  => 'بانک با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'بانک حذف شد',
                    'body'  => 'بانک با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'بانک برای همیشه حذف شد',
                    'body'  => 'بانک با موفقیت برای همیشه حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'بانک‌ها بازیابی شدند',
                    'body'  => 'بانک‌ها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'بانک‌ها حذف شدند',
                    'body'  => 'بانک‌ها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'بانک‌ها برای همیشه حذف شدند',
                    'body'  => 'بانک‌ها با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],
    ],
];
