<?php

return [
    'navigation' => [
        'title' => 'صفحه‌ها',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'title'             => 'عنوان',
                    'title-placeholder' => 'عنوان صفحه ...',
                    'slug'              => 'نامک',
                    'content'           => 'محتوا',
                ],
            ],

            'seo' => [
                'title' => 'سئو',

                'fields' => [
                    'meta-title'       => 'عنوان متا',
                    'meta-keywords'    => 'کلمات کلیدی متا',
                    'meta-description' => 'توضیحات متا',
                ],
            ],

            'settings' => [
                'title' => 'تنظیمات',

                'fields' => [
                    'is-header-visible' => 'نمایش در منوی سربرگ',
                    'is-footer-visible' => 'نمایش در منوی پاورقی',
                    'is-tracked'        => 'ردیابی بازدیدکنندگان',
                    'is-tracked-helper' => 'بازدیدهای بازدیدکنندگان از این صفحه ثبت می‌شود.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'             => 'عنوان',
            'slug'              => 'نامک',
            'creator'           => 'ایجادکننده',
            'is-published'      => 'منتشرشده',
            'is-header-visible' => 'نمایش در منوی سربرگ',
            'is-footer-visible' => 'نمایش در منوی پاورقی',
            'created-at'        => 'تاریخ ایجاد',
            'updated-at'        => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'created-at' => 'تاریخ ایجاد',
        ],

        'filters' => [
            'is-published' => 'منتشرشده',
            'creator'      => 'ایجادکننده',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'صفحه به‌روزرسانی شد',
                    'body'  => 'صفحه با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'صفحه بازیابی شد',
                    'body'  => 'صفحه با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'صفحه حذف شد',
                    'body'  => 'صفحه با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'صفحه برای همیشه حذف شد',
                    'body'  => 'صفحه با موفقیت برای همیشه حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'صفحه‌ها بازیابی شدند',
                    'body'  => 'صفحه‌ها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'صفحه‌ها حذف شدند',
                    'body'  => 'صفحه‌ها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'صفحه‌ها برای همیشه حذف شدند',
                    'body'  => 'صفحه‌ها با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'entries' => [
                    'title'   => 'عنوان',
                    'slug'    => 'نامک',
                    'content' => 'محتوا',
                    'banner'  => 'بنر',
                ],
            ],

            'seo' => [
                'title' => 'سئو',

                'entries' => [
                    'meta-title'       => 'عنوان متا',
                    'meta-keywords'    => 'کلمات کلیدی متا',
                    'meta-description' => 'توضیحات متا',
                ],
            ],

            'record-information' => [
                'title' => 'اطلاعات رکورد',

                'entries' => [
                    'author'          => 'نویسنده',
                    'created-by'      => 'ایجادکننده',
                    'published-at'    => 'تاریخ انتشار',
                    'last-updated-by' => 'آخرین به‌روزرسانی توسط',
                    'last-updated'    => 'تاریخ آخرین به‌روزرسانی',
                    'created-at'      => 'تاریخ ایجاد',
                ],
            ],

            'settings' => [
                'title' => 'تنظیمات',

                'entries' => [
                    'is-header-visible' => 'نمایش در منوی سربرگ',
                    'is-footer-visible' => 'نمایش در منوی پاورقی',
                    'is-tracked'        => 'ردیابی بازدیدکنندگان',
                ],
            ],
        ],
    ],
];
