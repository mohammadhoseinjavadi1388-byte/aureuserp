<?php

return [
    'title' => 'رسانه‌ها',

    'navigation' => [
        'title' => 'رسانه‌ها',
        'group' => 'UTM',
    ],

    'form' => [
        'fields' => [
            'name'             => 'نام',
            'name-placeholder' => 'نام رسانه را وارد کنید',
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
            'created-by' => 'ایجادکننده',
            'updated-at' => 'تاریخ به‌روزرسانی',
            'created-at' => 'تاریخ ایجاد',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'رسانه به‌روزرسانی شد',
                    'body'  => 'رسانه با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'رسانه حذف شد',
                    'body'  => 'رسانه با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'رسانه‌ها حذف شدند',
                    'body'  => 'رسانه‌ها با موفقیت حذف شدند.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'رسانه ایجاد شد',
                    'body'  => 'رسانه با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name' => 'نام',
    ],
];
