<?php

return [
    'navigation' => [
        'title' => 'تأمین مجدد',
        'group' => 'تدارکات',
    ],

    'form' => [
        'fields' => [
        ],
    ],

    'table' => [
        'columns' => [
            'product'           => 'محصول',
            'location'          => 'مکان انبار',
            'route'             => 'مسیر',
            'vendor'            => 'تأمین‌کننده',
            'trigger'           => 'نحوه فعال‌سازی',
            'on-hand'           => 'موجودی در دسترس',
            'min'               => 'حداقل',
            'max'               => 'حداکثر',
            'multiple-quantity' => 'ضریب تعداد',
            'to-order'          => 'برای سفارش',
            'uom'               => 'واحد اندازه‌گیری',
            'company'           => 'شرکت',
        ],

        'groups' => [
            'location' => 'مکان انبار',
            'product'  => 'محصول',
            'category' => 'دسته‌بندی',
        ],

        'filters' => [
        ],

        'header-actions' => [
            'create' => [
                'label' => 'افزودن تأمین مجدد',

                'notification' => [
                    'title' => 'تأمین مجدد افزوده شد',
                    'body'  => 'تأمین مجدد با موفقیت افزوده شد.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'تأمین مجدد از قبل وجود دارد',
                        'body'  => 'برای این پیکربندی از قبل یک تأمین مجدد ثبت شده است. لطفاً همان مورد موجود را به‌روزرسانی کنید.',
                    ],
                ],
            ],
        ],

        'actions' => [
        ],
    ],
];
