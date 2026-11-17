<?php

return [
    'navigation' => [
        'title' => 'دسته‌بندی‌ها',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'fields' => [
                    'name'       => 'نام',
                    'technician' => 'مسئول',
                    'company'    => 'شرکت',
                    'note'       => 'یادداشت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'technician' => 'مسئول',
            'company'    => 'شرکت',
            'created-at' => 'تاریخ ایجاد',
        ],

        'groups' => [
            'technician' => 'مسئول',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'دسته‌بندی به‌روزرسانی شد',
                    'body'  => 'دسته‌بندی با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'دسته‌بندی حذف شد',
                    'body'  => 'دسته‌بندی با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'دسته‌بندی‌ها حذف شدند',
                    'body'  => 'دسته‌بندی‌ها با موفقیت حذف شدند.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'دسته‌بندی ایجاد شد',
                    'body'  => 'دسته‌بندی با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'entries' => [
                    'name'       => 'نام',
                    'technician' => 'مسئول',
                    'company'    => 'شرکت',
                    'note'       => 'یادداشت',
                ],
            ],
        ],
    ],
];
