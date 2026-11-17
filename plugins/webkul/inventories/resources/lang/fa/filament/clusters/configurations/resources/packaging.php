<?php

return [
    'navigation' => [
        'title' => 'بسته‌بندی‌ها',
        'group' => 'محصولات',
    ],

    'form' => [
        'package-type' => 'نوع بسته',
        'routes'       => 'مسیرها',
    ],

    'table' => [
        'columns' => [
            'package-type' => 'نوع بسته',
        ],

        'groups' => [
            'package-type' => 'نوع بسته',
        ],

        'filters' => [
            'package-type' => 'نوع بسته',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'entries' => [
                    'package_type' => 'نوع بسته',
                ],
            ],

            'routing' => [
                'title' => 'اطلاعات مسیریابی',

                'entries' => [
                    'routes'     => 'مسیرهای انبار',
                    'route_name' => 'نام مسیر',
                ],
            ],
        ],
    ],
];
