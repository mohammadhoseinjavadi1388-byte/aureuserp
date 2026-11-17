<?php

return [
    'title' => 'انواع مهارت',

    'navigation' => [
        'title' => 'انواع مهارت',
        'group' => 'کارمند',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'             => 'نام',
                'name-placeholder' => 'نام نوع مهارت را وارد کنید',
                'color'            => 'رنگ',
                'status'           => 'وضعیت',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'شناسه',
            'name'       => 'نوع مهارت',
            'status'     => 'وضعیت',
            'color'      => 'رنگ',
            'skills'     => 'مهارت‌ها',
            'levels'     => 'سطوح',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'skill-levels' => 'سطوح مهارت',
            'skills'       => 'مهارت‌ها',
            'created-by'   => 'ایجادکننده',
            'status'       => 'وضعیت',
            'updated-at'   => 'تاریخ به‌روزرسانی',
            'created-at'   => 'تاریخ ایجاد',
        ],

        'groups' => [
            'name'       => 'نوع مهارت',
            'color'      => 'رنگ',
            'status'     => 'وضعیت',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'نوع مهارت بازیابی شد',
                    'body'  => 'نوع مهارت با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'نوع مهارت حذف شد',
                    'body'  => 'نوع مهارت با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'انواع مهارت بازیابی شدند',
                    'body'  => 'انواع مهارت با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'انواع مهارت حذف شدند',
                    'body'  => 'انواع مهارت با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'انواع مهارت برای همیشه حذف شدند',
                    'body'  => 'انواع مهارت با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'انواع مهارت',
                    'body'  => 'نوع مهارت با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'   => 'نوع مهارت',
                'color'  => 'رنگ',
                'status' => 'وضعیت',
            ],
        ],
    ],
];
