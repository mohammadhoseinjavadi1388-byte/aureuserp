<?php

return [
    'navigation' => [
        'title' => 'نوشته‌های وبلاگ',
    ],

    'global-search' => [
        'author' => 'نویسنده',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'title'             => 'عنوان',
                    'sub-title'         => 'زیرعنوان',
                    'title-placeholder' => 'عنوان نوشته ...',
                    'slug'              => 'نامک',
                    'content'           => 'محتوا',
                    'banner'            => 'بنر',
                ],
            ],

            'seo' => [
                'title' => 'SEO',

                'fields' => [
                    'meta-title'       => 'عنوان متا',
                    'meta-keywords'    => 'کلیدواژه‌های متا',
                    'meta-description' => 'توضیحات متا',
                ],
            ],

            'settings' => [
                'title' => 'تنظیمات',

                'fields' => [
                    'category'     => 'دسته‌بندی',
                    'tags'         => 'برچسب‌ها',
                    'name'         => 'نام',
                    'color'        => 'رنگ',
                    'is-published' => 'منتشرشده',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'        => 'عنوان',
            'slug'         => 'نامک',
            'author'       => 'نویسنده',
            'category'     => 'دسته‌بندی',
            'creator'      => 'ایجادکننده',
            'is-published' => 'منتشرشده',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'category'   => 'دسته‌بندی',
            'author'     => 'نویسنده',
            'created-at' => 'تاریخ ایجاد',
        ],

        'filters' => [
            'is-published' => 'منتشرشده',
            'author'       => 'نویسنده',
            'creator'      => 'ایجادکننده',
            'category'     => 'دسته‌بندی',
            'tags'         => 'برچسب‌ها',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'نوشته به‌روزرسانی شد',
                    'body'  => 'نوشته با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'نوشته بازیابی شد',
                    'body'  => 'نوشته با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'نوشته حذف شد',
                    'body'  => 'نوشته با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'نوشته برای همیشه حذف شد',
                    'body'  => 'نوشته با موفقیت برای همیشه حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'نوشته‌ها بازیابی شدند',
                    'body'  => 'نوشته‌ها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'نوشته‌ها حذف شدند',
                    'body'  => 'نوشته‌ها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'نوشته‌ها برای همیشه حذف شدند',
                    'body'  => 'نوشته‌ها با موفقیت برای همیشه حذف شدند.',
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
                'title' => 'SEO',

                'entries' => [
                    'meta-title'       => 'عنوان متا',
                    'meta-keywords'    => 'کلیدواژه‌های متا',
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
                    'category'     => 'دسته‌بندی',
                    'tags'         => 'برچسب‌ها',
                    'name'         => 'نام',
                    'color'        => 'رنگ',
                    'is-published' => 'منتشرشده',
                ],
            ],
        ],
    ],
];
