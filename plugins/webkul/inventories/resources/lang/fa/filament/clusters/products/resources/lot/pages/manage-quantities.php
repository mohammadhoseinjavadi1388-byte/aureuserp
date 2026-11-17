<?php

return [
    'title' => 'مکان‌های انبار',

    'table' => [
        'columns' => [
            'product'          => 'محصول',
            'location'         => 'مکان انبار',
            'storage-category' => 'دسته‌بندی انبارش',
            'quantity'         => 'تعداد',
            'package'          => 'بسته',
            'on-hand'          => 'موجودی در دسترس',
            'unit'             => 'واحد',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تعداد حذف شد',
                    'body'  => 'تعداد با موفقیت حذف شد.',
                ],
            ],
        ],
    ],
];
