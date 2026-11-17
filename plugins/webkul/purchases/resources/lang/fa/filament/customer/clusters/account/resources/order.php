<?php

return [
    'table' => [
        'columns' => [
            'reference'         => 'مرجع',
            'total-amount'      => 'مبلغ کل',
            'confirmation-date' => 'تاریخ تأیید',
            'status'            => 'وضعیت',
        ],
    ],

    'products' => [
        'columns' => [
            'product'    => 'محصول',
            'quantity'   => 'تعداد',
            'unit-price' => 'قیمت واحد',
            'taxes'      => 'مالیات',
            'discount'   => 'تخفیف %',
            'amount'     => 'مبلغ',
        ],
    ],

    'infolist' => [
        'settings' => [
            'entries' => [
                'buyer' => 'کارشناس خرید',
            ],

            'actions' => [
                'accept' => [
                    'label' => 'پذیرش',

                    'notification' => [
                        'title' => 'استعلام پذیرفته شد',
                        'body'  => 'دریافت درخواست استعلام قیمت با موفقیت تأیید شد.',
                    ],

                    'message' => [
                        'body' => 'تأمین‌کننده دریافت درخواست استعلام قیمت را تأیید کرد.',
                    ],
                ],

                'decline' => [
                    'label' => 'رد',

                    'notification' => [
                        'title' => 'استعلام رد شد',
                        'body'  => 'درخواست استعلام قیمت با موفقیت رد شد.',
                    ],

                    'message' => [
                        'body' => 'تأمین‌کننده درخواست استعلام قیمت را رد کرد.',
                    ],
                ],

                'print' => [
                    'label' => 'دانلود/چاپ',
                ],
            ],
        ],

        'general' => [
            'entries' => [
                'purchase-order'        => 'سفارش خرید #:id',
                'quotation'             => 'درخواست استعلام قیمت #:id',
                'order-date'            => 'تاریخ سفارش',
                'from'                  => 'از',
                'confirmation-date'     => 'تاریخ تأیید',
                'receipt-date'          => 'تاریخ رسید کالا',
                'products'              => 'محصولات',
                'untaxed-amount'        => 'مبلغ بدون مالیات',
                'tax-amount'            => 'مبلغ مالیات',
                'total'                 => 'جمع کل',
                'communication-history' => 'تاریخچه مکاتبات',
            ],
        ],
    ],
];
