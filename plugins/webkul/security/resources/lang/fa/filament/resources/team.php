<?php

return [
    'title' => 'تیم‌ها',

    'navigation' => [
        'title' => 'تیم‌ها',
    ],

    'form' => [
        'fields' => [
            'name' => 'نام',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'created-by' => 'ایجادکننده',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تیم به‌روزرسانی شد',
                    'body'  => 'تیم با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تیم حذف شد',
                    'body'  => 'تیم با موفقیت حذف شد.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'تیم‌ها ایجاد شدند',
                    'body'  => 'تیم‌ها با موفقیت ایجاد شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'          => 'نام',
                'job-title'     => 'عنوان شغلی',
                'work-email'    => 'ایمیل کاری',
                'work-mobile'   => 'موبایل کاری',
                'work-phone'    => 'تلفن کاری',
                'manager'       => 'مدیر',
                'department'    => 'دپارتمان',
                'job-position'  => 'سمت شغلی',
                'team-tags'     => 'برچسب‌های تیم',
                'coach'         => 'مربی',
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => 'نام',
        ],
    ],
];
