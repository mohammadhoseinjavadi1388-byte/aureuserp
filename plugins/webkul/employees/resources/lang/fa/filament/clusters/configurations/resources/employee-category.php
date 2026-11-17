<?php

return [
    'title' => 'برچسب‌ها',

    'navigation' => [
        'title' => 'برچسب‌ها',
        'group' => 'کارمند',
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
            'name-placeholder' => 'نام برچسب را وارد کنید',
            'color'            => 'رنگ',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'شناسه',
            'name'       => 'نام',
            'color'      => 'رنگ',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'name'       => 'نام',
            'created-by' => 'ایجادکننده',
            'updated-by' => 'به‌روزرسانی‌کننده',
            'updated-at' => 'تاریخ به‌روزرسانی',
            'created-at' => 'تاریخ ایجاد',
        ],

        'groups' => [
            'name'         => 'نام',
            'job-position' => 'سمت شغلی',
            'color'        => 'رنگ',
            'created-by'   => 'ایجادکننده',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'برچسب به‌روزرسانی شد',
                    'body'  => 'برچسب با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'برچسب حذف شد',
                    'body'  => 'برچسب با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'برچسب‌ها حذف شدند',
                    'body'  => 'برچسب‌ها با موفقیت حذف شدند.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'برچسب ایجاد شد',
                    'body'  => 'برچسب با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'  => 'نام',
        'color' => 'رنگ',
    ],
];
