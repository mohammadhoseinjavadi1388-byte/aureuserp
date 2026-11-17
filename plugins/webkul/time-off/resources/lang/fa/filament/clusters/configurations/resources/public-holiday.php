<?php

return [
    'title' => 'تعطیلات رسمی',

    'model-label' => 'تعطیلی رسمی',

    'navigation' => [
        'title' => 'تعطیلات رسمی',
    ],

    'form' => [
        'fields' => [
            'name'             => 'نام',
            'name-placeholder' => 'نام تعطیلی رسمی را وارد کنید',
            'date-from'        => 'تاریخ شروع',
            'date-to'          => 'تاریخ پایان',
            'color'            => 'رنگ',
            'calendar'         => 'تقویم',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'نام',
            'company-name' => 'نام شرکت',
            'calendar'     => 'تقویم',
            'created-by'   => 'ایجادکننده',
            'date-from'    => 'تاریخ شروع',
            'date-to'      => 'تاریخ پایان',
        ],

        'filters' => [
            'name'         => 'نام',
            'company-name' => 'نام شرکت',
            'created-by'   => 'ایجادکننده',
            'date-from'    => 'تاریخ شروع',
            'date-to'      => 'تاریخ پایان',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'name'         => 'نام',
            'company-name' => 'نام شرکت',
            'created-by'   => 'ایجادکننده',
            'date-from'    => 'تاریخ شروع',
            'date-to'      => 'تاریخ پایان',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تعطیلی رسمی به‌روزرسانی شد',
                    'body'  => 'تعطیلی رسمی با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تعطیلی رسمی حذف شد',
                    'body'  => 'تعطیلی رسمی با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تعطیلات رسمی حذف شدند',
                    'body'  => 'تعطیلات رسمی با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'      => 'نام',
            'date-from' => 'تاریخ شروع',
            'date-to'   => 'تاریخ پایان',
            'color'     => 'رنگ',
        ],
    ],
];
