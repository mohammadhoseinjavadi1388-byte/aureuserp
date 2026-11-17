<?php

return [
    'title' => 'تنوع‌های محصول',

    'form' => [
        'date'                   => 'تاریخ',
        'employee'               => 'کارمند',
        'description'            => 'توضیحات',
        'time-spent'             => 'زمان صرف‌شده',
        'time-spent-helper-text' => 'زمان صرف‌شده به ساعت (مثلاً 1.5 ساعت یعنی 1 ساعت و 30 دقیقه)',
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
            'variant-values'         => 'مقادیر تنوع محصول',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تنوع محصول حذف شد',
                    'body'  => 'تنوع محصول با موفقیت حذف شد.',
                ],
            ],

            'view' => [
                'extra-footer-actions' => [
                    'print' => [
                        'label' => 'چاپ برچسب‌ها',

                        'form' => [
                            'fields' => [
                                'quantity' => 'تعداد برچسب‌ها',
                                'format'   => 'قالب',

                                'format-options' => [
                                    'dymo'       => 'Dymo',
                                    '2x7_price'  => '2x7 با قیمت',
                                    '4x7_price'  => '4x7 با قیمت',
                                    '4x12'       => '4x12',
                                    '4x12_price' => '4x12 با قیمت',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
