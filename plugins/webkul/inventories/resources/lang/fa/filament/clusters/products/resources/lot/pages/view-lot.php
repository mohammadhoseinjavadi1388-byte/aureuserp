<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'چاپ',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'سری ساخت حذف شد',
                    'body'  => 'سری ساخت با موفقیت حذف شد.',
                ],

                'error' => [
                    'title' => 'حذف سری ساخت ممکن نیست',
                    'body'  => 'سری ساخت قابل حذف نیست، زیرا هم‌اکنون در حال استفاده است.',
                ],
            ],
        ],
    ],
];
