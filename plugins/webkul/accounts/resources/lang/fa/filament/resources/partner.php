<?php

return [
    'title' => 'طرف حساب‌ها',

    'navigation' => [
        'title' => 'طرف حساب‌ها',
    ],

    'form' => [
        'tabs' => [
            'sales-purchases' => [
                'fieldsets' => [
                    'sales' => [
                        'title' => 'فروش',

                        'fields' => [
                            'sales-person'   => 'کارشناس فروش',
                            'payment-terms'  => 'شرایط پرداخت',
                            'payment-method' => 'روش پرداخت',
                        ],
                    ],

                    'purchase' => [
                        'title' => 'خرید',

                        'fields' => [
                            'payment-terms'  => 'شرایط پرداخت',
                            'payment-method' => 'روش پرداخت',
                        ],
                    ],

                    'fiscal-information' => [
                        'title' => 'اطلاعات مالیاتی',

                        'fields' => [
                            'fiscal-position'    => 'وضعیت مالیاتی',
                        ],
                    ],
                ],
            ],

            'invoicing' => [
                'title'  => 'صدور فاکتور',

                'fieldsets' => [
                    'customer-invoices' => [
                        'title' => 'فاکتورهای مشتری',

                        'fields' => [
                            'invoice-sending-method'   => 'روش ارسال فاکتور',
                            'invoice-edi-format-store' => 'قالب فاکتور الکترونیکی',
                            'peppol-eas'               => 'نشانی Peppol',
                            'endpoint'                 => 'نقطه پایانی',
                        ],
                    ],

                    'accounting-entries' => [
                        'title' => 'ثبت‌های حسابداری',

                        'fields' => [
                            'account-receivable' => 'حساب دریافتنی',
                            'account-payable'    => 'حساب پرداختنی',
                        ],
                    ],

                    'automation' => [
                        'title' => 'خودکارسازی',

                        'fields' => [
                            'auto-post-bills'                => 'ثبت خودکار صورت‌حساب‌های خرید',
                            'ignore-abnormal-invoice-amount' => 'نادیده گرفتن مبلغ غیرعادی فاکتور',
                            'ignore-abnormal-invoice-date'   => 'نادیده گرفتن تاریخ غیرعادی فاکتور',
                        ],
                    ],
                ],
            ],

            'internal-notes' => [
                'title' => 'یادداشت‌های داخلی',
            ],
        ],
    ],

    'infolist' => [

        'tabs' => [
            'sales-purchases' => [
                'fieldsets' => [
                    'sales' => [
                        'title' => 'فروش',

                        'entries' => [
                            'sales-person'   => 'کارشناس فروش',
                            'payment-terms'  => 'شرایط پرداخت',
                            'payment-method' => 'روش پرداخت',
                        ],
                    ],

                    'purchase' => [
                        'title' => 'خرید',

                        'entries' => [
                            'payment-terms'  => 'شرایط پرداخت',
                            'payment-method' => 'روش پرداخت',
                        ],
                    ],

                    'fiscal-information' => [
                        'title' => 'اطلاعات مالیاتی',

                        'entries' => [
                            'fiscal-position'    => 'وضعیت مالیاتی',
                        ],
                    ],
                ],
            ],

            'invoicing' => [
                'title'  => 'صدور فاکتور',

                'fieldsets' => [
                    'customer-invoices' => [
                        'title' => 'فاکتورهای مشتری',

                        'entries' => [
                            'invoice-sending-method'   => 'روش ارسال فاکتور',
                            'invoice-edi-format-store' => 'قالب فاکتور الکترونیکی',
                            'peppol-eas'               => 'نشانی Peppol',
                            'endpoint'                 => 'نقطه پایانی',
                        ],
                    ],

                    'accounting-entries' => [
                        'title' => 'ثبت‌های حسابداری',

                        'entries' => [
                            'account-receivable' => 'حساب دریافتنی',
                            'account-payable'    => 'حساب پرداختنی',
                        ],
                    ],

                    'automation' => [
                        'title' => 'خودکارسازی',

                        'entries' => [
                            'auto-post-bills'                => 'ثبت خودکار صورت‌حساب‌های خرید',
                            'ignore-abnormal-invoice-amount' => 'نادیده گرفتن مبلغ غیرعادی فاکتور',
                            'ignore-abnormal-invoice-date'   => 'نادیده گرفتن تاریخ غیرعادی فاکتور',
                        ],
                    ],
                ],
            ],

            'internal-notes' => [
                'title' => 'یادداشت‌های داخلی',
            ],
        ],
    ],
];
