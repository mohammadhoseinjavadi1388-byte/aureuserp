<?php

return [
    'title' => 'برنامه‌های کاری',

    'navigation' => [
        'title' => 'برنامه‌های کاری',
    ],

    'groups' => [
        'status'     => 'وضعیت',
        'created-by' => 'ایجادکننده',
        'created-at' => 'تاریخ ایجاد',
        'updated-at' => 'تاریخ به‌روزرسانی',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'اطلاعات عمومی',
                'fields' => [
                    'name'                  => 'نام',
                    'schedule-name'         => 'نام برنامه کاری',
                    'schedule-name-tooltip' => 'لطفاً نامی گویا برای برنامه کاری وارد کنید.',
                    'timezone'              => 'منطقه زمانی',
                    'timezone-tooltip'      => 'لطفاً منطقه زمانی برنامه کاری را انتخاب کنید.',
                    'company'               => 'شرکت',
                ],
            ],

            'configuration' => [
                'title'  => 'پیکربندی ساعات کاری',
                'fields' => [
                    'hours-per-day'                   => 'ساعت کاری در روز',
                    'hours-per-day-suffix'            => 'ساعت',
                    'full-time-required-hours'        => 'ساعات موظفی تمام‌وقت',
                    'full-time-required-hours-suffix' => 'ساعت در هفته',
                ],
            ],

            'flexibility' => [
                'title'  => 'انعطاف‌پذیری',
                'fields' => [
                    'status'                     => 'وضعیت',
                    'two-weeks-calendar'         => 'تقویم دوهفته‌ای',
                    'two-weeks-calendar-tooltip' => 'برنامه کاری دوهفته‌ای متناوب را فعال کنید.',
                    'flexible-hours'             => 'ساعات کاری شناور',
                    'flexible-hours-tooltip'     => 'به کارمندان اجازه دهید ساعات کاری شناور داشته باشند.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'             => 'ID',
            'name'           => 'نام برنامه کاری',
            'timezone'       => 'منطقه زمانی',
            'company'        => 'شرکت',
            'flexible-hours' => 'ساعات کاری شناور',
            'status'         => 'وضعیت',
            'daily-hours'    => 'ساعات روزانه',
            'created-by'     => 'ایجادکننده',
            'created-at'     => 'تاریخ ایجاد',
            'updated-at'     => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'company'                  => 'شرکت',
            'is-active'                => 'وضعیت',
            'two-week-calendar'        => 'تقویم دوهفته‌ای',
            'flexible-hours'           => 'ساعات کاری شناور',
            'timezone'                 => 'منطقه زمانی',
            'name'                     => 'نام برنامه کاری',
            'attendance'               => 'حضور و غیاب',
            'created-by'               => 'ایجادکننده',
            'daily-hours'              => 'ساعات روزانه',
            'full-time-required-hours' => 'ساعات موظفی تمام‌وقت',
            'updated-at'               => 'تاریخ به‌روزرسانی',
            'created-at'               => 'تاریخ ایجاد',
        ],

        'groups' => [
            'name'           => 'نام برنامه کاری',
            'status'         => 'وضعیت',
            'timezone'       => 'منطقه زمانی',
            'flexible-hours' => 'ساعات کاری شناور',
            'daily-hours'    => 'ساعات روزانه',
            'created-by'     => 'ایجادکننده',
            'created-at'     => 'تاریخ ایجاد',
            'updated-at'     => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'برنامه تقویم بازیابی شد',
                    'body'  => 'برنامه تقویم با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'برنامه تقویم حذف شد',
                    'body'  => 'برنامه تقویم با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'برنامه تقویم برای همیشه حذف شد',
                    'body'  => 'برنامه تقویم با موفقیت برای همیشه حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'برنامه‌های تقویم بازیابی شدند',
                    'body'  => 'برنامه‌های تقویم با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'برنامه‌های تقویم حذف شدند',
                    'body'  => 'برنامه‌های تقویم با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'برنامه‌های تقویم برای همیشه حذف شدند',
                    'body'  => 'برنامه‌های تقویم با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'اطلاعات عمومی',
                'entries' => [
                    'name'                  => 'نام',
                    'schedule-name'         => 'نام برنامه کاری',
                    'schedule-name-tooltip' => 'لطفاً نامی گویا برای برنامه کاری وارد کنید.',
                    'timezone'              => 'منطقه زمانی',
                    'timezone-tooltip'      => 'لطفاً منطقه زمانی برنامه کاری را انتخاب کنید.',
                    'company'               => 'شرکت',
                ],
            ],

            'configuration' => [
                'title'   => 'پیکربندی ساعات کاری',
                'entries' => [
                    'hours-per-day'                   => 'ساعت کاری در روز',
                    'hours-per-day-suffix'            => ' ساعت',
                    'full-time-required-hours'        => 'ساعات موظفی تمام‌وقت',
                    'full-time-required-hours-suffix' => ' ساعت در هفته',
                ],
            ],

            'flexibility' => [
                'title'   => 'انعطاف‌پذیری',
                'entries' => [
                    'status'                     => 'وضعیت',
                    'two-weeks-calendar'         => 'تقویم دوهفته‌ای',
                    'two-weeks-calendar-tooltip' => 'برنامه کاری دوهفته‌ای متناوب را فعال کنید.',
                    'flexible-hours'             => 'ساعات کاری شناور',
                    'flexible-hours-tooltip'     => 'به کارمندان اجازه دهید ساعات کاری شناور داشته باشند.',
                ],
            ],
        ],
    ],
];
