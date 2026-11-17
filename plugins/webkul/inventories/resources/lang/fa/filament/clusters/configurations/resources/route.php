<?php

return [
    'navigation' => [
        'title' => 'مسیرها',
        'group' => 'مدیریت انبار',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',

                'fields' => [
                    'route'             => 'مسیر',
                    'route-placeholder' => 'مثلاً دریافت دومرحله‌ای',
                    'company'           => 'شرکت',
                ],
            ],

            'applicable-on' => [
                'title'       => 'قابل اعمال بر',
                'description' => 'محل‌هایی را انتخاب کنید که این مسیر در آن‌ها قابل اعمال باشد.',

                'fields' => [
                    'products'                        => 'محصولات',
                    'products-hint-tooltip'           => 'در صورت انتخاب، این مسیر در محصول قابل انتخاب خواهد بود.',
                    'product-categories'              => 'دسته‌بندی‌های محصول',
                    'product-categories-hint-tooltip' => 'در صورت انتخاب، این مسیر در دسته‌بندی محصول قابل انتخاب خواهد بود.',
                    'warehouses'                      => 'انبارها',
                    'warehouses-hint-tooltip'         => 'وقتی انباری به این مسیر اختصاص داده شود، این مسیر به‌عنوان مسیر پیش‌فرض محصولاتی که از آن انبار عبور می‌کنند در نظر گرفته می‌شود.',
                    'packaging'                       => 'بسته‌بندی',
                    'packaging-hint-tooltip'          => 'در صورت انتخاب، این مسیر در بسته‌بندی قابل انتخاب خواهد بود.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'route'      => 'مسیر',
            'company'    => 'شرکت',
            'deleted-at' => 'تاریخ حذف',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'company'  => 'شرکت',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'مسیر به‌روزرسانی شد',
                    'body'  => 'مسیر با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'مسیر بازیابی شد',
                    'body'  => 'مسیر با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'مسیر حذف شد',
                    'body'  => 'مسیر با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'مسیر برای همیشه حذف شد',
                        'body'  => 'مسیر با موفقیت برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف مسیر ممکن نیست',
                        'body'  => 'مسیر در حال استفاده است و نمی‌توان آن را حذف کرد.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'مسیرها بازیابی شد',
                    'body'  => 'مسیرها با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'مسیرها حذف شد',
                    'body'  => 'مسیرها با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'مسیرها برای همیشه حذف شد',
                        'body'  => 'مسیرها با موفقیت برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف مسیرها ممکن نیست',
                        'body'  => 'مسیرها در حال استفاده هستند و نمی‌توان آن‌ها را حذف کرد.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',

                'entries' => [
                    'route'             => 'مسیر',
                    'route-placeholder' => 'مثلاً دریافت دومرحله‌ای',
                    'company'           => 'شرکت',
                ],
            ],

            'applicable-on' => [
                'title'       => 'قابل اعمال بر',
                'description' => 'محل‌هایی را انتخاب کنید که این مسیر در آن‌ها قابل انتخاب باشد.',

                'entries' => [
                    'products'                        => 'محصولات',
                    'products-hint-tooltip'           => 'در صورت انتخاب، این مسیر در محصول قابل انتخاب خواهد بود.',
                    'product-categories'              => 'دسته‌بندی‌های محصول',
                    'product-categories-hint-tooltip' => 'در صورت انتخاب، این مسیر در دسته‌بندی محصول قابل انتخاب خواهد بود.',
                    'warehouses'                      => 'انبارها',
                    'warehouses-hint-tooltip'         => 'وقتی انباری به این مسیر اختصاص داده شود، این مسیر به‌عنوان مسیر پیش‌فرض محصولاتی که از آن انبار عبور می‌کنند در نظر گرفته می‌شود.',
                    'packaging'                       => 'بسته‌بندی',
                    'packaging-hint-tooltip'          => 'در صورت انتخاب، این مسیر در بسته‌بندی قابل انتخاب خواهد بود.',
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
