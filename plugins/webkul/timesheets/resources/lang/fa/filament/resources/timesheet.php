<?php

return [
    'title' => 'برگه‌های ثبت ساعت کاری',

    'navigation' => [
        'title' => 'برگه‌های ثبت ساعت کاری',
    ],

    'global-search' => [
        'project' => 'پروژه',
        'task'    => 'وظیفه',
        'date'    => 'تاریخ',
    ],

    'form' => [
        'date'                   => 'تاریخ',
        'employee'               => 'کارمند',
        'project'                => 'پروژه',
        'task'                   => 'وظیفه',
        'description'            => 'توضیحات',
        'time-spent'             => 'زمان صرف‌شده',
        'time-spent-helper-text' => 'زمان صرف‌شده بر حسب ساعت (مثلاً 1.5 ساعت یعنی 1 ساعت و 30 دقیقه)',
    ],

    'table' => [
        'columns' => [
            'date'        => 'تاریخ',
            'employee'    => 'کارمند',
            'project'     => 'پروژه',
            'task'        => 'وظیفه',
            'description' => 'توضیحات',
            'time-spent'  => 'زمان صرف‌شده',
            'created-at'  => 'تاریخ ایجاد',
            'updated-at'  => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'date'       => 'تاریخ',
            'employee'   => 'کارمند',
            'project'    => 'پروژه',
            'task'       => 'وظیفه',
            'creator'    => 'ایجادکننده',
        ],

        'filters' => [
            'date-from'  => 'از تاریخ',
            'date-until' => 'تا تاریخ',
            'employee'   => 'کارمند',
            'project'    => 'پروژه',
            'task'       => 'وظیفه',
            'creator'    => 'ایجادکننده',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'برگه ثبت ساعت کاری به‌روزرسانی شد',
                    'body'  => 'برگه ثبت ساعت کاری با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'برگه ثبت ساعت کاری حذف شد',
                    'body'  => 'برگه ثبت ساعت کاری با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'برگه‌های ثبت ساعت کاری حذف شدند',
                    'body'  => 'برگه‌های ثبت ساعت کاری با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],
];
