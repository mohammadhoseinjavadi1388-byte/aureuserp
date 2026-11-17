<?php

return [
    'navigation' => [
        'title' => 'دسته‌بندی‌ها',
        'group' => 'محصولات',
    ],

    'form' => [
        'sections' => [
            'inventory' => [
                'title' => 'انبارداری',

                'fieldsets' => [
                    'logistics' => [
                        'title' => 'لجستیک',

                        'fields' => [
                            'routes' => 'مسیرها',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'inventory' => [
                'title' => 'انبارداری',

                'subsections' => [
                    'logistics' => [
                        'title' => 'لجستیک',

                        'entries' => [
                            'routes'     => 'مسیرهای انبار',
                            'route_name' => 'نام مسیر',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
