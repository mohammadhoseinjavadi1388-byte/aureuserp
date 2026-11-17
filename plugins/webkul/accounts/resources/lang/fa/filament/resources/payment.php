<?php

return [
    'title' => 'پرداخت',

    'navigation' => [
        'title' => 'پرداخت‌ها',
        'group' => 'فاکتورها',
    ],

    'global-search' => [
        'partner' => 'طرف حساب',
        'amount'  => 'مبلغ',
        'date'    => 'تاریخ',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'payment-type'          => 'نوع پرداخت',
                'memo'                  => 'شرح',
                'date'                  => 'تاریخ',
                'amount'                => 'مبلغ',
                'currency'              => 'ارز',
                'payment-method'        => 'روش پرداخت',
                'customer'              => 'مشتری',
                'vendor'                => 'تأمین‌کننده',
                'journal'               => 'دفتر روزنامه',
                'customer-bank-account' => 'حساب بانکی مشتری',
                'vendor-bank-account'   => 'حساب بانکی تأمین‌کننده',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'            => 'نام',
            'date'            => 'تاریخ',
            'journal'         => 'دفتر روزنامه',
            'payment-method'  => 'روش پرداخت',
            'partner'         => 'طرف حساب',
            'amount-currency' => 'مبلغ (ارزی)',
            'amount'          => 'مبلغ',
            'state'           => 'وضعیت',
            'company'         => 'شرکت',
            'currency'        => 'ارز',
            'created-by'      => 'ایجادکننده',
        ],

        'groups' => [
            'name'                             => 'نام',
            'company'                          => 'شرکت',
            'journal'                          => 'دفتر روزنامه',
            'partner'                          => 'طرف حساب',
            'payment-method-line'              => 'سطر روش پرداخت',
            'payment-method'                   => 'روش پرداخت',
            'partner-bank-account'             => 'حساب بانکی طرف حساب',
            'created-at'                       => 'تاریخ ایجاد',
            'updated-at'                       => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'company'                          => 'شرکت',
            'journal'                          => 'دفتر روزنامه',
            'customer-bank-account'            => 'حساب بانکی مشتری',
            'payment-method'                   => 'روش پرداخت',
            'currency'                         => 'ارز',
            'partner'                          => 'طرف حساب',
            'payment-method-line'              => 'سطر روش پرداخت',
            'created-at'                       => 'تاریخ ایجاد',
            'updated-at'                       => 'تاریخ به‌روزرسانی',
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
        'sections' => [
            'payment-information' => [
                'title'   => 'اطلاعات پرداخت',
                'entries' => [
                    'state'                 => 'وضعیت',
                    'vendor'                => 'تأمین‌کننده',
                    'customer'              => 'مشتری',
                    'payment-type'          => 'نوع پرداخت',
                    'journal'               => 'دفتر روزنامه',
                    'customer-bank-account' => 'حساب بانکی مشتری',
                    'vendor-bank-account'   => 'حساب بانکی تأمین‌کننده',
                    'amount'                => 'مبلغ',
                    'payment-method'        => 'روش پرداخت',
                    'date'                  => 'تاریخ',
                    'memo'                  => 'شرح',
                ],
            ],
        ],
    ],

];
