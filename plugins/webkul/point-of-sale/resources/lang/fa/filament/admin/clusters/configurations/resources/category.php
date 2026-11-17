<?php

return [
    'navigation' => [
        'title' => 'دسته‌بندی‌های محصول پایانه فروش',
        'group' => 'پایانه فروش',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'name'    => 'نام',
                    'parent'  => 'دسته‌بندی والد',
                    'company' => 'شرکت',
                    'color'   => 'رنگ',
                    'image'   => 'تصویر',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'entries' => [
                    'name'         => 'نام',
                    'parent-name'  => 'دسته‌بندی والد',
                    'color'        => 'رنگ',
                    'company-name' => 'شرکت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'    => 'نام',
            'parent'  => 'دسته‌بندی والد',
            'color'   => 'رنگ',
            'company' => 'شرکت',
        ],

        'groups' => [
            'parent' => 'دسته‌بندی والد',
        ],
    ],
];
