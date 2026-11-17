<?php

return [
    'navigation' => [
        'title' => 'حساب‌های بانکی',
        'group' => 'بانک‌ها',
    ],

    'form' => [
        'account-number'     => 'شماره حساب',
        'bank'               => [
            'title'    => 'بانک',
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

        'account-holder'     => 'صاحب حساب',
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
                    'title' => 'حساب بانکی به‌طور دائمی حذف شد',
                    'body'  => 'حساب بانکی با موفقیت به‌طور دائمی حذف شد.',
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
                    'title' => 'حساب‌های بانکی به‌طور دائمی حذف شدند',
                    'body'  => 'حساب‌های بانکی با موفقیت به‌طور دائمی حذف شدند.',
                ],
            ],
        ],
    ],
];
