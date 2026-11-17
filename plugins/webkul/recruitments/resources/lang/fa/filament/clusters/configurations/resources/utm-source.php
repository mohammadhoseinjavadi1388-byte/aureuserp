<?php

return [
    'title' => 'منابع',

    'navigation' => [
        'title' => 'منابع',
        'group' => 'UTM',
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
            'name-placeholder' => 'نام منبع را وارد کنید',
            'status'           => 'وضعیت',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'شناسه',
            'name'       => 'نام',
            'status'     => 'وضعیت',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'name'       => 'نام',
            'created-by' => 'ایجادکننده',
            'updated-at' => 'تاریخ به‌روزرسانی',
            'created-at' => 'تاریخ ایجاد',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'منبع به‌روزرسانی شد',
                    'body'  => 'منبع با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'منبع حذف شد',
                    'body'  => 'منبع با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'منابع حذف شدند',
                    'body'  => 'منابع با موفقیت حذف شدند.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'منبع ایجاد شد',
                    'body'  => 'منبع با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name' => 'نام',
    ],
];
