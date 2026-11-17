<?php

return [
    'title' => 'فاکتور',

    'navigation' => [
        'title' => 'فاکتورها',
        'group' => 'فاکتورها',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'عمومی',
                'fields' => [
                    'vendor-credit-note' => 'اعلامیه بستانکار تأمین‌کننده',
                    'vendor'             => 'تأمین‌کننده',
                    'bill-date'          => 'تاریخ صورت‌حساب خرید',
                    'bill-reference'     => 'مرجع صورت‌حساب خرید',
                    'accounting-date'    => 'تاریخ حسابداری',
                    'payment-reference'  => 'مرجع پرداخت',
                    'recipient-bank'     => 'بانک گیرنده',
                    'due-date'           => 'تاریخ سررسید',
                    'payment-term'       => 'شرایط پرداخت',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'اقلام فاکتور',

                'repeater' => [
                    'products' => [
                        'title'       => 'محصولات',
                        'add-product' => 'افزودن محصول',

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
                            'incoterm'          => 'اینکوترمز',
                            'incoterm-location' => 'محل اینکوترمز',
                        ],
                    ],

                    'secured' => [
                        'title'  => 'ایمن‌سازی',
                        'fields' => [
                            'payment-method' => 'روش پرداخت',
                            'auto-post'      => 'ثبت خودکار',
                            'checked'        => 'بررسی‌شده',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => 'اطلاعات تکمیلی',
                        'fields' => [
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
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'اقلام فاکتور',

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
                            'incoterm'          => 'اینکوترمز',
                            'incoterm-location' => 'محل اینکوترمز',
                        ],
                    ],

                    'secured' => [
                        'title'   => 'ایمن‌سازی',
                        'entries' => [
                            'payment-method' => 'روش پرداخت',
                            'auto-post'      => 'ثبت خودکار',
                            'checked'        => 'بررسی‌شده',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => 'اطلاعات تکمیلی',
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
