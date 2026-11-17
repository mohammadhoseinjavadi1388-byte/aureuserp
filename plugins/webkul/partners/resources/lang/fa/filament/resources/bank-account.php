<?php

return [
    'navigation' => [
        'group' => 'بانک‌ها',
        'title' => 'حساب‌های بانکی',
    ],

    'form' => [
        'account-number'     => 'شماره حساب',
        'bank'               => 'بانک',
        'account-holder'     => 'صاحب حساب',
        'can-send-money'     => 'امکان ارسال وجه',
    ],

    'table' => [
        'columns' => [
            'account-number' => 'شماره حساب',
            'bank'           => 'بانک',
            'account-holder' => 'صاحب حساب',
            'send-money'     => 'امکان ارسال وجه',
            'created-at'     => 'تاریخ ایجاد',
            'updated-at'     => 'تاریخ به‌روزرسانی',
            'deleted-at'     => 'تاریخ حذف',
        ],

        'filters' => [
            'bank'           => 'بانک',
            'account-holder' => 'صاحب حساب',
            'creator'        => 'ایجادکننده',
            'can-send-money' => 'امکان ارسال وجه',
        ],

        'groups' => [
            'bank'               => 'بانک',
            'can-send-money'     => 'امکان ارسال وجه',
            'created-at'         => 'تاریخ ایجاد',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'حساب بانکی به‌روزرسانی شد',
                    'body'  => 'حساب بانکی با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'حساب بانکی بازیابی شد',
                    'body'  => 'حساب بانکی با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'حساب بانکی حذف شد',
                    'body'  => 'حساب بانکی با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'حساب بانکی به‌صورت دائمی حذف شد',
                    'body'  => 'حساب بانکی با موفقیت به‌صورت دائمی حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'حساب‌های بانکی بازیابی شدند',
                    'body'  => 'حساب‌های بانکی با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'حساب‌های بانکی حذف شدند',
                    'body'  => 'حساب‌های بانکی با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'حساب‌های بانکی به‌صورت دائمی حذف شدند',
                    'body'  => 'حساب‌های بانکی با موفقیت به‌صورت دائمی حذف شدند.',
                ],
            ],
        ],
    ],
];
