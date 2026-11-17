<?php

return [
    'title' => 'مدارک تحصیلی',

    'navigation' => [
        'title' => 'مدارک تحصیلی',
        'group' => 'درخواست‌های شغلی',
    ],

    'groups' => [
        'status'     => 'وضعیت',
        'created-by' => 'ایجادکننده',
        'created-at' => 'تاریخ ایجاد',
        'updated-at' => 'تاریخ به‌روزرسانی',
    ],

    'form' => [
        'fields' => [
            'name'             => 'نام',
            'name-placeholder' => 'نام مدرک تحصیلی را وارد کنید',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'شناسه',
            'name'       => 'نام',
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
                    'title' => 'مدرک تحصیلی به‌روزرسانی شد',
                    'body'  => 'مدرک تحصیلی با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'مدرک تحصیلی حذف شد',
                    'body'  => 'مدرک تحصیلی با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'مدارک تحصیلی حذف شدند',
                    'body'  => 'مدارک تحصیلی با موفقیت حذف شدند.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'مدرک تحصیلی ایجاد شد',
                    'body'  => 'مدرک تحصیلی با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name' => 'نام',
    ],
];
