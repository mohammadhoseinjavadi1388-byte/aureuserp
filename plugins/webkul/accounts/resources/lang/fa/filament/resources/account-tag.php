<?php

return [
    'form' => [
        'fields' => [
            'color'         => 'رنگ',
            'country'       => 'کشور',
            'applicability' => 'کاربرد',
            'name'          => 'نام',
            'status'        => 'وضعیت',
            'tax-negate'    => 'معکوس‌سازی مالیات',
        ],
    ],

    'table' => [
        'columns' => [
            'color'         => 'رنگ',
            'country'       => 'کشور',
            'created-by'    => 'ایجادکننده',
            'applicability' => 'کاربرد',
            'name'          => 'نام',
            'status'        => 'وضعیت',
            'tax-negate'    => 'معکوس‌سازی مالیات',
            'created-at'    => 'تاریخ ایجاد',
            'updated-at'    => 'تاریخ به‌روزرسانی',
            'deleted-at'    => 'تاریخ حذف',
        ],

        'filters' => [
            'bank'           => 'بانک',
            'account-holder' => 'صاحب حساب',
            'creator'        => 'ایجادکننده',
            'can-send-money' => 'امکان ارسال وجه',
        ],

        'groups' => [
            'country'       => 'کشور',
            'created-by'    => 'ایجادکننده',
            'applicability' => 'کاربرد',
            'name'          => 'نام',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'برچسب حساب به‌روزرسانی شد',
                    'body'  => 'برچسب حساب با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'برچسب حساب حذف شد',
                    'body'  => 'برچسب حساب با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'برچسب‌های حساب حذف شدند',
                    'body'  => 'برچسب‌های حساب با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'color'         => 'رنگ',
            'country'       => 'کشور',
            'applicability' => 'کاربرد',
            'name'          => 'نام',
            'status'        => 'وضعیت',
            'tax-negate'    => 'معکوس‌سازی مالیات',
        ],
    ],
];
