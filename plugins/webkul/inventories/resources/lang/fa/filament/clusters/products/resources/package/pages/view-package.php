<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'چاپ',

            'actions' => [
                'without-content' => [
                    'label' => 'چاپ بارکد',
                ],

                'with-content' => [
                    'label' => 'چاپ بارکد همراه با محتوا',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'بسته حذف شد',
                    'body'  => 'بسته با موفقیت حذف شد.',
                ],

                'error' => [
                    'title' => 'حذف بسته ممکن نیست',
                    'body'  => 'بسته قابل حذف نیست، زیرا هم‌اکنون در حال استفاده است.',
                ],
            ],
        ],
    ],
];
