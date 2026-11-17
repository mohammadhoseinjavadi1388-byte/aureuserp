<?php

return [
    'navigation' => [
        'title' => 'چاپگرهای آماده‌سازی',
        'group' => 'پایانه فروش',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'name'         => 'نام',
                    'printer-type' => 'نوع چاپگر',
                    'proxy-ip'     => 'IP پراکسی',
                    'company'      => 'شرکت',
                    'categories'   => 'دسته‌بندی‌های چاپی',
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
                    'printer-type' => 'نوع چاپگر',
                    'proxy-ip'     => 'نشانی IP',
                    'company-name' => 'شرکت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'نام',
            'printer-type' => 'نوع چاپگر',
            'proxy-ip'     => 'IP پراکسی',
            'categories'   => 'دسته‌بندی‌ها',
            'company'      => 'شرکت',
        ],

        'filters' => [
            'printer-type' => 'نوع چاپگر',
        ],
    ],
];
