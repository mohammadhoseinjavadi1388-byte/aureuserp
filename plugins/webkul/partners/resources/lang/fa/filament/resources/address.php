<?php

return [
    'form' => [
        'partner' => 'طرف حساب',
        'name'    => 'نام',
        'email'   => 'ایمیل',
        'phone'   => 'تلفن',
        'mobile'  => 'تلفن همراه',
        'type'    => 'نوع',
        'address' => 'نشانی',
        'city'    => 'شهر',
        'street1' => 'خیابان 1',
        'street2' => 'خیابان 2',
        'state'   => 'استان',
        'zip'     => 'کد پستی',
        'code'    => 'کد',
        'country' => 'کشور',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'افزودن نشانی',

                'notification' => [
                    'title' => 'نشانی ایجاد شد',
                    'body'  => 'نشانی با موفقیت ایجاد شد.',
                ],
            ],
        ],

        'columns' => [
            'type'    => 'نوع',
            'name'    => 'نام مخاطب',
            'address' => 'نشانی',
            'city'    => 'شهر',
            'street1' => 'خیابان 1',
            'street2' => 'خیابان 2',
            'state'   => 'استان',
            'zip'     => 'کد پستی',
            'country' => 'کشور',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'نشانی به‌روزرسانی شد',
                    'body'  => 'نشانی با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'نشانی حذف شد',
                    'body'  => 'نشانی با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'نشانی‌ها حذف شدند',
                    'body'  => 'نشانی‌ها با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],
];
