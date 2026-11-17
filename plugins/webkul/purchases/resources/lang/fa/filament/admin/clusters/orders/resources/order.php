<?php

return [
    'global-search' => [
        'vendor'    => 'تأمین‌کننده',
        'reference' => 'مرجع',
        'amount'    => 'مبلغ',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'vendor'                   => 'تأمین‌کننده',
                    'vendor-reference'         => 'مرجع تأمین‌کننده',
                    'vendor-reference-tooltip' => 'شماره مرجع سفارش فروش یا پیشنهاد قیمتی که تأمین‌کننده ارائه کرده است. از آن برای تطبیق هنگام دریافت محصولات استفاده می‌شود، زیرا این مرجع معمولاً در حواله تحویل تأمین‌کننده درج می‌شود.',
                    'agreement'                => 'قرارداد',
                    'currency'                 => 'ارز',
                    'confirmation-date'        => 'تاریخ تأیید',
                    'order-deadline'           => 'مهلت سفارش',
                    'expected-arrival'         => 'تاریخ مورد انتظار دریافت',
                    'confirmed-by-vendor'      => 'تأییدشده توسط تأمین‌کننده',
                    'deliver-to'               => 'تحویل به',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'محصولات',

                'repeater' => [
                    'products' => [
                        'title'            => 'محصولات',
                        'add-product-line' => 'افزودن محصول',

                        'fields' => [
                            'product'             => 'محصول',
                            'expected-arrival'    => 'تاریخ مورد انتظار دریافت',
                            'quantity'            => 'تعداد',
                            'received'            => 'دریافت‌شده',
                            'billed'              => 'صورت‌حساب‌شده',
                            'unit'                => 'واحد',
                            'packaging-qty'       => 'تعداد بسته‌بندی',
                            'packaging'           => 'بسته‌بندی',
                            'taxes'               => 'مالیات',
                            'discount-percentage' => 'تخفیف (%)',
                            'unit-price'          => 'قیمت واحد',
                            'amount'              => 'مبلغ',
                        ],

                        'notifications' => [
                            'quantity-below-received' => [
                                'title' => 'کاهش تعداد ممکن نیست',
                                'body'  => 'نمی‌توانید تعداد را به کمتر از تعداد دریافت‌شده (:qty) کاهش دهید.',
                            ],

                            'blanket-order-qty-limit' => [
                                'title' => 'تعداد از سقف سفارش کلی بیشتر است',
                                'body'  => 'تعداد محصول (:product_qty) از تعداد در دسترس (:available_qty) در سفارش کلی بیشتر است.',
                            ],
                        ],

                        'columns' => [
                            'product'             => 'محصول',
                            'expected-arrival'    => 'تاریخ مورد انتظار دریافت',
                            'quantity'            => 'تعداد',
                            'received'            => 'دریافت‌شده',
                            'billed'              => 'صورت‌حساب‌شده',
                            'unit'                => 'واحد',
                            'packaging-qty'       => 'تعداد بسته‌بندی',
                            'packaging'           => 'بسته‌بندی',
                            'taxes'               => 'مالیات',
                            'discount-percentage' => 'تخفیف (%)',
                            'unit-price'          => 'قیمت واحد',
                            'amount'              => 'مبلغ',
                        ],

                        'delete-action' => [
                            'error' => [
                                'title' => 'حذف محصول ممکن نیست',
                                'body'  => 'محصولات را نمی‌توان از سفارش خرید تأییدشده حذف کرد.',
                            ],
                        ],

                        'actions' => [
                            'open-product' => [
                                'tooltip' => 'باز کردن محصول',
                            ],
                        ],
                    ],

                    'section' => [
                        'title' => 'افزودن بخش',

                        'fields' => [],
                    ],

                    'note' => [
                        'title' => 'افزودن یادداشت',

                        'fields' => [],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'اطلاعات تکمیلی',

                'fields' => [
                    'buyer'             => 'مسئول خرید',
                    'company'           => 'شرکت',
                    'source-document'   => 'سند مبدأ',
                    'incoterm'          => 'اینکوترمز',
                    'incoterm-tooltip'  => 'اصطلاحات بازرگانی بین‌المللی (اینکوترمز) مجموعه‌ای از شرایط تجاری استاندارد هستند که در معاملات بین‌المللی برای تعیین مسئولیت‌های خریدار و فروشنده به کار می‌روند.',
                    'incoterm-location' => 'محل اینکوترمز',
                    'payment-term'      => 'شرایط پرداخت',
                    'fiscal-position'   => 'وضعیت مالیاتی',
                ],
            ],

            'terms' => [
                'title' => 'شرایط و ضوابط',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'         => 'مورد علاقه',
            'priority'         => 'اولویت',
            'vendor-reference' => 'مرجع تأمین‌کننده',
            'reference'        => 'مرجع',
            'vendor'           => 'تأمین‌کننده',
            'buyer'            => 'مسئول خرید',
            'company'          => 'شرکت',
            'order-deadline'   => 'مهلت سفارش',
            'source-document'  => 'سند مبدأ',
            'untaxed-amount'   => 'مبلغ بدون مالیات',
            'total-amount'     => 'مبلغ کل',
            'status'           => 'وضعیت',
            'billing-status'   => 'وضعیت صورت‌حساب',
            'receipt-status'   => 'وضعیت دریافت',
            'currency'         => 'ارز',
        ],

        'groups' => [
            'vendor'     => 'تأمین‌کننده',
            'buyer'      => 'مسئول خرید',
            'state'      => 'وضعیت',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'status'           => 'وضعیت',
            'vendor-reference' => 'مرجع تأمین‌کننده',
            'reference'        => 'مرجع',
            'untaxed-amount'   => 'مبلغ بدون مالیات',
            'total-amount'     => 'مبلغ کل',
            'order-deadline'   => 'مهلت سفارش',
            'vendor'           => 'تأمین‌کننده',
            'buyer'            => 'مسئول خرید',
            'company'          => 'شرکت',
            'payment-term'     => 'شرایط پرداخت',
            'incoterm'         => 'اینکوترمز',
            'status'           => 'وضعیت',
            'created-at'       => 'تاریخ ایجاد',
            'updated-at'       => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'سفارش حذف شد',
                        'body'  => 'سفارش با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف سفارش ممکن نیست',
                        'body'  => 'سفارش قابل حذف نیست، زیرا در حال حاضر در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'سفارش‌ها حذف شدند',
                        'body'  => 'سفارش‌ها با موفقیت حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف سفارش‌ها ممکن نیست',
                        'body'  => 'سفارش‌ها قابل حذف نیستند، زیرا در حال حاضر در حال استفاده هستند.',
                    ],
                ],
            ],
        ],
    ],

    'summary' => [
        'tax' => 'مالیات',
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'entries' => [
                    'purchase-order'           => 'سفارش خرید',
                    'vendor'                   => 'تأمین‌کننده',
                    'vendor-reference'         => 'مرجع تأمین‌کننده',
                    'vendor-reference-tooltip' => 'شماره مرجع سفارش فروش یا پیشنهاد قیمتی که تأمین‌کننده ارائه کرده است. از آن برای تطبیق هنگام دریافت محصولات استفاده می‌شود، زیرا این مرجع معمولاً در حواله تحویل تأمین‌کننده درج می‌شود.',
                    'agreement'                => 'قرارداد',
                    'currency'                 => 'ارز',
                    'confirmation-date'        => 'تاریخ تأیید',
                    'order-deadline'           => 'مهلت سفارش',
                    'expected-arrival'         => 'تاریخ مورد انتظار دریافت',
                    'confirmed-by-vendor'      => 'تأییدشده توسط تأمین‌کننده',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'محصولات',

                'repeater' => [
                    'products' => [
                        'title'            => 'محصولات',
                        'add-product-line' => 'افزودن محصول',

                        'entries' => [
                            'product'             => 'محصول',
                            'expected-arrival'    => 'تاریخ مورد انتظار دریافت',
                            'quantity'            => 'تعداد',
                            'received'            => 'دریافت‌شده',
                            'billed'              => 'صورت‌حساب‌شده',
                            'unit'                => 'واحد',
                            'packaging-qty'       => 'تعداد بسته‌بندی',
                            'packaging'           => 'بسته‌بندی',
                            'taxes'               => 'مالیات',
                            'discount-percentage' => 'تخفیف (%)',
                            'unit-price'          => 'قیمت واحد',
                            'amount'              => 'مبلغ',
                        ],
                    ],

                    'section' => [
                        'title' => 'افزودن بخش',
                    ],

                    'note' => [
                        'title' => 'افزودن یادداشت',
                    ],
                ],
            ],

            'additional' => [
                'title' => 'اطلاعات تکمیلی',

                'entries' => [
                    'buyer'             => 'مسئول خرید',
                    'company'           => 'شرکت',
                    'source-document'   => 'سند مبدأ',
                    'incoterm'          => 'اینکوترمز',
                    'incoterm-tooltip'  => 'اصطلاحات بازرگانی بین‌المللی (اینکوترمز) مجموعه‌ای از شرایط تجاری استاندارد هستند که در معاملات بین‌المللی برای تعیین مسئولیت‌های خریدار و فروشنده به کار می‌روند.',
                    'incoterm-location' => 'محل اینکوترمز',
                    'payment-term'      => 'شرایط پرداخت',
                    'fiscal-position'   => 'وضعیت مالیاتی',
                ],
            ],

            'terms' => [
                'title' => 'شرایط و ضوابط',
            ],
        ],
    ],
];
