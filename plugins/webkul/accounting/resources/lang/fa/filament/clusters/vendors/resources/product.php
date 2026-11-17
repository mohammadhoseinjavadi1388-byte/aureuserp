<?php

return [
    'navigation' => [
        'title' => 'محصولات',
        'group' => 'انبارداری',
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
                    'sales'            => 'فروش',
                    'purchase'         => 'خرید',
                ],
            ],

            'invoice-policy' => [
                'title'            => 'سیاست صدور فاکتور',
                'ordered-policy'   => 'می‌توانید پیش از تحویل کالا، برای آن فاکتور صادر کنید.',
                'delivered-policy' => 'صدور فاکتور پس از تحویل و بر اساس تعداد تحویل‌شده، نه تعداد سفارش‌شده.',
            ],

            'images' => [
                'title' => 'تصاویر',
            ],

            'settings' => [
                'title' => 'تنظیمات',

                'fields' => [
                    'type'      => 'نوع',
                    'reference' => 'مرجع',
                    'barcode'   => 'بارکد',
                    'category'  => 'دسته‌بندی',
                    'company'   => 'شرکت',
                ],
            ],

            'category-and-tags' => [
                'title' => 'دسته‌بندی و برچسب‌ها',

                'fields' => [
                    'category' => 'دسته‌بندی',
                    'tags'     => 'برچسب‌ها',
                ],
            ],

            'pricing' => [
                'title' => 'قیمت‌گذاری',

                'fields' => [
                    'price' => 'قیمت',
                    'cost'  => 'بهای تمام‌شده',
                ],
            ],

            'additional' => [
                'title' => 'تکمیلی',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'نام',
            'images'      => 'تصاویر',
            'type'        => 'نوع',
            'reference'   => 'مرجع',
            'responsible' => 'مسئول',
            'barcode'     => 'بارکد',
            'category'    => 'دسته‌بندی',
            'company'     => 'شرکت',
            'price'       => 'قیمت',
            'cost'        => 'بهای تمام‌شده',
            'tags'        => 'برچسب‌ها',
            'deleted-at'  => 'تاریخ حذف',
            'created-at'  => 'تاریخ ایجاد',
            'updated-at'  => 'تاریخ به‌روزرسانی',
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
            'is-favorite' => 'علاقه‌مندی',
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
                    'title' => 'محصول برای همیشه حذف شد',
                    'body'  => 'محصول با موفقیت برای همیشه حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
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
                    'title' => 'محصولات برای همیشه حذف شدند',
                    'body'  => 'محصولات با موفقیت برای همیشه حذف شدند.',
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

                'entries' => [],

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'رهگیری',

                        'entries' => [
                            'track-inventory' => 'رهگیری موجودی',
                            'track-by'        => 'رهگیری بر اساس',
                            'expiration-date' => 'تاریخ انقضا',
                        ],
                    ],

                    'operation' => [
                        'title' => 'عملیات',

                        'entries' => [
                            'routes' => 'مسیرها',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'لجستیک',

                        'entries' => [
                            'responsible' => 'مسئول',
                            'weight'      => 'وزن',
                            'volume'      => 'حجم',
                            'sale-delay'  => 'زمان تحویل به مشتری (روز)',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'ردیابی',

                        'entries' => [
                            'expiration-date'  => 'تاریخ انقضا (روز)',
                            'best-before-date' => 'تاریخ بهترین زمان مصرف (روز)',
                            'removal-date'     => 'تاریخ خروج از انبار (روز)',
                            'alert-date'       => 'تاریخ هشدار (روز)',
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
