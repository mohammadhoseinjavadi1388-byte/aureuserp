<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'چاپ',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'سفارش حذف شد',
                    'body'  => 'سفارش با موفقیت حذف شد.',
                ],

                'error' => [
                    'title' => 'حذف سفارش ممکن نیست',
                    'body'  => 'سفارش قابل حذف نیست، زیرا در حال حاضر در حال استفاده است.',
                ],
            ],
        ],
    ],
];
