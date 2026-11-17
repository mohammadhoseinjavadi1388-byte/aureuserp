<?php

return [
    'title' => 'پیش‌فاکتور',

    'navigation' => [
        'title' => 'پیش‌فاکتورها',
    ],

    'global-search' => [
        'customer'  => 'مشتری',
        'reference' => 'مرجع',
        'amount'    => 'مبلغ',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'عمومی',
                'fields' => [
                    'customer'       => 'مشتری',
                    'expiration'     => 'تاریخ انقضا',
                    'quotation-date' => 'تاریخ پیش‌فاکتور',
                    'order-date'     => 'تاریخ سفارش',
                    'payment-term'   => 'شرایط پرداخت',
                    'price-list'     => 'لیست قیمت',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title' => 'ردیف‌های سفارش',

                'repeater' => [
                    'products' => [
                        'title'       => 'محصولات',
                        'add-product' => 'افزودن محصول',

                        'columns'     => [
                            'product'                    => 'محصول',
                            'product-variants'           => 'تنوع‌های محصول',
                            'product-simple'             => 'محصول ساده',
                            'quantity'                   => 'تعداد',
                            'insufficient-stock-tooltip' => 'موجودی برای تأمین این تقاضا کافی نیست.',
                            'uom'                        => 'واحد',
                            'lead-time'                  => 'زمان تحویل',
                            'qty-delivered'              => 'تحویل‌شده',
                            'qty-invoiced'               => 'فاکتورشده',
                            'packaging-qty'              => 'تعداد بسته‌بندی',
                            'packaging'                  => 'بسته‌بندی',
                            'unit-price'                 => 'قیمت واحد',
                            'cost'                       => 'بهای تمام‌شده',
                            'margin'                     => 'حاشیه سود',
                            'taxes'                      => 'مالیات',
                            'amount'                     => 'مبلغ',
                            'margin-percentage'          => 'حاشیه سود (%)',
                            'discount-percentage'        => 'تخفیف (%)',
                        ],

                        'fields'      => [
                            'product'             => 'محصول',
                            'product-variants'    => 'تنوع‌های محصول',
                            'product-simple'      => 'محصول ساده',
                            'quantity'            => 'تعداد',
                            'uom'                 => 'واحد اندازه‌گیری',
                            'lead-time'           => 'زمان تحویل',
                            'qty-delivered'       => 'تعداد تحویل‌شده',
                            'qty-invoiced'        => 'تعداد فاکتورشده',
                            'packaging-qty'       => 'تعداد بسته‌بندی',
                            'packaging'           => 'بسته‌بندی',
                            'unit-price'          => 'قیمت واحد',
                            'cost'                => 'بهای تمام‌شده',
                            'margin'              => 'حاشیه سود',
                            'taxes'               => 'مالیات',
                            'amount'              => 'مبلغ',
                            'margin-percentage'   => 'حاشیه سود (%)',
                            'discount-percentage' => 'تخفیف (%)',
                        ],

                        'notifications' => [
                            'quantity-below-delivered' => [
                                'title' => 'کاهش تعداد ممکن نیست',
                                'body'  => 'نمی‌توانید تعداد را کمتر از تعداد تحویل‌شده (:qty) قرار دهید.',
                            ],
                        ],

                        'delete-action' => [
                            'error' => [
                                'title' => 'حذف محصول ممکن نیست',
                                'body'  => 'محصولات را نمی‌توان از سفارش فروش تأییدشده حذف کرد.',
                            ],
                        ],

                        'actions' => [
                            'open-product' => [
                                'tooltip' => 'باز کردن محصول',
                            ],
                        ],
                    ],

                    'product-optional' => [
                        'title'       => 'محصولات اختیاری',
                        'add-product' => 'افزودن محصول',

                        'columns' => [
                            'product'             => 'محصول',
                            'description'         => 'توضیحات',
                            'quantity'            => 'تعداد',
                            'uom'                 => 'واحد اندازه‌گیری',
                            'unit-price'          => 'قیمت واحد',
                            'discount-percentage' => 'تخفیف (%)',
                        ],

                        'fields'      => [
                            'product'             => 'محصول',
                            'description'         => 'توضیحات',
                            'quantity'            => 'تعداد',
                            'uom'                 => 'واحد اندازه‌گیری',
                            'unit-price'          => 'قیمت واحد',
                            'discount-percentage' => 'تخفیف (%)',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => 'افزودن به ردیف‌های سفارش',
                                    'already-added'  => 'قبلاً به سفارش افزوده شده است',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => 'محصول افزوده شد',
                                        'body'  => 'محصول با موفقیت افزوده شد.',
                                    ],

                                    'product-not-found' => [
                                        'title' => 'محصول یافت نشد',
                                    ],

                                    'product-already-exists' => [
                                        'title' => 'محصول از قبل وجود دارد',
                                        'body'  => 'این محصول از قبل در ردیف‌های سفارش وجود دارد. لطفاً همان ردیف موجود را به‌روزرسانی کنید.',
                                    ],

                                    'missing-product-data' => [
                                        'title' => 'اطلاعات محصول ناقص است',
                                        'body'  => 'پردازش محصول انتخاب‌شده ممکن نیست.',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'other-information' => [
                'title' => 'سایر اطلاعات',

                'fieldset' => [
                    'sales' => [
                        'title' => 'فروش',

                        'fields' => [
                            'sales-person'       => 'کارشناس فروش',
                            'customer-reference' => 'مرجع مشتری',
                            'tags'               => 'برچسب‌ها',
                        ],
                    ],

                    'shipping' => [
                        'title'  => 'ارسال',
                        'fields' => [
                            'warehouse'       => 'انبار',
                            'commitment-date' => 'تاریخ تحویل',
                        ],
                    ],

                    'tracking' => [
                        'title'  => 'ردیابی',
                        'fields' => [
                            'source-document' => 'سند مبدأ',
                            'medium'          => 'رسانه',
                            'source'          => 'منبع',
                            'campaign'        => 'کمپین',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'اطلاعات تکمیلی',

                        'fields' => [
                            'company'    => 'شرکت',
                            'currency'   => 'ارز',
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
        'columns' => [
            'number'             => 'شماره',
            'status'             => 'وضعیت',
            'delivery-status'    => 'وضعیت تحویل',
            'invoice-status'     => 'وضعیت فاکتور',
            'creation-date'      => 'تاریخ ایجاد',
            'commitment-date'    => 'تاریخ تعهد تحویل',
            'expected-date'      => 'تاریخ مورد انتظار',
            'customer'           => 'مشتری',
            'sales-person'       => 'کارشناس فروش',
            'sales-team'         => 'تیم فروش',
            'untaxed-amount'     => 'مبلغ بدون مالیات',
            'amount-tax'         => 'مبلغ مالیات',
            'amount-total'       => 'مبلغ کل',
            'customer-reference' => 'مرجع مشتری',
        ],

        'summarizers' => [
            'total'        => 'جمع کل',
            'taxes'        => 'مالیات',
            'total-amount' => 'مبلغ کل',
        ],

        'filters' => [
            'sales-person'     => 'کارشناس فروش',
            'utm-source'       => 'منبع UTM',
            'company'          => 'شرکت',
            'customer'         => 'مشتری',
            'journal'          => 'دفتر روزنامه',
            'invoice-address'  => 'نشانی صورت‌حساب',
            'shipping-address' => 'نشانی ارسال',
            'fiscal-position'  => 'وضعیت مالیاتی',
            'payment-term'     => 'شرایط پرداخت',
            'currency'         => 'ارز',
            'created-at'       => 'تاریخ ایجاد',
            'updated-at'       => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'medium'          => 'رسانه',
            'source'          => 'منبع',
            'team'            => 'تیم',
            'sales-person'    => 'کارشناس فروش',
            'currency'        => 'ارز',
            'company'         => 'شرکت',
            'customer'        => 'مشتری',
            'quotation-date'  => 'تاریخ پیش‌فاکتور',
            'commitment-date' => 'تاریخ تعهد تحویل',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'پیش‌فاکتور بازیابی شد',
                    'body'  => 'پیش‌فاکتور با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'پیش‌فاکتور حذف شد',
                    'body'  => 'پیش‌فاکتور با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'پیش‌فاکتور به‌طور دائمی حذف شد',
                    'body'  => 'پیش‌فاکتور با موفقیت به‌طور دائمی حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'پیش‌فاکتورها بازیابی شدند',
                    'body'  => 'پیش‌فاکتورها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'پیش‌فاکتورها حذف شدند',
                    'body'  => 'پیش‌فاکتورها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'پیش‌فاکتورها به‌طور دائمی حذف شدند',
                    'body'  => 'پیش‌فاکتورها با موفقیت به‌طور دائمی حذف شدند.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'پیش‌فاکتور ایجاد شد',
                    'body'  => 'پیش‌فاکتور با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'عمومی',
                'entries' => [
                    'sale-order'     => 'سفارش فروش',
                    'customer'       => 'مشتری',
                    'expiration'     => 'تاریخ انقضا',
                    'quotation-date' => 'تاریخ پیش‌فاکتور',
                    'payment-term'   => 'شرایط پرداخت',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title' => 'ردیف‌های سفارش',

                'repeater' => [
                    'products' => [
                        'title'       => 'محصولات',
                        'add-product' => 'افزودن محصول',
                        'entries'     => [
                            'product'             => 'محصول',
                            'product-variants'    => 'تنوع‌های محصول',
                            'product-simple'      => 'محصول ساده',
                            'quantity'            => 'تعداد',
                            'qty-delivered'       => 'تحویل‌شده',
                            'qty-invoiced'        => 'فاکتورشده',
                            'uom'                 => 'واحد',
                            'lead-time'           => 'زمان تحویل',
                            'packaging-qty'       => 'تعداد بسته‌بندی',
                            'packaging'           => 'بسته‌بندی',
                            'unit-price'          => 'قیمت واحد',
                            'cost'                => 'بهای تمام‌شده',
                            'margin'              => 'حاشیه سود',
                            'taxes'               => 'مالیات',
                            'amount'              => 'مبلغ',
                            'margin-percentage'   => 'حاشیه سود (%)',
                            'discount-percentage' => 'تخفیف (%)',
                            'sub-total'           => 'جمع جزء',
                        ],
                    ],

                    'product-optional' => [
                        'title'       => 'محصولات اختیاری',
                        'add-product' => 'افزودن محصول',
                        'entries'     => [
                            'product'             => 'محصول',
                            'description'         => 'توضیحات',
                            'quantity'            => 'تعداد',
                            'uom'                 => 'واحد اندازه‌گیری',
                            'unit-price'          => 'قیمت واحد',
                            'discount-percentage' => 'تخفیف (%)',
                            'sub-total'           => 'جمع جزء',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => 'افزودن به ردیف‌های سفارش',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => 'محصول افزوده شد',
                                        'body'  => 'محصول با موفقیت افزوده شد.',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'other-information' => [
                'title' => 'سایر اطلاعات',

                'fieldset' => [
                    'sales' => [
                        'title' => 'فروش',

                        'entries' => [
                            'sales-person'       => 'کارشناس فروش',
                            'customer-reference' => 'مرجع مشتری',
                            'tags'               => 'برچسب‌ها',
                        ],
                    ],

                    'shipping' => [
                        'title'   => 'ارسال',
                        'entries' => [
                            'commitment-date' => 'تاریخ تحویل',
                        ],
                    ],

                    'tracking' => [
                        'title'   => 'ردیابی',
                        'entries' => [
                            'source-document' => 'سند مبدأ',
                            'medium'          => 'رسانه',
                            'source'          => 'منبع',
                            'campaign'        => 'کمپین',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'اطلاعات تکمیلی',

                        'entries' => [
                            'company'  => 'شرکت',
                            'currency' => 'ارز',
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
