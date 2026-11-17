<?php

return [
    'form' => [
        'fields' => [
            'tax-source'      => 'مالیات مبدأ',
            'tax-destination' => 'مالیات مقصد',
        ],
    ],

    'table' => [
        'columns' => [
            'tax-source'      => 'مالیات مبدأ',
            'tax-destination' => 'مالیات مقصد',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'شرط سررسید پرداخت به‌روزرسانی شد',
                    'body'  => 'شرط سررسید پرداخت با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'شرط سررسید پرداخت حذف شد',
                    'body'  => 'شرط سررسید پرداخت با موفقیت حذف شد.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'شرط سررسید پرداخت ایجاد شد',
                    'body'  => 'شرط سررسید پرداخت با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'tax-source'      => 'مالیات مبدأ',
            'tax-destination' => 'مالیات مقصد',
        ],
    ],
];
