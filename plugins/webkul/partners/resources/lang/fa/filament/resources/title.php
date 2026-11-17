<?php

return [
    'form' => [
        'name'       => 'نام',
        'short-name' => 'نام کوتاه',
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'short-name' => 'نام کوتاه',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'creator' => 'ایجادکننده',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'عنوان به‌روزرسانی شد',
                    'body'  => 'عنوان با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'عنوان حذف شد',
                    'body'  => 'عنوان با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'عنوان‌ها حذف شدند',
                    'body'  => 'عنوان‌ها با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],
];
