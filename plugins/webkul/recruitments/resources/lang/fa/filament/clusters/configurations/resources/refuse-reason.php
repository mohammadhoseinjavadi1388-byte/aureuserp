<?php

return [
    'title' => 'دلیل رد',

    'navigation' => [
        'title' => 'دلایل رد',
        'group' => 'درخواست‌های شغلی',
    ],

    'form' => [
        'fields' => [
            'name'             => 'نام',
            'template'         => [
                'title'                    => 'قالب',
                'applicant-refuse'         => 'رد متقاضی',
                'applicant-not-interested' => 'انصراف متقاضی',
            ],
            'name-placeholder' => 'نام دلیل رد را وارد کنید',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'شناسه',
            'name'       => 'نام',
            'template'   => 'قالب',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'name'       => 'نام',
            'employee'   => 'کارمند',
            'created-by' => 'ایجادکننده',
            'updated-at' => 'تاریخ به‌روزرسانی',
            'created-at' => 'تاریخ ایجاد',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'دلیل رد به‌روزرسانی شد',
                    'body'  => 'دلیل رد با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'دلیل رد حذف شد',
                    'body'  => 'دلیل رد با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'دلایل رد حذف شدند',
                    'body'  => 'دلایل رد با موفقیت حذف شدند.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'دلیل رد ایجاد شد',
                    'body'  => 'دلیل رد با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'       => 'نام',
        'template'   => 'قالب',
    ],
];
