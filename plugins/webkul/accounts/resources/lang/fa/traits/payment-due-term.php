<?php

return [
    'form' => [
        'value'                  => 'مقدار',
        'due'                    => 'سررسید',
        'delay-due'              => 'مهلت سررسید',
        'delay-type'             => 'نوع مهلت',
        'days-on-the-next-month' => 'روز از ماه بعد',
        'days'                   => 'روز',
        'payment-term'           => 'شرایط پرداخت',
    ],

    'table' => [
        'columns' => [
            'due'          => 'سررسید',
            'value'        => 'مقدار',
            'value-amount' => 'مبلغ مقدار',
            'after'        => 'پس از',
            'delay-type'   => 'نوع مهلت',
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
];
