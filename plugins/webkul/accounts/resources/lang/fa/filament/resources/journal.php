<?php

return [
    'form' => [
        'tabs' => [
            'journal-entries' => [
                'title' => 'اسناد حسابداری',

                'field-set' => [
                    'accounting-information' => [
                        'title'  => 'اطلاعات حسابداری',
                        'fields' => [
                            'dedicated-credit-note-sequence' => 'شماره‌گذاری جداگانه برای برگشت از فروش',
                            'dedicated-payment-sequence'     => 'شماره‌گذاری جداگانه برای پرداخت',
                            'sort-code-placeholder'          => 'کد دفتر روزنامه را وارد کنید',
                            'sort-code'                      => 'کد کوتاه',
                            'currency'                       => 'ارز',
                            'color'                          => 'رنگ',
                            'default-account'                => 'حساب پیش‌فرض',
                            'profit-account'                 => 'حساب سود',
                            'loss-account'                   => 'حساب زیان',
                            'suspense-account'               => 'حساب معلق',
                            'bank-account'                   => 'حساب بانکی',
                        ],
                    ],

                    'bank-account-number' => [
                        'title' => 'شماره حساب بانکی',
                    ],
                ],
            ],

            'incoming-payments' => [
                'title'            => 'پرداخت‌های دریافتی',
                'add-action-label' => 'افزودن سطر',

                'fields' => [
                    'payment-method'             => 'روش پرداخت',
                    'display-name'               => 'نام نمایشی',
                    'account-number'             => 'حساب‌های دریافت‌های در جریان وصول',
                    'relation-notes'             => 'یادداشت‌های ارتباط',
                    'relation-notes-placeholder' => 'جزئیات ارتباط را وارد کنید',
                ],
            ],

            'outgoing-payments' => [
                'title'            => 'پرداخت‌های خروجی',
                'add-action-label' => 'افزودن سطر',

                'fields' => [
                    'payment-method'             => 'روش پرداخت',
                    'display-name'               => 'نام نمایشی',
                    'account-number'             => 'حساب‌های پرداخت‌های در جریان',
                    'relation-notes'             => 'یادداشت‌های ارتباط',
                    'relation-notes-placeholder' => 'جزئیات ارتباط را وارد کنید',
                ],
            ],

            'advanced-settings' => [
                'title'  => 'تنظیمات پیشرفته',

                'fields' => [
                    'allowed-accounts'       => 'حساب‌های مجاز',
                    'control-access'         => 'کنترل دسترسی',
                    'payment-communication'  => 'شناسه پرداخت',
                    'auto-check-on-post'     => 'بررسی خودکار هنگام ثبت',
                    'communication-type'     => 'نوع شناسه پرداخت',
                    'communication-standard' => 'استاندارد شناسه پرداخت',
                ],
            ],
        ],

        'general' => [
            'title' => 'اطلاعات کلی',

            'fields' => [
                'name'    => 'نام',
                'type'    => 'نوع',
                'company' => 'شرکت',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'type'       => 'نوع',
            'code'       => 'کد',
            'currency'   => 'ارز',
            'created-by' => 'ایجادکننده',
            'status'     => 'وضعیت',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'دفتر روزنامه حذف شد',
                        'body'  => 'دفتر روزنامه با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف دفتر روزنامه ناموفق بود',
                        'body'  => 'این دفتر روزنامه قابل حذف نیست، زیرا در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'دفتر روزنامه حذف شد',
                        'body'  => 'دفتر روزنامه با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف دفترهای روزنامه ناموفق بود',
                        'body'  => 'این دفترهای روزنامه قابل حذف نیستند، زیرا در حال استفاده هستند.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'journal-entries' => [
                'title' => 'اسناد حسابداری',

                'field-set' => [
                    'accounting-information' => [
                        'title'   => 'اطلاعات حسابداری',

                        'entries' => [
                            'dedicated-credit-note-sequence' => 'شماره‌گذاری جداگانه برای برگشت از فروش',
                            'dedicated-payment-sequence'     => 'شماره‌گذاری جداگانه برای پرداخت',
                            'sort-code-placeholder'          => 'کد دفتر روزنامه را وارد کنید',
                            'sort-code'                      => 'کد کوتاه',
                            'currency'                       => 'ارز',
                            'color'                          => 'رنگ',
                            'default-account'                => 'حساب پیش‌فرض',
                            'profit-account'                 => 'حساب سود',
                            'loss-account'                   => 'حساب زیان',
                            'suspense-account'               => 'حساب معلق',
                        ],
                    ],

                    'bank-account-number' => [
                        'title' => 'شماره حساب بانکی',

                        'entries' => [
                            'account-number' => 'شماره حساب',
                        ],
                    ],
                ],
            ],

            'incoming-payments' => [
                'title' => 'پرداخت‌های دریافتی',

                'entries' => [
                    'payment-method'             => 'روش پرداخت',
                    'display-name'               => 'نام نمایشی',
                    'account-number'             => 'حساب‌های دریافت‌های در جریان وصول',
                    'relation-notes'             => 'یادداشت‌های ارتباط',
                    'relation-notes-placeholder' => 'جزئیات ارتباط را وارد کنید',
                ],
            ],

            'outgoing-payments' => [
                'title' => 'پرداخت‌های خروجی',

                'entries' => [
                    'payment-method'             => 'روش پرداخت',
                    'display-name'               => 'نام نمایشی',
                    'account-number'             => 'حساب‌های پرداخت‌های در جریان',
                    'relation-notes'             => 'یادداشت‌های ارتباط',
                    'relation-notes-placeholder' => 'جزئیات ارتباط را وارد کنید',
                ],
            ],

            'advanced-settings' => [
                'title'   => 'تنظیمات پیشرفته',

                'allowed-accounts' => [
                    'title' => 'حساب‌های مجاز',

                    'entries' => [
                        'allowed-accounts'       => 'حساب‌های مجاز',
                        'control-access'         => 'کنترل دسترسی',
                        'auto-check-on-post'     => 'بررسی خودکار هنگام ثبت',
                    ],
                ],

                'payment-communication'  => [
                    'title' => 'شناسه پرداخت',

                    'entries' => [
                        'communication-type'     => 'نوع شناسه پرداخت',
                        'communication-standard' => 'استاندارد شناسه پرداخت',
                    ],
                ],
            ],
        ],

        'general' => [
            'title' => 'اطلاعات کلی',

            'entries' => [
                'name'    => 'نام',
                'type'    => 'نوع',
                'company' => 'شرکت',
            ],
        ],
    ],

];
