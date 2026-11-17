<?php

return [
    'navigation' => [
        'title' => 'بسته‌ها',
        'group' => 'انبارداری',
    ],

    'global-search' => [
        'name'         => 'نام',
        'package-type' => 'نوع بسته',
        'location'     => 'مکان انبار',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'name'             => 'نام',
                    'name-placeholder' => 'مثلاً PACK007',
                    'package-type'     => 'نوع بسته',
                    'pack-date'        => 'تاریخ بسته‌بندی',
                    'location'         => 'مکان انبار',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'نام',
            'package-type' => 'نوع بسته',
            'location'     => 'مکان انبار',
            'company'      => 'شرکت',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'package-type'   => 'نوع بسته',
            'location'       => 'مکان انبار',
            'created-at'     => 'تاریخ ایجاد',
        ],

        'filters' => [
            'package-type' => 'نوع بسته',
            'location'     => 'مکان انبار',
            'creator'      => 'ایجادکننده',
            'company'      => 'شرکت',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'بسته حذف شد',
                        'body'  => 'بسته با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف بسته ممکن نیست',
                        'body'  => 'بسته قابل حذف نیست، زیرا هم‌اکنون در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print-without-content' => [
                'label' => 'چاپ بارکد',
            ],

            'print-with-content' => [
                'label' => 'چاپ بارکد همراه با محتوا',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'بسته‌ها حذف شدند',
                        'body'  => 'بسته‌ها با موفقیت حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف بسته‌ها ممکن نیست',
                        'body'  => 'بسته‌ها قابل حذف نیستند، زیرا هم‌اکنون در حال استفاده هستند.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'جزئیات بسته',

                'entries' => [
                    'name'         => 'نام بسته',
                    'package-type' => 'نوع بسته',
                    'pack-date'    => 'تاریخ بسته‌بندی',
                    'location'     => 'مکان انبار',
                    'company'      => 'شرکت',
                    'created-at'   => 'تاریخ ایجاد',
                    'updated-at'   => 'آخرین به‌روزرسانی',
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
