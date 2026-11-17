<?php

return [
    'navigation' => [
        'title' => 'طرح‌های فعالیت',
    ],

    'form' => [
        'name'   => 'نام',
        'status' => 'وضعیت',
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'status'     => 'وضعیت',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'name'       => 'نام',
            'status'     => 'وضعیت',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'طرح فعالیت بازیابی شد',
                    'body'  => 'طرح فعالیت با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'طرح فعالیت حذف شد',
                    'body'  => 'طرح فعالیت با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'طرح فعالیت حذف دائمی شد',
                    'body'  => 'طرح فعالیت با موفقیت حذف دائمی شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'طرح‌های فعالیت بازیابی شدند',
                    'body'  => 'طرح‌های فعالیت با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'طرح‌های فعالیت حذف شدند',
                    'body'  => 'طرح‌های فعالیت با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'طرح‌های فعالیت حذف دائمی شدند',
                    'body'  => 'طرح‌های فعالیت با موفقیت حذف دائمی شدند.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'طرح فعالیت ایجاد شد',
                    'body'  => 'طرح فعالیت با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'   => 'نام',
        'status' => 'وضعیت',
    ],
];
