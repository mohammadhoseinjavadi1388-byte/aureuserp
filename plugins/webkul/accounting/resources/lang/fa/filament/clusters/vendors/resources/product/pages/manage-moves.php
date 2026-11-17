<?php

return [
    'title' => 'ورود/خروج',

    'table' => [
        'columns' => [
            'date'                 => 'تاریخ',
            'reference'            => 'مرجع',
            'product'              => 'محصول',
            'package'              => 'بسته',
            'lot'                  => 'سری ساخت / شماره سریال',
            'source-location'      => 'مکان انبار مبدأ',
            'destination-location' => 'مکان انبار مقصد',
            'quantity'             => 'تعداد',
            'state'                => 'وضعیت',
            'done-by'              => 'انجام‌دهنده',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'جابه‌جایی حذف شد',
                    'body'  => 'جابه‌جایی با موفقیت حذف شد.',
                ],
            ],
        ],
    ],
];
