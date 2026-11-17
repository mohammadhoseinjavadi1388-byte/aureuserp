<?php

return [
    'navigation' => [
        'title' => 'نقاط عطف',
    ],

    'form' => [
        'name'         => 'نام',
        'deadline'     => 'مهلت',
        'is-completed' => 'تکمیل‌شده',
        'project'      => 'پروژه',
    ],

    'table' => [
        'columns' => [
            'name'         => 'نام',
            'deadline'     => 'مهلت',
            'is-completed' => 'تکمیل‌شده',
            'completed-at' => 'تاریخ تکمیل',
            'project'      => 'پروژه',
            'creator'      => 'ایجادکننده',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'name'         => 'نام',
            'is-completed' => 'تکمیل‌شده',
            'project'      => 'پروژه',
            'created-at'   => 'تاریخ ایجاد',
        ],

        'filters' => [
            'is-completed' => 'تکمیل‌شده',
            'project'      => 'پروژه',
            'creator'      => 'ایجادکننده',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'نقطه عطف به‌روزرسانی شد',
                    'body'  => 'نقطه عطف با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'نقطه عطف حذف شد',
                    'body'  => 'نقطه عطف با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'نقاط عطف حذف شدند',
                    'body'  => 'نقاط عطف با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],
];
