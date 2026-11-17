<?php

return [
    'model-label'        => 'برچسب',
    'plural-model-label' => 'برچسب‌ها',

    'navigation' => [
        'title' => 'برچسب‌ها',
        'group' => 'کاریز فروش',
    ],

    'form' => [
        'fields' => [
            'name'  => 'نام برچسب',
            'color' => 'رنگ',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام برچسب',
            'color'      => 'رنگ',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'برچسب به‌روزرسانی شد',
                    'body'  => 'برچسب با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'برچسب حذف شد',
                    'body'  => 'برچسب با موفقیت حذف شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'  => 'نام برچسب',
            'color' => 'رنگ',
        ],
    ],
];
