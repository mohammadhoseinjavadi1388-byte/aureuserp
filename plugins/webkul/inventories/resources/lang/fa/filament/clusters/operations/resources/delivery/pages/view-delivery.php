<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'چاپ',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'تحویل حذف شد',
                    'body'  => 'تحویل با موفقیت حذف شد.',
                ],

                'error' => [
                    'title' => 'حذف تحویل ممکن نیست',
                    'body'  => 'تحویل قابل حذف نیست، زیرا هم‌اکنون در حال استفاده است.',
                ],
            ],
        ],
    ],
];
