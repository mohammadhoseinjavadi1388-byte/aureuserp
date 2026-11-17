<?php

return [
    'global-search' => [
        'reference' => 'مرجع',
        'barcode'   => 'بارکد',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'name'             => 'نام',
                    'name-placeholder' => 'مثلاً تی‌شرت',
                    'description'      => 'توضیحات',
                    'tags'             => 'برچسب‌ها',
                ],
            ],

            'images' => [
                'title' => 'تصاویر',
            ],

            'inventory' => [
                'title' => 'انبارداری',

                'fields' => [],

                'fieldsets' => [
                    'logistics' => [
                        'title' => 'لجستیک',

                        'fields' => [
                            'weight' => 'وزن',
                            'volume' => 'حجم',
                        ],
                    ],
                ],
            ],

            'settings' => [
                'title' => 'تنظیمات',

                'fields' => [
                    'type'                => 'نوع',
                    'reference'           => 'مرجع',
                    'barcode'             => 'بارکد',
                    'category'            => 'دسته‌بندی',
                    'company'             => 'شرکت',
                    'company-placeholder' => 'همه شرکت‌ها',
                ],
            ],

            'pricing' => [
                'title' => 'قیمت‌گذاری',

                'fields' => [
                    'price'           => 'قیمت',
                    'cost'            => 'بهای تمام‌شده',
                    'uom-placeholder' => 'واحد اندازه‌گیری',
                ],
            ],

            'additional' => [
                'title' => 'تکمیلی',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'            => 'مورد علاقه',
            'name'                => 'نام',
            'variants'            => 'تنوع‌های محصول',
            'images'              => 'تصاویر',
            'type'                => 'نوع',
            'reference'           => 'مرجع',
            'responsible'         => 'مسئول',
            'barcode'             => 'بارکد',
            'category'            => 'دسته‌بندی',
            'company'             => 'شرکت',
            'company-placeholder' => 'همه شرکت‌ها',
            'price'               => 'قیمت',
            'cost'                => 'بهای تمام‌شده',
            'on-hand'             => 'موجودی در دسترس',
            'tags'                => 'برچسب‌ها',
            'deleted-at'          => 'تاریخ حذف',
            'created-at'          => 'تاریخ ایجاد',
            'updated-at'          => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'type'       => 'نوع',
            'category'   => 'دسته‌بندی',
            'created-at' => 'تاریخ ایجاد',
        ],

        'filters' => [
            'name'        => 'نام',
            'type'        => 'نوع',
            'reference'   => 'مرجع',
            'barcode'     => 'بارکد',
            'category'    => 'دسته‌بندی',
            'company'     => 'شرکت',
            'price'       => 'قیمت',
            'cost'        => 'بهای تمام‌شده',
            'is-favorite' => 'مورد علاقه است',
            'weight'      => 'وزن',
            'volume'      => 'حجم',
            'tags'        => 'برچسب‌ها',
            'responsible' => 'مسئول',
            'created-at'  => 'تاریخ ایجاد',
            'updated-at'  => 'تاریخ به‌روزرسانی',
            'creator'     => 'ایجادکننده',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'محصول بازیابی شد',
                    'body'  => 'محصول با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'محصول حذف شد',
                    'body'  => 'محصول با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'محصول حذف دائمی شد',
                        'body'  => 'محصول با موفقیت حذف دائمی شد.',
                    ],

                    'error' => [
                        'title' => 'حذف محصول ممکن نشد',
                        'body'  => 'این محصول قابل حذف نیست، زیرا در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'چاپ برچسب‌ها',

                'form' => [
                    'fields' => [
                        'quantity' => 'تعداد برچسب‌ها',
                        'format'   => 'قالب',

                        'format-options' => [
                            'dymo'       => 'Dymo',
                            '2x7_price'  => '2x7 با قیمت',
                            '4x7_price'  => '4x7 با قیمت',
                            '4x12'       => '4x12',
                            '4x12_price' => '4x12 با قیمت',
                        ],
                    ],
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'محصولات بازیابی شدند',
                    'body'  => 'محصولات با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'محصولات حذف شدند',
                    'body'  => 'محصولات با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'محصولات حذف دائمی شدند',
                        'body'  => 'محصولات با موفقیت حذف دائمی شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف محصولات ممکن نشد',
                        'body'  => 'این محصولات قابل حذف نیستند، زیرا در حال استفاده هستند.',
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
                    'name'             => 'نام',
                    'name-placeholder' => 'مثلاً تی‌شرت',
                    'description'      => 'توضیحات',
                    'tags'             => 'برچسب‌ها',
                ],
            ],

            'images' => [
                'title' => 'تصاویر',

                'entries' => [],
            ],

            'settings' => [
                'title' => 'تنظیمات',

                'entries' => [
                    'type'      => 'نوع',
                    'reference' => 'مرجع',
                    'barcode'   => 'بارکد',
                    'category'  => 'دسته‌بندی',
                    'company'   => 'شرکت',
                ],
            ],

            'pricing' => [
                'title' => 'قیمت‌گذاری',

                'entries' => [
                    'price' => 'قیمت',
                    'cost'  => 'بهای تمام‌شده',
                ],
            ],

            'inventory' => [
                'title' => 'انبارداری',

                'fieldsets' => [
                    'logistics' => [
                        'title' => 'لجستیک',

                        'entries' => [
                            'weight' => 'وزن',
                            'volume' => 'حجم',
                        ],
                    ],
                ],
            ],

            'record-information' => [
                'title' => 'اطلاعات رکورد',

                'entries' => [
                    'created-at' => 'تاریخ ایجاد',
                    'created-by' => 'ایجادکننده',
                    'updated-at' => 'تاریخ به‌روزرسانی',
                ],
            ],
        ],
    ],
];
