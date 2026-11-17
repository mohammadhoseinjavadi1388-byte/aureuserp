<?php

return [
    'title' => 'مراحل',

    'navigation' => [
        'title' => 'مراحل',
        'group' => 'سمت‌های شغلی',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title' => 'اطلاعات عمومی',

                'fields' => [
                    'stage-name'   => 'نام مرحله',
                    'sort'         => 'ترتیب',
                    'requirements' => 'الزامات',
                ],
            ],

            'tooltips' => [
                'title'       => 'راهنمای وضعیت‌ها',
                'description' => 'برچسب سفارشی وضعیت درخواست را تعریف کنید.',

                'fields' => [
                    'gray-label'          => 'برچسب خاکستری',
                    'gray-label-tooltip'  => 'برچسب وضعیت خاکستری.',
                    'red-label'           => 'برچسب قرمز',
                    'red-label-tooltip'   => 'برچسب وضعیت قرمز.',
                    'green-label'         => 'برچسب سبز',
                    'green-label-tooltip' => 'برچسب وضعیت سبز.',
                ],
            ],

            'additional-information' => [
                'title' => 'اطلاعات تکمیلی',

                'fields' => [
                    'job-positions' => 'سمت‌های شغلی',
                    'folded'        => 'جمع‌شده',
                    'hired-stage'   => 'مرحله استخدام',
                    'default-stage' => 'مرحله پیش‌فرض',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                 => 'شناسه',
            'name'               => 'نام مرحله',
            'hired-stage'        => 'مرحله استخدام',
            'default-stage'      => 'مرحله پیش‌فرض',
            'folded'             => 'جمع‌شده',
            'job-positions'      => 'سمت‌های شغلی',
            'created-by'         => 'ایجادکننده',
            'created-at'         => 'تاریخ ایجاد',
            'updated-at'         => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'name'         => 'نام مرحله',
            'job-position' => 'سمت شغلی',
            'folded'       => 'جمع‌شده',
            'gray-label'   => 'برچسب خاکستری',
            'red-label'    => 'برچسب قرمز',
            'green-label'  => 'برچسب سبز',
            'created-by'   => 'ایجادکننده',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'job-position' => 'سمت شغلی',
            'stage-name'   => 'نام مرحله',
            'folded'       => 'جمع‌شده',
            'gray-label'   => 'برچسب خاکستری',
            'red-label'    => 'برچسب قرمز',
            'green-label'  => 'برچسب سبز',
            'created-by'   => 'ایجادکننده',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'مرحله حذف شد',
                        'body'  => 'مرحله با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف مرحله ممکن نیست',
                        'body'  => 'این مرحله قابل حذف نیست، زیرا در حال حاضر در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'مراحل حذف شدند',
                    'body'  => 'مراحل با موفقیت حذف شدند.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'label' => 'مرحله جدید',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title' => 'اطلاعات عمومی',

                'entries' => [
                    'stage-name'   => 'نام مرحله',
                    'sort'         => 'ترتیب',
                    'requirements' => 'الزامات',
                ],
            ],

            'tooltips' => [
                'title'       => 'راهنمای وضعیت‌ها',
                'description' => 'برچسب سفارشی وضعیت درخواست را تعریف کنید.',

                'entries' => [
                    'gray-label'          => 'برچسب خاکستری',
                    'gray-label-tooltip'  => 'برچسب وضعیت خاکستری.',
                    'red-label'           => 'برچسب قرمز',
                    'red-label-tooltip'   => 'برچسب وضعیت قرمز.',
                    'green-label'         => 'برچسب سبز',
                    'green-label-tooltip' => 'برچسب وضعیت سبز.',
                ],
            ],

            'additional-information' => [
                'title' => 'اطلاعات تکمیلی',

                'entries' => [
                    'job-positions'      => 'سمت شغلی',
                    'folded'             => 'جمع‌شده',
                    'hired-stage'        => 'مرحله استخدام',
                    'default-stage'      => 'مرحله پیش‌فرض',
                ],
            ],
        ],
    ],

];
