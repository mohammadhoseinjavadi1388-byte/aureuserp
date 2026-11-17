<?php

return [
    'form' => [
        'fields' => [
            'name'               => 'نام',
            'rounding-precision' => 'دقت گرد کردن',
            'rounding-strategy'  => 'راهبرد گرد کردن',
            'profit-account'     => 'حساب سود',
            'loss-account'       => 'حساب زیان',
            'rounding-method'    => 'روش گرد کردن',
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'نام',
            'rounding-strategy'    => 'راهبرد گرد کردن',
            'rounding-method'      => 'روش گرد کردن',
            'created-by'           => 'ایجادکننده',
            'profit-account'       => 'حساب سود',
            'loss-account'         => 'حساب زیان',
        ],

        'groups' => [
            'name'              => 'نام',
            'rounding-strategy' => 'راهبرد گرد کردن',
            'rounding-method'   => 'روش گرد کردن',
            'created-by'        => 'ایجادکننده',
            'profit-account'    => 'حساب سود',
            'loss-account'      => 'حساب زیان',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'گرد کردن نقدی به‌روزرسانی شد',
                    'body'  => 'گرد کردن نقدی با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'گرد کردن نقدی حذف شد',
                    'body'  => 'گرد کردن نقدی با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'گرد کردن نقدی حذف شد',
                    'body'  => 'گرد کردن نقدی با موفقیت حذف شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'               => 'نام',
            'rounding-precision' => 'دقت گرد کردن',
            'rounding-strategy'  => 'راهبرد گرد کردن',
            'profit-account'     => 'حساب سود',
            'loss-account'       => 'حساب زیان',
            'rounding-method'    => 'روش گرد کردن',
        ],
    ],
];
