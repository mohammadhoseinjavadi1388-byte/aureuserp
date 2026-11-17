<?php

return [

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'عمومی',
                'fields' => [
                    'order'      => 'سفارش پایانه فروش',
                    'ordered-at' => 'تاریخ',
                    'customer'   => 'مشتری',
                    'cashier'    => 'صندوق‌دار',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title'   => 'محصولات',
                'columns' => [
                    'product'            => 'محصول',
                    'lot'                => 'سری ساخت/شماره سریال',
                    'quantity'           => 'تعداد',
                    'uom'                => 'واحد',
                    'unit-price'         => 'قیمت واحد',
                    'discount'           => 'تخفیف٪',
                    'taxes'              => 'مالیات',
                    'tax-excluded'       => 'بدون مالیات',
                    'tax-included'       => 'با مالیات',
                    'full-product-name'  => 'نام کامل محصول',
                    'customer-note'      => 'یادداشت مشتری',
                    'total-cost'         => 'بهای تمام‌شده کل',
                    'margin'             => 'حاشیه سود',
                    'margin-percent'     => 'حاشیه سود (٪)',
                    'refunded-quantity'  => 'تعداد مرجوعی',
                ],

                'actions' => [
                    'open-product' => 'باز کردن محصول',
                ],

                'summary' => [
                    'untaxed'  => 'مبلغ بدون مالیات',
                    'taxes'    => 'مالیات',
                    'rounding' => 'گرد کردن',
                    'total'    => 'جمع کل',
                    'paid'     => 'پرداخت‌شده',
                    'change'   => 'باقی پول',
                ],
            ],

            'payments' => [
                'title'  => 'پرداخت‌ها',
                'add'    => 'افزودن ردیف',
                'fields' => [
                    'paid-at'         => 'تاریخ',
                    'method'          => 'روش پرداخت',
                    'amount'          => 'مبلغ',
                    'card-type'       => 'شماره کارت (4 رقم آخر)',
                    'card-brand'      => 'نوع کارت',
                    'cardholder-name' => 'نام دارنده کارت',
                ],
            ],

            'extra-info' => [
                'title'  => 'اطلاعات تکمیلی',
                'fields' => [
                    'receipt-number'  => 'شماره رسید',
                    'tracking-number' => 'شماره پیگیری',
                    'email'           => 'ایمیل',
                    'mobile'          => 'موبایل',
                ],
            ],

            'notes' => [
                'title' => 'یادداشت‌های عمومی',
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'عمومی',
                'entries' => [
                    'order'         => 'سفارش پایانه فروش',
                    'customer'      => 'مشتری',
                    'session'       => 'نوبت کاری صندوق',
                    'ordered-at'    => 'تاریخ سفارش',
                    'point-of-sale' => 'پایانه فروش',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title'   => 'ردیف سفارش',
                'entries' => [
                    'product'    => 'محصول',
                    'quantity'   => 'تعداد',
                    'unit-price' => 'قیمت واحد',
                    'taxes'      => 'مالیات',
                    'discount'   => 'تخفیف (٪)',
                    'amount'     => 'مبلغ',
                ],
                'totals' => [
                    'untaxed' => 'مبلغ بدون مالیات',
                    'taxes'   => 'مالیات',
                    'total'   => 'جمع کل',
                    'margin'  => 'حاشیه سود',
                ],
            ],

            'payments' => [
                'title'   => 'پرداخت‌ها',
                'entries' => [
                    'method'  => 'روش پرداخت',
                    'amount'  => 'مبلغ',
                    'paid-at' => 'تاریخ پرداخت',
                ],
            ],

            'extra-info' => [
                'title'   => 'اطلاعات تکمیلی',
                'entries' => [
                    'receipt-number'  => 'شماره رسید',
                    'tracking-number' => 'شماره پیگیری',
                    'email'           => 'ایمیل',
                    'mobile'          => 'موبایل',
                ],
            ],

            'other-information' => [
                'title'   => 'سایر اطلاعات',
                'entries' => [
                    'reference'      => 'مرجع',
                    'receipt-number' => 'شماره رسید',
                    'operation'      => 'عملیات',
                    'cashier'        => 'صندوق‌دار',
                    'paid'           => 'پرداخت‌شده',
                    'change'         => 'باقی پول',
                ],
            ],
        ],
    ],
    'navigation' => [
        'title' => 'سفارش‌ها',
        'group' => 'پایانه فروش',
    ],

    'table' => [
        'columns' => [
            'name'                 => 'شماره سفارش',
            'reference'            => 'شماره رسید',
            'session'              => 'نوبت کاری صندوق',
            'config'               => 'پایانه فروش',
            'partner'              => 'مشتری',
            'ordered-at'           => 'تاریخ',
            'amount-total'         => 'جمع کل',
            'amount-paid'          => 'پرداخت‌شده',
            'user'                 => 'صندوق‌دار',
            'has-failed-operation' => 'عملیات ناموفق',
            'is-invoiced'          => 'فاکتورشده',
            'is-edited'            => 'ویرایش‌شده',
            'tracking-number'      => 'شماره پیگیری',
            'state'                => 'وضعیت',
        ],

        'groups' => [
            'session'    => 'نوبت کاری صندوق',
            'config'     => 'پایانه فروش',
            'state'      => 'وضعیت',
            'ordered-at' => 'تاریخ سفارش',
        ],

        'filters' => [
            'state'   => 'وضعیت',
            'session' => 'نوبت کاری صندوق',
            'config'  => 'پایانه فروش',
        ],
    ],
];
