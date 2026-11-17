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
                    'customer-invoice' => 'برگشت از فروش مشتری',
                    'customer'         => 'مشتری',
                    'invoice-date'     => 'تاریخ فاکتور',
                    'due-date'         => 'تاریخ سررسید',
                    'payment-term'     => 'شرایط پرداخت',
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
                            'incoterm'          => 'اینکوترمز',
                            'incoterm-location' => 'محل اینکوترمز',
                            'payment-method'    => 'روش پرداخت',
                            'auto-post'         => 'ثبت خودکار',
                            'checked'           => 'بررسی‌شده',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => 'اطلاعات تکمیلی',
                        'fields' => [
                            'company'  => 'شرکت',
                            'currency' => 'ارز',
                        ],
                    ],

                    'marketing' => [
                        'title'  => 'بازاریابی',
                        'fields' => [
                            'campaign' => 'کمپین',
                            'medium'   => 'رسانه',
                            'source'   => 'منبع',
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
                    'customer-invoice' => 'برگشت از فروش مشتری',
                    'customer'         => 'مشتری',
                    'invoice-date'     => 'تاریخ فاکتور',
                    'due-date'         => 'تاریخ سررسید',
                    'payment-term'     => 'شرایط پرداخت',
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

                        'fieldset' => [
                            'incoterm'          => 'اینکوترمز',
                            'incoterm-location' => 'محل اینکوترمز',
                            'payment-method'    => 'روش پرداخت',
                            'auto-post'         => 'ثبت خودکار',
                            'checked'           => 'بررسی‌شده',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => 'اطلاعات تکمیلی',
                        'entries' => [
                            'company'  => 'شرکت',
                            'currency' => 'ارز',
                        ],
                    ],

                    'marketing' => [
                        'title'   => 'بازاریابی',
                        'entries' => [
                            'campaign' => 'کمپین',
                            'medium'   => 'رسانه',
                            'source'   => 'منبع',
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
