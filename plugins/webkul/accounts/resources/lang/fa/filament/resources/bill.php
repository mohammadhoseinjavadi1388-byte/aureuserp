<?php

return [
    'title' => 'فاکتور',

    'navigation' => [
        'title' => 'فاکتورها',
        'group' => 'فاکتورها',
    ],

    'global-search' => [
        'vendor'   => 'تأمین‌کننده',
        'date'     => 'تاریخ',
        'due-date' => 'تاریخ سررسید',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'عمومی',
                'fields' => [
                    'vendor-bill'       => 'صورت‌حساب خرید',
                    'vendor'            => 'تأمین‌کننده',
                    'bill-date'         => 'تاریخ صورت‌حساب خرید',
                    'bill-reference'    => 'مرجع صورت‌حساب خرید',
                    'accounting-date'   => 'تاریخ حسابداری',
                    'payment-reference' => 'مرجع پرداخت',
                    'recipient-bank'    => 'بانک گیرنده',
                    'due-date'          => 'تاریخ سررسید',
                    'payment-term'      => 'شرایط پرداخت',
                    'journal'           => 'دفتر روزنامه',
                    'currency'          => 'ارز',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'ردیف‌های فاکتور',

                'repeater' => [
                    'products' => [
                        'title'       => 'محصولات',
                        'add-product' => 'افزودن محصول',

                        'columns' => [
                            'product'             => 'محصول',
                            'quantity'            => 'تعداد',
                            'unit'                => 'واحد',
                            'taxes'               => 'مالیات',
                            'discount-percentage' => 'تخفیف (%)',
                            'unit-price'          => 'قیمت واحد',
                            'sub-total'           => 'جمع جزء',
                        ],

                        'fields' => [
                            'product'             => 'محصول',
                            'quantity'            => 'تعداد',
                            'unit'                => 'واحد',
                            'taxes'               => 'مالیات',
                            'discount-percentage' => 'تخفیف (%)',
                            'unit-price'          => 'قیمت واحد',
                            'sub-total'           => 'جمع جزء',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'سایر اطلاعات',

                'fieldset' => [
                    'accounting' => [
                        'title' => 'حسابداری',

                        'fields' => [
                            'company'                 => 'شرکت',
                            'incoterm'                => 'اینکوترمز',
                            'incoterm-location'       => 'محل اینکوترمز',
                            'payment-method'          => 'روش پرداخت',
                            'fiscal-position'         => 'وضعیت مالیاتی',
                            'fiscal-position-tooltip' => 'وضعیت‌های مالیاتی برای تطبیق مالیات‌ها و حساب‌ها بر اساس موقعیت جغرافیایی مشتری به کار می‌روند.',
                            'cash-rounding'           => 'روش گرد کردن نقدی',
                            'cash-rounding-tooltip'   => 'کوچک‌ترین واحد قابل پرداخت نقدیِ ارز را مشخص می‌کند.',
                            'auto-post'               => 'ثبت خودکار',
                            'checked'                 => 'بررسی‌شده',
                        ],
                    ],
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
            'number'           => 'شماره',
            'state'            => 'وضعیت',
            'vendor'           => 'تأمین‌کننده',
            'bill-date'        => 'تاریخ صورت‌حساب خرید',
            'checked'          => 'بررسی‌شده',
            'accounting-date'  => 'تاریخ حسابداری',
            'due-date'         => 'تاریخ سررسید',
            'source-document'  => 'سند مبدأ',
            'reference'        => 'مرجع',
            'sales-person'     => 'کارشناس فروش',
            'tax-excluded'     => 'بدون مالیات',
            'tax'              => 'مالیات',
            'total'            => 'جمع کل',
            'amount-due'       => 'مبلغ قابل پرداخت',
            'bill-currency'    => 'ارز صورت‌حساب خرید',
        ],

        'summarizers' => [
            'total' => 'جمع کل',
        ],

        'groups' => [
            'name'                         => 'نام',
            'bill-partner-display-name'    => 'نام نمایشی طرف حساب صورت‌حساب خرید',
            'bill-date'                    => 'تاریخ صورت‌حساب خرید',
            'checked'                      => 'بررسی‌شده',
            'date'                         => 'تاریخ',
            'bill-due-date'                => 'تاریخ سررسید صورت‌حساب خرید',
            'bill-origin'                  => 'مبدأ صورت‌حساب خرید',
            'sales-person'                 => 'کارشناس فروش',
            'currency'                     => 'ارز',
            'created-at'                   => 'تاریخ ایجاد',
            'updated-at'                   => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'number'                    => 'شماره',
            'bill-partner-display-name' => 'نام نمایشی طرف حساب صورت‌حساب خرید',
            'bill-date'                 => 'تاریخ صورت‌حساب خرید',
            'bill-due-date'             => 'تاریخ سررسید صورت‌حساب خرید',
            'bill-origin'               => 'مبدأ صورت‌حساب خرید',
            'reference'                 => 'مرجع',
            'payment-reference'         => 'مرجع پرداخت',
            'narration'                 => 'شرح',
            'partner'                   => 'طرف حساب',
            'journal'                   => 'دفتر روزنامه',
            'fiscal-position'           => 'وضعیت مالیاتی',
            'currency'                  => 'ارز',
            'company'                   => 'شرکت',
            'date'                      => 'تاریخ حسابداری',
            'delivery-date'             => 'تاریخ تحویل',
            'amount-untaxed'            => 'مبلغ بدون مالیات',
            'amount-tax'                => 'مبلغ مالیات',
            'amount-total'              => 'مبلغ کل',
            'amount-residual'           => 'مبلغ قابل پرداخت',
            'checked'                   => 'بررسی‌شده',
            'posted-before'             => 'قبلاً ثبت‌شده',
            'is-move-sent'              => 'ارسال‌شده',
            'created-at'                => 'تاریخ ایجاد',
            'updated-at'                => 'تاریخ به‌روزرسانی',
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
                    'vendor-invoice'    => 'فاکتور تأمین‌کننده',
                    'vendor'            => 'تأمین‌کننده',
                    'bill-date'         => 'تاریخ صورت‌حساب خرید',
                    'bill-reference'    => 'مرجع صورت‌حساب خرید',
                    'accounting-date'   => 'تاریخ حسابداری',
                    'payment-reference' => 'مرجع پرداخت',
                    'recipient-bank'    => 'بانک گیرنده',
                    'due-date'          => 'تاریخ سررسید',
                    'payment-term'      => 'شرایط پرداخت',
                    'journal'           => 'دفتر روزنامه',
                    'currency'          => 'ارز',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'ردیف‌های فاکتور',

                'repeater' => [
                    'products' => [
                        'title'       => 'محصولات',
                        'add-product' => 'افزودن محصول',

                        'entries' => [
                            'product'             => 'محصول',
                            'quantity'            => 'تعداد',
                            'unit'                => 'واحد',
                            'taxes'               => 'مالیات',
                            'discount-percentage' => 'تخفیف (%)',
                            'unit-price'          => 'قیمت واحد',
                            'sub-total'           => 'جمع جزء',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'سایر اطلاعات',
                'fieldset' => [
                    'accounting' => [
                        'title' => 'حسابداری',

                        'entries' => [
                            'company'           => 'شرکت',
                            'incoterm'          => 'اینکوترمز',
                            'incoterm-location' => 'محل اینکوترمز',
                            'payment-method'    => 'روش پرداخت',
                            'checked'           => 'بررسی‌شده',
                            'fiscal-position'   => 'وضعیت مالیاتی',
                            'cash-rounding'     => 'روش گرد کردن نقدی',
                            'checked'           => 'بررسی‌شده',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'شرایط و ضوابط',
            ],

            'journal-items' => [
                'title' => 'آرتیکل‌های سند',

                'repeater' => [
                    'entries' => [
                        'account'  => 'حساب',
                        'partner'  => 'طرف حساب',
                        'label'    => 'شرح',
                        'due-date' => 'تاریخ سررسید',
                        'currency' => 'ارز',
                        'taxes'    => 'مالیات',
                        'debit'    => 'بدهکار',
                        'credit'   => 'بستانکار',
                    ],
                ],
            ],
        ],
    ],
];
