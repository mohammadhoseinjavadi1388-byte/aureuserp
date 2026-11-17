<?php

return [
    'navigation' => [
        'title' => 'مراحل',
    ],

    'form' => [
        'fields' => [
            'name' => 'نام',
            'done' => 'انجام‌شده',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'done'       => 'انجام‌شده',
            'created-at' => 'تاریخ ایجاد',
        ],

        'groups' => [
            'done'       => 'انجام‌شده',
            'created-at' => 'تاریخ ایجاد',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'مرحله به‌روزرسانی شد',
                    'body'  => 'مرحله با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'مرحله حذف شد',
                    'body'  => 'مرحله با موفقیت حذف شد.',
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
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'entries' => [
                    'name' => 'نام',
                    'done' => 'انجام‌شده',
                ],
            ],
        ],
    ],
];
