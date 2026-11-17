<?php

return [
    'title' => 'دلایل ترک کار',

    'navigation' => [
        'title' => 'دلایل ترک کار',
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
            'name' => 'نام',
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
                    'title' => 'دلیل ترک کار به‌روزرسانی شد',
                    'body'  => 'دلیل ترک کار با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'دلیل ترک کار حذف شد',
                    'body'  => 'دلیل ترک کار با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'دلایل ترک کار حذف شدند',
                    'body'  => 'دلایل ترک کار با موفقیت حذف شدند.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'دلیل ترک کار ایجاد شد',
                    'body'  => 'دلیل ترک کار با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name' => 'نام',
    ],
];
