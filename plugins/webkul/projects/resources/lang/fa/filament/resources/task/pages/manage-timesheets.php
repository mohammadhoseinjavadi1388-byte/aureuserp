<?php

return [
    'title' => 'برگه‌های ثبت ساعت کاری',

    'form' => [
        'date'                   => 'تاریخ',
        'employee'               => 'کارمند',
        'description'            => 'توضیحات',
        'time-spent'             => 'زمان صرف‌شده',
        'time-spent-helper-text' => 'زمان صرف‌شده بر حسب ساعت (مثلاً 1.5 ساعت یعنی 1 ساعت و 30 دقیقه)',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'افزودن برگه ثبت ساعت کاری',

                'notification' => [
                    'title' => 'برگه ثبت ساعت کاری ایجاد شد',
                    'body'  => 'برگه ثبت ساعت کاری با موفقیت ایجاد شد.',
                ],
            ],
        ],

        'columns' => [
            'date'                   => 'تاریخ',
            'employee'               => 'کارمند',
            'description'            => 'توضیحات',
            'time-spent'             => 'زمان صرف‌شده',
            'time-spent-on-subtasks' => 'زمان صرف‌شده روی زیروظیفه‌ها',
            'total-time-spent'       => 'مجموع زمان صرف‌شده',
            'remaining-time'         => 'زمان باقی‌مانده',
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
    ],
];
