<?php

return [
    'navigation' => [
        'title' => 'صنایع',
    ],

    'form' => [
        'name'      => 'نام',
        'full-name' => 'نام کامل',
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'full-name'  => 'نام کامل',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'صنعت به‌روزرسانی شد',
                    'body'  => 'صنعت با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'صنعت بازیابی شد',
                    'body'  => 'صنعت با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'صنعت حذف شد',
                    'body'  => 'صنعت با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'صنعت به‌صورت دائمی حذف شد',
                    'body'  => 'صنعت با موفقیت به‌صورت دائمی حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'صنایع بازیابی شدند',
                    'body'  => 'صنایع با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'صنایع حذف شدند',
                    'body'  => 'صنایع با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'صنایع به‌صورت دائمی حذف شدند',
                    'body'  => 'صنایع با موفقیت به‌صورت دائمی حذف شدند.',
                ],
            ],
        ],
    ],
];
