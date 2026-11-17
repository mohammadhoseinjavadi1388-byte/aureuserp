<?php

return [
    'label' => 'باز کردن نوبت کاری صندوق',

    'form' => [
        'fields' => [
            'cash-balance-start' => 'مانده نقدی ابتدای نوبت',
            'opening-notes'      => 'یادداشت‌ها',
        ],
    ],

    'notification' => [
        'success' => [
            'title' => 'نوبت کاری صندوق باز شد',
            'body'  => 'نوبت کاری صندوق اکنون در حال انجام است.',
        ],
    ],
];
