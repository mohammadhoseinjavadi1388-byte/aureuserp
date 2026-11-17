<?php

return [
    'title' => 'دپارتمان‌ها',

    'navigation' => [
        'title' => 'دپارتمان‌ها',
    ],

    'global-search' => [
        'department-manager' => 'مدیر',
        'company'            => 'شرکت',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'fields' => [
                    'name'                => 'نام',
                    'manager'             => 'مدیر',
                    'parent-department'   => 'دپارتمان بالادستی',
                    'manager-placeholder' => 'مدیر را انتخاب کنید',
                    'company'             => 'شرکت',
                    'company-placeholder' => 'شرکت را انتخاب کنید',
                    'color'               => 'رنگ',
                ],
            ],

            'additional' => [
                'title'       => 'اطلاعات تکمیلی',
                'description' => 'اطلاعات تکمیلی درباره این دپارتمان.',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'نام',
            'manager-name' => 'مدیر',
            'company-name' => 'شرکت',
        ],

        'groups' => [
            'name'       => 'نام',
            'manager'    => 'مدیر',
            'company'    => 'شرکت',
            'updated-at' => 'تاریخ به‌روزرسانی',
            'created-at' => 'تاریخ ایجاد',
        ],

        'filters' => [
            'name'         => 'نام',
            'manager-name' => 'مدیر',
            'company-name' => 'شرکت',
            'updated-at'   => 'تاریخ به‌روزرسانی',
            'created-at'   => 'تاریخ ایجاد',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'دپارتمان بازیابی شد',
                    'body'  => 'دپارتمان با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'دپارتمان حذف شد',
                    'body'  => 'دپارتمان با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'دپارتمان برای همیشه حذف شد',
                    'body'  => 'دپارتمان با موفقیت برای همیشه حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'دپارتمان‌ها بازیابی شدند',
                    'body'  => 'دپارتمان‌ها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'دپارتمان‌ها حذف شدند',
                    'body'  => 'دپارتمان‌ها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'دپارتمان‌ها برای همیشه حذف شدند',
                    'body'  => 'دپارتمان‌ها با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'entries' => [
                    'name'            => 'نام',
                    'manager'         => 'مدیر',
                    'company'         => 'شرکت',
                    'color'           => 'رنگ',
                    'hierarchy-title' => 'ساختار سازمانی دپارتمان',
                ],
            ],
        ],
    ],
];
