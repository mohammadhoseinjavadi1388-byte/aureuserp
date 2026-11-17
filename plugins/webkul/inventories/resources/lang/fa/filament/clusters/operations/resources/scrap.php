<?php

return [
    'navigation' => [
        'title' => 'ضایعات',
        'group' => 'تعدیلات',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'product'              => 'محصول',
                    'package'              => 'بسته',
                    'quantity'             => 'تعداد',
                    'unit'                 => 'واحد اندازه‌گیری',
                    'lot'                  => 'سری ساخت/سریال',
                    'tags'                 => 'برچسب‌ها',
                    'name'                 => 'نام',
                    'color'                => 'رنگ',
                    'owner'                => 'مالک',
                    'source-location'      => 'مکان مبدأ',
                    'destination-location' => 'مکان ضایعات',
                    'source-document'      => 'سند مبدأ',
                    'company'              => 'شرکت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'date'            => 'تاریخ',
            'reference'       => 'مرجع',
            'product'         => 'محصول',
            'package'         => 'بسته',
            'quantity'        => 'تعداد',
            'uom'             => 'واحد اندازه‌گیری',
            'source-location' => 'مکان مبدأ',
            'scrap-location'  => 'مکان ضایعات',
            'unit'            => 'واحد اندازه‌گیری',
            'lot'             => 'سری ساخت/سریال',
            'tags'            => 'برچسب‌ها',
            'state'           => 'وضعیت',
        ],

        'groups' => [
            'product'              => 'محصول',
            'source-location'      => 'مکان مبدأ',
            'destination-location' => 'مکان ضایعات',
        ],

        'filters' => [
            'source-location'      => 'مکان مبدأ',
            'destination-location' => 'مکان ضایعات',
            'product'              => 'محصول',
            'state'                => 'وضعیت',
            'product-category'     => 'دسته‌بندی محصول',
            'uom'                  => 'واحد اندازه‌گیری',
            'lot'                  => 'سری ساخت/سریال',
            'package'              => 'بسته',
            'tags'                 => 'برچسب‌ها',
            'company'              => 'شرکت',
            'quantity'             => 'تعداد',
            'creator'              => 'ایجادکننده',
            'closed-at'            => 'تاریخ بسته شدن',
            'created-at'           => 'تاریخ ایجاد',
            'updated-at'           => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'ضایعات حذف شد',
                        'body'  => 'ضایعات با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف ضایعات ممکن نیست',
                        'body'  => 'ضایعات قابل حذف نیست، زیرا هم‌اکنون در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'ضایعات حذف شد',
                        'body'  => 'ضایعات انتخاب‌شده با موفقیت حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف ضایعات ممکن نیست',
                        'body'  => 'ضایعات قابل حذف نیست، زیرا هم‌اکنون در حال استفاده است.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'جزئیات ضایعات',

                'entries' => [
                    'product'              => 'محصول',
                    'quantity'             => 'تعداد',
                    'lot'                  => 'سری ساخت',
                    'tags'                 => 'برچسب‌ها',
                    'package'              => 'بسته',
                    'owner'                => 'مالک',
                    'source-location'      => 'مکان مبدأ',
                    'destination-location' => 'مکان ضایعات',
                    'source-document'      => 'سند مبدأ',
                    'company'              => 'شرکت',
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
