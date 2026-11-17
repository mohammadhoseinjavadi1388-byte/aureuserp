<?php

return [
    'title' => 'روزهای حضور اجباری',

    'model-label' => 'روز حضور اجباری',

    'navigation' => [
        'title' => 'روزهای حضور اجباری',
    ],

    'form' => [
        'fields' => [
            'name'       => 'نام',
            'start-date' => 'تاریخ شروع',
            'end-date'   => 'تاریخ پایان',
            'color'      => 'رنگ',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'نام',
            'company-name' => 'نام شرکت',
            'created-by'   => 'ایجادکننده',
            'start-date'   => 'تاریخ شروع',
            'end-date'     => 'تاریخ پایان',
        ],

        'filters' => [
            'name'         => 'نام',
            'company-name' => 'نام شرکت',
            'created-by'   => 'ایجادکننده',
            'start-date'   => 'تاریخ شروع',
            'end-date'     => 'تاریخ پایان',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'name'         => 'نام',
            'company-name' => 'نام شرکت',
            'created-by'   => 'ایجادکننده',
            'start-date'   => 'تاریخ شروع',
            'end-date'     => 'تاریخ پایان',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'روز حضور اجباری به‌روزرسانی شد',
                    'body'  => 'روز حضور اجباری با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'روز حضور اجباری حذف شد',
                    'body'  => 'روز حضور اجباری با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'روزهای حضور اجباری حذف شدند',
                    'body'  => 'روزهای حضور اجباری با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'       => 'نام',
            'start-date' => 'تاریخ شروع',
            'end-date'   => 'تاریخ پایان',
            'color'      => 'رنگ',
        ],
    ],
];
