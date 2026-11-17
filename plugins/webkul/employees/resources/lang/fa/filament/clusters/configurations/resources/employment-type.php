<?php

return [
    'title' => 'انواع استخدام',

    'navigation' => [
        'title' => 'انواع استخدام',
        'group' => 'استخدام',
    ],

    'form' => [
        'fields' => [
            'name'    => 'نوع استخدام',
            'code'    => 'کد',
            'country' => 'کشور',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'شناسه',
            'name'       => 'نوع استخدام',
            'code'       => 'کد',
            'country'    => 'کشور',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'name'       => 'نوع استخدام',
            'country'    => 'کشور',
            'created-by' => 'ایجادکننده',
            'updated-at' => 'تاریخ به‌روزرسانی',
            'created-at' => 'تاریخ ایجاد',
        ],

        'groups' => [
            'name'       => 'نوع استخدام',
            'country'    => 'کشور',
            'code'       => 'کد',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'نوع استخدام',
                    'body'  => 'نوع استخدام با موفقیت ویرایش شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'نوع استخدام حذف شد',
                    'body'  => 'نوع استخدام با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'انواع استخدام حذف شدند',
                    'body'  => 'انواع استخدام با موفقیت حذف شدند.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'انواع استخدام',
                    'body'  => 'نوع استخدام با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'    => 'نوع استخدام',
            'code'    => 'کد',
            'country' => 'کشور',
        ],
    ],
];
