<?php

return [
    'title' => 'اسناد حسابداری',

    'navigation' => [
        'title' => 'اسناد حسابداری',
    ],

    'record-sub-navigation' => [
        'payment' => 'پرداخت',
    ],

    'global-search' => [
        'number'   => 'شماره',
        'partner'  => 'طرف حساب',
        'date'     => 'تاریخ فاکتور',
        'due-date' => 'تاریخ سررسید فاکتور',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'عمومی',

                'fields' => [
                    'reference'       => 'مرجع',
                    'accounting-date' => 'تاریخ حسابداری',
                    'journal'         => 'دفتر روزنامه',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => 'آرتیکل‌های سند',

                'repeater' => [
                    'title'       => 'اقلام',
                    'add-item'    => 'افزودن قلم',

                    'columns' => [
                        'account'                  => 'حساب',
                        'partner'                  => 'طرف حساب',
                        'label'                    => 'شرح',
                        'amount-currency'          => 'مبلغ (ارزی)',
                        'currency'                 => 'ارز',
                        'taxes'                    => 'مالیات',
                        'debit'                    => 'بدهکار',
                        'credit'                   => 'بستانکار',
                        'discount-amount-currency' => 'مبلغ تخفیف (ارزی)',
                    ],

                    'fields' => [
                        'account'                  => 'حساب',
                        'partner'                  => 'طرف حساب',
                        'label'                    => 'شرح',
                        'amount-currency'          => 'مبلغ (ارزی)',
                        'currency'                 => 'ارز',
                        'taxes'                    => 'مالیات',
                        'debit'                    => 'بدهکار',
                        'credit'                   => 'بستانکار',
                        'discount-amount-currency' => 'مبلغ تخفیف (ارزی)',
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'سایر اطلاعات',

                'fields' => [
                    'checked'                 => 'بررسی‌شده',
                    'company'                 => 'شرکت',
                    'fiscal-position'         => 'وضعیت مالیاتی',
                    'fiscal-position-tooltip' => 'وضعیت‌های مالیاتی برای تطبیق مالیات‌ها و حساب‌ها بر اساس موقعیت مکانی مشتری به کار می‌روند.',
                ],
            ],

            'term-and-conditions' => [
                'title' => 'شرایط و ضوابط',
            ],
        ],
    ],

    'table' => [
        'total'   => 'جمع کل',
        'columns' => [
            'invoice-date' => 'تاریخ فاکتور',
            'date'         => 'تاریخ',
            'number'       => 'شماره',
            'partner'      => 'طرف حساب',
            'reference'    => 'مرجع',
            'journal'      => 'دفتر روزنامه',
            'company'      => 'شرکت',
            'total'        => 'جمع کل',
            'state'        => 'وضعیت',
            'checked'      => 'بررسی‌شده',
        ],

        'summarizers' => [
            'total' => 'جمع کل',
        ],

        'groups' => [
            'partner'        => 'طرف حساب',
            'journal'        => 'دفتر روزنامه',
            'state'          => 'وضعیت',
            'payment-method' => 'روش پرداخت',
            'date'           => 'تاریخ',
            'invoice-date'   => 'تاریخ فاکتور',
            'company'        => 'شرکت',
        ],

        'filters' => [
            'number'                       => 'شماره',
            'invoice-partner-display-name' => 'نام نمایشی طرف حساب فاکتور',
            'invoice-date'                 => 'تاریخ فاکتور',
            'invoice-due-date'             => 'تاریخ سررسید فاکتور',
            'invoice-origin'               => 'مبدأ فاکتور',
            'reference'                    => 'مرجع',
            'created-at'                   => 'تاریخ ایجاد',
            'updated-at'                   => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'پرداخت حذف شد',
                    'body'  => 'پرداخت با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'پرداخت‌ها حذف شدند',
                    'body'  => 'پرداخت‌ها با موفقیت حذف شدند.',
                ],
            ],
        ],

        'toolbar-actions' => [
            'export' => [
                'label' => 'برون‌بری',
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'عمومی',
                'entries' => [
                    'number'          => 'شماره',
                    'reference'       => 'مرجع',
                    'accounting-date' => 'تاریخ حسابداری',
                    'journal'         => 'دفتر روزنامه',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => 'آرتیکل‌های سند',

                'repeater' => [
                    'entries' => [
                        'account'  => 'حساب',
                        'partner'  => 'طرف حساب',
                        'label'    => 'شرح',
                        'currency' => 'ارز',
                        'taxes'    => 'مالیات',
                        'debit'    => 'بدهکار',
                        'credit'   => 'بستانکار',
                    ],
                ],
            ],

            'other-information' => [
                'title' => 'سایر اطلاعات',

                'fieldset' => [
                    'accounting' => [
                        'title' => 'حسابداری',

                        'entries' => [
                            'company'         => 'شرکت',
                            'fiscal-position' => 'وضعیت مالیاتی',
                            'checked'         => 'بررسی‌شده',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'شرایط و ضوابط',
            ],
        ],
    ],

];
