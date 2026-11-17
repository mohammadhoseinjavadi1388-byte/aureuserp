<?php

return [
    'title' => 'فاکتور',

    'navigation' => [
        'title' => 'فاکتورها',
        'group' => 'فاکتورها',
    ],

    'global-search' => [
        'customer' => 'مشتری',
        'date'     => 'تاریخ',
        'due-date' => 'تاریخ سررسید',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'عمومی',

                'fields' => [
                    'customer-invoice' => 'فاکتور مشتری',
                    'customer'         => 'مشتری',
                    'invoice-date'     => 'تاریخ فاکتور',
                    'due-date'         => 'تاریخ سررسید',
                    'payment-term'     => 'شرایط پرداخت',
                    'journal'          => 'دفتر روزنامه',
                    'currency'         => 'ارز',
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
                    'invoice' => [
                        'title'  => 'فاکتور',

                        'fields' => [
                            'customer-reference' => 'مرجع مشتری',
                            'sales-person'       => 'کارشناس فروش',
                            'payment-reference'  => 'مرجع پرداخت',
                            'recipient-bank'     => 'بانک گیرنده',
                            'delivery-date'      => 'تاریخ تحویل',
                        ],
                    ],

                    'accounting' => [
                        'title' => 'حسابداری',

                        'fields' => [
                            'company'                 => 'شرکت',
                            'incoterm'                => 'اینکوترمز',
                            'incoterm-location'       => 'محل اینکوترمز',
                            'fiscal-position'         => 'وضعیت مالیاتی',
                            'fiscal-position-tooltip' => 'وضعیت‌های مالیاتی برای تطبیق مالیات‌ها و حساب‌ها بر اساس موقعیت جغرافیایی مشتری به کار می‌روند.',
                            'cash-rounding'           => 'روش گرد کردن نقدی',
                            'cash-rounding-tooltip'   => 'کوچک‌ترین واحد قابل پرداخت نقدیِ ارز را مشخص می‌کند.',
                            'payment-method'          => 'روش پرداخت',
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
            'created-by'       => 'ایجادکننده',
            'customer'         => 'مشتری',
            'invoice-date'     => 'تاریخ فاکتور',
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
            'invoice-currency' => 'ارز فاکتور',
        ],

        'summarizers' => [
            'total' => 'جمع کل',
        ],

        'groups' => [
            'name'                         => 'نام',
            'invoice-partner-display-name' => 'نام نمایشی طرف حساب فاکتور',
            'invoice-date'                 => 'تاریخ فاکتور',
            'checked'                      => 'بررسی‌شده',
            'date'                         => 'تاریخ',
            'invoice-due-date'             => 'تاریخ سررسید فاکتور',
            'invoice-origin'               => 'مبدأ فاکتور',
            'sales-person'                 => 'کارشناس فروش',
            'currency'                     => 'ارز',
            'created-at'                   => 'تاریخ ایجاد',
            'updated-at'                   => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'number'                       => 'شماره',
            'invoice-partner-display-name' => 'نام نمایشی طرف حساب فاکتور',
            'invoice-date'                 => 'تاریخ فاکتور',
            'invoice-due-date'             => 'تاریخ سررسید فاکتور',
            'invoice-origin'               => 'مبدأ فاکتور',
            'reference'                    => 'مرجع',
            'payment-reference'            => 'مرجع پرداخت',
            'narration'                    => 'شرح',
            'partner'                      => 'طرف حساب',
            'journal'                      => 'دفتر روزنامه',
            'fiscal-position'              => 'وضعیت مالیاتی',
            'currency'                     => 'ارز',
            'company'                      => 'شرکت',
            'date'                         => 'تاریخ حسابداری',
            'delivery-date'                => 'تاریخ تحویل',
            'amount-untaxed'               => 'مبلغ بدون مالیات',
            'amount-tax'                   => 'مبلغ مالیات',
            'amount-total'                 => 'مبلغ کل',
            'amount-residual'              => 'مبلغ قابل پرداخت',
            'checked'                      => 'بررسی‌شده',
            'posted-before'                => 'قبلاً ثبت‌شده',
            'is-move-sent'                 => 'ارسال‌شده',
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
                    'customer-invoice' => 'فاکتور مشتری',
                    'customer'         => 'مشتری',
                    'invoice-date'     => 'تاریخ فاکتور',
                    'due-date'         => 'تاریخ سررسید',
                    'payment-term'     => 'شرایط پرداخت',
                    'journal'          => 'دفتر روزنامه',
                    'currency'         => 'ارز',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'ردیف‌های فاکتور',

                'repeater' => [
                    'products' => [
                        'entries' => [
                            'product'             => 'محصول',
                            'quantity'            => 'تعداد',
                            'unit'                => 'واحد اندازه‌گیری',
                            'taxes'               => 'مالیات',
                            'discount-percentage' => 'تخفیف (%)',
                            'unit-price'          => 'قیمت واحد',
                            'sub-total'           => 'جمع جزء',
                            'total'               => 'جمع کل',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'سایر اطلاعات',

                'fieldset' => [
                    'invoice' => [
                        'title'   => 'فاکتور',

                        'entries' => [
                            'customer-reference' => 'مرجع مشتری',
                            'sales-person'       => 'کارشناس فروش',
                            'payment-reference'  => 'مرجع پرداخت',
                            'recipient-bank'     => 'بانک گیرنده',
                            'delivery-date'      => 'تاریخ تحویل',
                        ],
                    ],

                    'accounting' => [
                        'title' => 'حسابداری',

                        'entries' => [
                            'company'           => 'شرکت',
                            'incoterm'          => 'اینکوترمز',
                            'incoterm-location' => 'محل اینکوترمز',
                            'payment-method'    => 'روش پرداخت',
                            'cash-rounding'     => 'روش گرد کردن نقدی',
                            'fiscal-position'   => 'وضعیت مالیاتی',
                            'auto-post'         => 'ثبت خودکار',
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
                        'currency' => 'ارز',
                        'due-date' => 'تاریخ سررسید',
                        'taxes'    => 'مالیات',
                        'debit'    => 'بدهکار',
                        'credit'   => 'بستانکار',
                    ],
                ],
            ],
        ],
    ],

    'summary' => [
        'actions' => [
            'reconcile' => [
                'label' => 'افزودن',
            ],

            'unreconcile' => [
                'label' => 'لغو ارتباط',
            ],
        ],
    ],

];
