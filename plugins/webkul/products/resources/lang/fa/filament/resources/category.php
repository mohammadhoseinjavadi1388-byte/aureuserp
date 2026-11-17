<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',

                'fields' => [
                    'name'             => 'نام',
                    'name-placeholder' => 'مثلاً چراغ‌ها',
                    'parent'           => 'والد',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'نام',
            'full-name'   => 'نام کامل',
            'parent-path' => 'مسیر والد',
            'parent'      => 'والد',
            'creator'     => 'ایجادکننده',
            'created-at'  => 'تاریخ ایجاد',
            'created-at'  => 'تاریخ ایجاد',
            'updated-at'  => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'parent'     => 'والد',
            'creator'    => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'parent'  => 'والد',
            'creator' => 'ایجادکننده',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'دسته‌بندی حذف شد',
                        'body'  => 'دسته‌بندی با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف دسته‌بندی ممکن نشد',
                        'body'  => 'این دسته‌بندی قابل حذف نیست، زیرا در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'دسته‌بندی‌ها حذف شدند',
                        'body'  => 'دسته‌بندی‌ها با موفقیت حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف دسته‌بندی‌ها ممکن نشد',
                        'body'  => 'این دسته‌بندی‌ها قابل حذف نیستند، زیرا در حال استفاده هستند.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'entries' => [
                    'name'        => 'نام',
                    'parent'      => 'دسته‌بندی والد',
                    'full_name'   => 'نام کامل دسته‌بندی',
                    'parent_path' => 'مسیر دسته‌بندی',
                ],
            ],

            'record-information' => [
                'title' => 'اطلاعات رکورد',

                'entries' => [
                    'creator'    => 'ایجادکننده',
                    'created_at' => 'تاریخ ایجاد',
                    'updated_at' => 'تاریخ آخرین به‌روزرسانی',
                ],
            ],
        ],
    ],
];
