<?php

return [
    'title' => 'برچسب',

    'navigation' => [
        'title' => 'برچسب',
        'group' => 'سفارش‌های فروش',
    ],

    'form' => [
        'fields' => [
            'name'  => 'نام',
            'color' => 'رنگ',
        ],
    ],

    'table' => [
        'columns' => [
            'created-by' => 'ایجادکننده',
            'name'       => 'نام',
            'color'      => 'رنگ',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'برچسب محصول به‌روزرسانی شد',
                    'body'  => 'برچسب محصول با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'برچسب محصول حذف شد',
                    'body'  => 'برچسب محصول با موفقیت حذف شد.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'برچسب محصول حذف شد',
                    'body'  => 'برچسب محصول با موفقیت حذف شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'  => 'نام',
            'color' => 'رنگ',
        ],
    ],
];
