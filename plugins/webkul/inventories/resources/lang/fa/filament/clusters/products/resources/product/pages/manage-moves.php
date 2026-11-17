<?php

return [
    'title' => 'ورود/خروج',

    'tabs' => [
        'todo'     => 'در دست اقدام',
        'done'     => 'انجام‌شده',
        'incoming' => 'ورودی',
        'outgoing' => 'خروجی',
        'internal' => 'داخلی',
    ],

    'table' => [
        'columns' => [
            'date'                 => 'تاریخ',
            'reference'            => 'مرجع',
            'product'              => 'محصول',
            'package'              => 'بسته',
            'lot'                  => 'سری ساخت / شماره‌های سریال',
            'source-location'      => 'مکان مبدأ',
            'destination-location' => 'مکان مقصد',
            'quantity'             => 'تعداد',
            'unit'                 => 'واحد',
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
