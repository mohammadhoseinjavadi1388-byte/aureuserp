<?php

return [
    'title' => 'محل‌های کار',

    'navigation' => [
        'title' => 'محل‌های کار',
        'group' => 'کارمند',
    ],

    'form' => [
        'name'            => 'نام',
        'company'         => 'شرکت',
        'location-type'   => 'نوع محل',
        'location-number' => 'شماره محل',
        'status'          => 'وضعیت',
    ],

    'table' => [
        'columns' => [
            'id'              => 'شناسه',
            'name'            => 'نام',
            'status'          => 'وضعیت',
            'company'         => 'شرکت',
            'location-type'   => 'نوع محل',
            'location-number' => 'شماره محل',
            'deleted-at'      => 'تاریخ حذف',
            'created-by'      => 'ایجادکننده',
            'created-at'      => 'تاریخ ایجاد',
            'updated-at'      => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'name'            => 'نام',
            'status'          => 'وضعیت',
            'created-by'      => 'ایجادکننده',
            'company'         => 'شرکت',
            'location-number' => 'شماره محل',
            'location-type'   => 'نوع محل',
            'updated-at'      => 'تاریخ به‌روزرسانی',
            'created-at'      => 'تاریخ ایجاد',
        ],

        'groups' => [
            'name'          => 'نام',
            'status'        => 'وضعیت',
            'location-type' => 'نوع محل',
            'company'       => 'شرکت',
            'created-by'    => 'ایجادکننده',
            'created-at'    => 'تاریخ ایجاد',
            'updated-at'    => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'محل کار به‌روزرسانی شد',
                    'body'  => 'محل کار با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'محل کار بازیابی شد',
                    'body'  => 'محل کار با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'محل کار حذف شد',
                    'body'  => 'محل کار با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'محل کار برای همیشه حذف شد',
                    'body'  => 'محل کار با موفقیت برای همیشه حذف شد.',
                ],
            ],

            'empty-state' => [
                'notification' => [
                    'title' => 'محل کار ایجاد شد',
                    'body'  => 'محل کار با موفقیت ایجاد شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'محل‌های کار حذف شدند',
                    'body'  => 'محل‌های کار با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'محل‌های کار برای همیشه حذف شدند',
                    'body'  => 'محل‌های کار با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'            => 'نام',
        'company'         => 'شرکت',
        'location-type'   => 'نوع محل',
        'location-number' => 'شماره محل',
        'status'          => 'وضعیت',
    ],
];
