<?php

return [
    'navigation' => [
        'title' => 'سالن‌ها',
        'group' => 'پایانه فروش',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'name'                => 'نام',
                    'company'             => 'شرکت',
                    'background-color'    => 'رنگ پس‌زمینه',
                    'background-image'    => 'تصویر پس‌زمینه',
                    'configs'             => 'پایانه فروش',
                    'configs-helper-text' => 'پایانه‌های حالت رستوران که از این سالن استفاده می‌کنند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'entries' => [
                    'name'             => 'نام',
                    'background-color' => 'رنگ پس‌زمینه',
                    'company-name'     => 'شرکت',
                    'configs'          => 'پایانه فروش',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'             => 'نام',
            'tables'           => 'میزها',
            'configs'          => 'پایانه فروش',
            'background-color' => 'رنگ پس‌زمینه',
            'company'          => 'شرکت',
        ],
    ],
];
