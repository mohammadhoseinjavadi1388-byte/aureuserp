<?php

return [
    'title' => 'تنوع‌های محصول',

    'form' => [
        'date'                   => 'تاریخ',
        'employee'               => 'کارمند',
        'description'            => 'توضیحات',
        'time-spent'             => 'زمان صرف‌شده',
        'time-spent-helper-text' => 'زمان صرف‌شده بر حسب ساعت (مثلاً 1.5 ساعت یعنی 1 ساعت و 30 دقیقه)',
    ],

    'table' => [
        'columns' => [
            'date'                   => 'تاریخ',
            'employee'               => 'کارمند',
            'description'            => 'توضیحات',
            'time-spent'             => 'زمان صرف‌شده',
            'time-spent-on-subtasks' => 'زمان صرف‌شده برای زیروظیفه‌ها',
            'total-time-spent'       => 'کل زمان صرف‌شده',
            'remaining-time'         => 'زمان باقی‌مانده',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تنوع محصول حذف شد',
                    'body'  => 'تنوع محصول با موفقیت حذف شد.',
                ],
            ],
        ],
    ],
];
