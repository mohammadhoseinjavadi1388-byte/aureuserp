<?php

return [
    'navigation' => [
        'title' => 'سری‌های ساخت / شماره‌های سریال',
        'group' => 'انبارداری',
    ],

    'global-search' => [
        'ref'     => 'مرجع',
        'product' => 'محصول',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'name'                   => 'نام',
                    'name-placeholder'       => 'مثلاً LOT/0001/20121',
                    'product'                => 'محصول',
                    'product-hint-tooltip'   => 'محصول مرتبط با این سری ساخت/شماره سریال. اگر قبلاً جابه‌جا شده باشد، قابل تغییر نیست.',
                    'company'                => 'شرکت',
                    'reference'              => 'مرجع',
                    'reference-hint-tooltip' => 'شماره مرجع داخلی، در صورتی که با سری ساخت/شماره سریال تولیدکننده متفاوت باشد.',
                    'description'            => 'توضیحات',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'نام',
            'product'      => 'محصول',
            'on-hand-qty'  => 'موجودی در دسترس',
            'reference'    => 'مرجع داخلی',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'product'        => 'محصول',
            'location'       => 'مکان انبار',
            'created-at'     => 'تاریخ ایجاد',
        ],

        'filters' => [
            'product'  => 'محصول',
            'location' => 'مکان انبار',
            'creator'  => 'ایجادکننده',
            'company'  => 'شرکت',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'سری ساخت حذف شد',
                        'body'  => 'سری ساخت با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف سری ساخت ممکن نیست',
                        'body'  => 'سری ساخت قابل حذف نیست، زیرا هم‌اکنون در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'چاپ بارکد',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'سری‌های ساخت حذف شدند',
                        'body'  => 'سری‌های ساخت با موفقیت حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف سری‌های ساخت ممکن نیست',
                        'body'  => 'سری‌های ساخت قابل حذف نیستند، زیرا هم‌اکنون در حال استفاده هستند.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'جزئیات سری ساخت/شماره سریال',

                'entries' => [
                    'name'        => 'نام سری ساخت',
                    'product'     => 'محصول',
                    'reference'   => 'مرجع',
                    'description' => 'توضیحات',
                    'on-hand-qty' => 'موجودی در دسترس',
                    'company'     => 'شرکت',
                    'created-at'  => 'تاریخ ایجاد',
                    'updated-at'  => 'آخرین به‌روزرسانی',
                ],
            ],

            'record-information' => [
                'title' => 'اطلاعات رکورد',

                'entries' => [
                    'created-by'   => 'ایجادکننده',
                    'created-at'   => 'تاریخ ایجاد',
                    'last-updated' => 'آخرین به‌روزرسانی',
                ],
            ],
        ],
    ],
];
