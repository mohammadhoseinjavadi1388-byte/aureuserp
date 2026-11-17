<?php

return [
    'form' => [
        'factor-percent'    => 'درصد ضریب',
        'factor-ratio'      => 'نسبت ضریب',
        'repartition-type'  => 'نوع تسهیم',
        'document-type'     => 'نوع سند',
        'account'           => 'حساب',
        'tax'               => 'مالیات',
        'tax-closing-entry' => 'سند بستن مالیات',
    ],

    'table' => [
        'columns' => [
            'factor-percent'    => 'درصد ضریب (%)',
            'account'           => 'حساب',
            'tax'               => 'مالیات',
            'company'           => 'شرکت',
            'repartition-type'  => 'نوع تسهیم',
            'document-type'     => 'نوع سند',
            'tax-closing-entry' => 'سند بستن مالیات',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تسهیم مالیات به‌روزرسانی شد',
                    'body'  => 'تسهیم مالیات با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تسهیم مالیات حذف شد',
                    'body'  => 'تسهیم مالیات با موفقیت حذف شد.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'تسهیم مالیات ایجاد شد',
                    'body'  => 'تسهیم مالیات با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],
];
