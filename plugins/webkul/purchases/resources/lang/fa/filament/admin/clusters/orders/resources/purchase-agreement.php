<?php

return [
    'navigation' => [
        'title' => 'قراردادهای خرید',
        'group' => 'خرید',
    ],

    'global-search' => [
        'vendor' => 'تأمین‌کننده',
        'type'   => 'نوع',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'vendor'                => 'تأمین‌کننده',
                    'valid-from'            => 'معتبر از',
                    'valid-to'              => 'معتبر تا',
                    'buyer'                 => 'مسئول خرید',
                    'reference'             => 'مرجع',
                    'reference-placeholder' => 'مثلاً PO/123',
                    'agreement-type'        => 'نوع قرارداد',
                    'company'               => 'شرکت',
                    'currency'              => 'ارز',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'محصولات',

                'columns' => [
                    'product'    => 'محصول',
                    'quantity'   => 'تعداد',
                    'ordered'    => 'سفارش‌شده',
                    'uom'        => 'واحد اندازه‌گیری',
                    'unit-price' => 'قیمت واحد',
                ],

                'fields' => [
                    'product'    => 'محصول',
                    'quantity'   => 'تعداد',
                    'ordered'    => 'سفارش‌شده',
                    'uom'        => 'واحد اندازه‌گیری',
                    'unit-price' => 'قیمت واحد',
                ],
            ],

            'additional' => [
                'title' => 'اطلاعات تکمیلی',
            ],

            'terms' => [
                'title' => 'شرایط و ضوابط',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'agreement'      => 'قرارداد',
            'vendor'         => 'تأمین‌کننده',
            'agreement-type' => 'نوع قرارداد',
            'buyer'          => 'مسئول خرید',
            'company'        => 'شرکت',
            'valid-from'     => 'معتبر از',
            'valid-to'       => 'معتبر تا',
            'reference'      => 'مرجع',
            'status'         => 'وضعیت',
        ],

        'groups' => [
            'agreement-type' => 'نوع قرارداد',
            'vendor'         => 'تأمین‌کننده',
            'state'          => 'وضعیت',
            'created-at'     => 'تاریخ ایجاد',
            'updated-at'     => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'agreement'      => 'قرارداد',
            'vendor'         => 'تأمین‌کننده',
            'agreement-type' => 'نوع قرارداد',
            'buyer'          => 'مسئول خرید',
            'company'        => 'شرکت',
            'valid-from'     => 'معتبر از',
            'valid-to'       => 'معتبر تا',
            'reference'      => 'مرجع',
            'status'         => 'وضعیت',
            'created-at'     => 'تاریخ ایجاد',
            'updated-at'     => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'قرارداد خرید حذف شد',
                    'body'  => 'قرارداد خرید با موفقیت حذف شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'قرارداد خرید بازیابی شد',
                    'body'  => 'قرارداد خرید با موفقیت بازیابی شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'قرارداد خرید برای همیشه حذف شد',
                        'body'  => 'قرارداد خرید با موفقیت برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف قرارداد خرید ممکن نیست',
                        'body'  => 'قرارداد خرید قابل حذف نیست، زیرا در حال حاضر در حال استفاده است.',
                    ],

                    'warning' => [
                        'title' => 'حذف قرارداد خرید ممکن نیست',
                        'body'  => 'فقط قراردادهای خرید در وضعیت «پیش‌نویس» یا «لغوشده» قابل حذف هستند.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'قراردادهای خرید حذف شدند',
                    'body'  => 'قراردادهای خرید با موفقیت حذف شدند.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'قراردادهای خرید بازیابی شدند',
                    'body'  => 'قراردادهای خرید با موفقیت بازیابی شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'قراردادهای خرید برای همیشه حذف شدند',
                        'body'  => 'قراردادهای خرید با موفقیت برای همیشه حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف قراردادهای خرید ممکن نیست',
                        'body'  => 'قراردادهای خرید قابل حذف نیستند، زیرا در حال حاضر در حال استفاده هستند.',
                    ],

                    'warning' => [
                        'title' => 'حذف قرارداد خرید ممکن نیست',
                        'body'  => 'فقط قراردادهای خرید در وضعیت «پیش‌نویس» یا «لغوشده» قابل حذف هستند.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'entries' => [
                    'vendor'                => 'تأمین‌کننده',
                    'valid-from'            => 'معتبر از',
                    'valid-to'              => 'معتبر تا',
                    'buyer'                 => 'مسئول خرید',
                    'reference'             => 'مرجع',
                    'reference-placeholder' => 'مثلاً PO/123',
                    'agreement-type'        => 'نوع قرارداد',
                    'company'               => 'شرکت',
                    'currency'              => 'ارز',
                ],
            ],

            'metadata' => [
                'title' => 'فراداده',

                'entries' => [
                    'created-at' => 'تاریخ ایجاد',
                    'created-by' => 'ایجادکننده',
                    'updated-at' => 'تاریخ به‌روزرسانی',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'محصولات',

                'entries' => [
                    'product'    => 'محصول',
                    'quantity'   => 'تعداد',
                    'ordered'    => 'سفارش‌شده',
                    'uom'        => 'واحد اندازه‌گیری',
                    'unit-price' => 'قیمت واحد',
                ],
            ],

            'additional' => [
                'title' => 'اطلاعات تکمیلی',
            ],

            'terms' => [
                'title' => 'شرایط و ضوابط',
            ],
        ],
    ],
];
