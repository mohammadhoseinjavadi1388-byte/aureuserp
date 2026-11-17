<?php

return [
    'title' => 'الگوی پیش‌فاکتور',

    'navigation' => [
        'title'  => 'الگوی پیش‌فاکتور',
        'group'  => 'سفارش‌های فروش',
    ],

    'form' => [
        'tabs' => [
            'products' => [
                'title'  => 'محصولات',
                'fields' => [
                    'products'     => 'محصولات',
                    'name'         => 'نام',
                    'quantity'     => 'تعداد',
                ],
            ],

            'terms-and-conditions' => [
                'title'  => 'شرایط و ضوابط',
                'fields' => [
                    'note-placeholder' => 'شرایط و ضوابط پیش‌فاکتورها را اینجا بنویسید.',
                ],
            ],
        ],

        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'fields' => [
                    'name'               => 'نام',
                    'quotation-validity' => 'مدت اعتبار پیش‌فاکتور',
                    'sale-journal'       => 'دفتر روزنامه فروش',
                ],
            ],

            'signature-and-payment' => [
                'title' => 'امضا و پرداخت',

                'fields' => [
                    'online-signature'      => 'امضای آنلاین',
                    'online-payment'        => 'پرداخت آنلاین',
                    'prepayment-percentage' => 'درصد پیش‌پرداخت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'created-by'            => 'ایجادکننده',
            'company'               => 'شرکت',
            'name'                  => 'نام',
            'number-of-days'        => 'تعداد روز',
            'journal'               => 'دفتر روزنامه فروش',
            'signature-required'    => 'نیاز به امضا',
            'payment-required'      => 'نیاز به پرداخت',
            'prepayment-percentage' => 'درصد پیش‌پرداخت',
        ],
        'groups'  => [
            'company' => 'شرکت',
            'name'    => 'نام',
            'journal' => 'دفتر روزنامه',
        ],
        'filters' => [
            'created-by' => 'ایجادکننده',
            'company'    => 'شرکت',
            'name'       => 'نام',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],
        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'الگوی پیش‌فاکتور حذف شد',
                    'body'  => 'الگوی پیش‌فاکتور با موفقیت حذف شد.',
                ],
            ],

        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'الگوی پیش‌فاکتور حذف شد',
                    'body'  => 'الگوی پیش‌فاکتور با موفقیت حذف شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'products' => [
                'title' => 'محصولات',
            ],
            'terms-and-conditions' => [
                'title' => 'شرایط و ضوابط',
            ],
        ],
        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',
            ],
            'signature_and_payment' => [
                'title' => 'امضا و پرداخت',
            ],
        ],
        'entries' => [
            'product'               => 'محصول',
            'description'           => 'توضیحات',
            'quantity'              => 'تعداد',
            'unit-price'            => 'قیمت واحد',
            'section-name'          => 'نام بخش',
            'note-title'            => 'عنوان یادداشت',
            'name'                  => 'نام الگو',
            'quotation-validity'    => 'مدت اعتبار پیش‌فاکتور',
            'sale-journal'          => 'دفتر روزنامه فروش',
            'online-signature'      => 'امضای آنلاین',
            'online-payment'        => 'پرداخت آنلاین',
            'prepayment-percentage' => 'درصد پیش‌پرداخت',
        ],
    ],
];
