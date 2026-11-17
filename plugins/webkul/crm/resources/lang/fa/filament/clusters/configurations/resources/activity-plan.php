<?php

return [
    'model-label'        => 'برنامه فعالیت',
    'plural-model-label' => 'برنامه‌های فعالیت',

    'navigation' => [
        'title' => 'برنامه‌های فعالیت',
        'group' => 'فعالیت‌ها',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'اطلاعات عمومی',
                'fields' => [
                    'name'       => 'نام',
                    'status'     => 'وضعیت',
                    'department' => 'دپارتمان',
                    'company'    => 'شرکت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'status'     => 'وضعیت',
            'department' => 'دپارتمان',
            'company'    => 'شرکت',
            'manager'    => 'مدیر',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'name'           => 'نام',
            'plugin'         => 'افزونه',
            'activity-types' => 'انواع فعالیت',
            'company'        => 'شرکت',
            'department'     => 'دپارتمان',
            'is-active'      => 'وضعیت',
            'updated-at'     => 'تاریخ به‌روزرسانی',
            'created-at'     => 'تاریخ ایجاد',
        ],

        'groups' => [
            'status'     => 'وضعیت',
            'name'       => 'نام',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'برنامه فعالیت بازیابی شد',
                    'body'  => 'برنامه فعالیت با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'برنامه فعالیت حذف شد',
                    'body'  => 'برنامه فعالیت با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'برنامه فعالیت برای همیشه حذف شد',
                    'body'  => 'برنامه فعالیت با موفقیت برای همیشه حذف شد.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'برنامه فعالیت ایجاد شد',
                    'body'  => 'برنامه فعالیت با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'اطلاعات عمومی',
                'entries' => [
                    'name'       => 'نام',
                    'status'     => 'وضعیت',
                    'department' => 'دپارتمان',
                    'manager'    => 'مدیر',
                    'company'    => 'شرکت',
                ],
            ],
        ],
    ],
];
