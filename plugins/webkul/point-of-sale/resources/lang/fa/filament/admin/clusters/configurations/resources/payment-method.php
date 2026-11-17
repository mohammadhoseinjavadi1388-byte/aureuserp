<?php

return [
    'navigation' => [
        'title' => 'روش‌های پرداخت',
        'group' => 'پایانه فروش',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'name'                             => 'نام',
                    'company'                          => 'شرکت',
                    'terminal-type'                    => 'یکپارچه‌سازی',
                    'is-split-transaction'             => 'شناسایی مشتری',
                    'is-split-transaction-helper-text' => 'به ازای هر پرداخت، یک آرتیکل سند در حساب دریافتنی مشتری ثبت می‌کند.',
                    'is-active'                        => 'فعال',
                ],
            ],

            'accounting' => [
                'title' => 'حسابداری',

                'fields' => [
                    'journal'             => 'دفتر روزنامه',
                    'journal-placeholder' => 'برای استفاده از حساب دریافتنی مشتری، خالی بگذارید',
                    'account-placeholder' => 'برای استفاده از حساب پیش‌فرض تنظیمات شرکت، خالی بگذارید',
                    'receivable-account'  => 'حساب واسط',
                    'outstanding-account' => 'حساب در جریان وصول',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'entries' => [
                    'name'                    => 'نام',
                    'type'                    => 'نوع',
                    'terminal-type'           => 'دستگاه کارت‌خوان',
                    'journal-name'            => 'دفتر روزنامه',
                    'receivableAccount-name'  => 'حساب دریافتنی',
                    'outstandingAccount-name' => 'حساب در جریان وصول',
                    'is-cash-count'           => 'شمارش در کشوی پول',
                    'is-split-transaction'    => 'تفکیک تراکنش‌ها',
                    'is-active'               => 'فعال',
                    'company-name'            => 'شرکت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'               => 'نام',
            'type'               => 'نوع',
            'journal'            => 'دفتر روزنامه',
            'configs'            => 'پایانه فروش',
            'terminal-type'      => 'یکپارچه‌سازی',
            'receivable-account' => 'حساب واسط',
            'is-cash-count'      => 'کشوی پول',
            'is-active'          => 'فعال',
            'company'            => 'شرکت',
        ],

        'groups' => [
            'type'    => 'نوع',
            'company' => 'شرکت',
        ],

        'filters' => [
            'type' => 'نوع',
        ],

        'record-actions' => [
            'restore' => [
                'notification' => [
                    'success' => [
                        'title' => 'روش پرداخت بازیابی شد',
                        'body'  => 'روش پرداخت با موفقیت بازیابی شد.',
                    ],
                ],
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'روش پرداخت حذف شد',
                        'body'  => 'روش پرداخت با موفقیت حذف شد.',
                    ],
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'روش پرداخت به‌صورت دائمی حذف شد',
                        'body'  => 'روش پرداخت با موفقیت به‌صورت دائمی حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف روش پرداخت ممکن نیست',
                        'body'  => 'این روش پرداخت را نمی‌توان به‌صورت دائمی حذف کرد، زیرا پرداخت‌هایی با آن ثبت شده است. به‌جای آن، بایگانی‌اش کنید.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'روش‌های پرداخت به‌صورت دائمی حذف شدند',
                        'body'  => 'روش‌های پرداخت انتخاب‌شده با موفقیت به‌صورت دائمی حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف روش‌های پرداخت ممکن نیست',
                        'body'  => 'یک یا چند روش پرداخت را نمی‌توان به‌صورت دائمی حذف کرد، زیرا پرداخت‌هایی با آن‌ها ثبت شده است. به‌جای آن، بایگانی‌شان کنید.',
                    ],
                ],
            ],
        ],
    ],

    'in-open-session' => [
        'title' => 'روش پرداخت در حال استفاده است',
    ],
];
