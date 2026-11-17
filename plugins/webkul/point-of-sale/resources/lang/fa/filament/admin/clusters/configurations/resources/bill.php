<?php

return [
    'navigation' => [
        'title' => 'سکه‌ها/اسکناس‌ها',
        'group' => 'پایانه فروش',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'name'                           => 'نام',
                    'value'                          => 'ارزش سکه/اسکناس',
                    'is-for-all-configs'             => 'برای همه پایانه‌های فروش',
                    'is-for-all-configs-helper-text' => 'در صورت انتخاب، این سکه/اسکناس در همه پایانه‌های فروش در دسترس خواهد بود.',
                    'configs'                        => 'پایانه‌های فروش',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'               => 'نام',
            'value'              => 'ارزش سکه/اسکناس',
            'is-for-all-configs' => 'برای همه پایانه‌های فروش',
            'configs'            => 'پایانه‌های فروش',
            'company'            => 'شرکت',
        ],
    ],
];
