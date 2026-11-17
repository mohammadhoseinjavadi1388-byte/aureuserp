<?php

return [
    'navigation' => [
        'title' => 'دسته‌بندی‌های انبارش',
        'group' => 'مدیریت انبار',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',

                'fields' => [
                    'name'               => 'نام',
                    'allow-new-products' => 'مجاز بودن محصولات جدید',
                    'max-weight'         => 'حداکثر وزن',
                    'company'            => 'شرکت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'               => 'نام',
            'allow-new-products' => 'مجاز بودن محصولات جدید',
            'max-weight'         => 'حداکثر وزن',
            'company'            => 'شرکت',
            'deleted-at'         => 'تاریخ حذف',
            'created-at'         => 'تاریخ ایجاد',
            'updated-at'         => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'allow-new-products' => 'مجاز بودن محصولات جدید',
            'created-at'         => 'تاریخ ایجاد',
            'updated-at'         => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'دسته‌بندی انبارش حذف شد',
                    'body'  => 'دسته‌بندی انبارش با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'دسته‌بندی‌های انبارش حذف شد',
                    'body'  => 'دسته‌بندی‌های انبارش با موفقیت حذف شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',

                'entries' => [
                    'name'               => 'نام',
                    'allow-new-products' => 'مجاز بودن محصولات جدید',
                    'max-weight'         => 'حداکثر وزن',
                    'company'            => 'شرکت',
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
