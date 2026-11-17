<?php

return [
    'modal' => [
        'title' => 'ساعات کاری',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'اطلاعات عمومی',
                'fields' => [
                    'attendance-name' => 'عنوان نوبت کاری',
                    'attendance-name' => 'عنوان نوبت کاری',
                    'day-of-week'     => 'روز هفته',
                ],
            ],

            'timing-information' => [
                'title' => 'اطلاعات زمان‌بندی',

                'fields' => [
                    'day-period' => 'بازه روز',
                    'week-type'  => 'نوع هفته',
                    'work-from'  => 'شروع کار',
                    'work-to'    => 'پایان کار',
                ],
            ],

            'date-information' => [
                'title' => 'اطلاعات تاریخ',

                'fields' => [
                    'starting-date' => 'تاریخ شروع',
                    'ending-date'   => 'تاریخ پایان',
                ],
            ],

            'additional-information' => [
                'title' => 'اطلاعات تکمیلی',

                'fields' => [
                    'durations-days' => 'مدت (روز)',
                    'display-type'   => 'نوع نمایش',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'          => 'عنوان نوبت کاری',
            'day-of-week'   => 'روز هفته',
            'day-period'    => 'بازه روز',
            'work-from'     => 'شروع کار',
            'work-to'       => 'پایان کار',
            'starting-date' => 'تاریخ شروع',
            'ending-date'   => 'تاریخ پایان',
            'display-type'  => 'نوع نمایش',
            'created-by'    => 'ایجادکننده',
            'created-at'    => 'تاریخ ایجاد',
            'updated-at'    => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'activity-type' => 'نوع فعالیت',
            'assignment'    => 'واگذاری',
            'assigned-to'   => 'واگذارشده به',
            'interval'      => 'فاصله زمانی',
            'delay-unit'    => 'واحد تأخیر',
            'delay-from'    => 'مبنای تأخیر',
            'created-by'    => 'ایجادکننده',
            'created-at'    => 'تاریخ ایجاد',
            'updated-at'    => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'display-type' => 'نوع نمایش',
            'day-of-week'  => 'روز هفته',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'ساعات کاری به‌روزرسانی شد',
                    'body'  => 'ساعات کاری با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'ساعات کاری ایجاد شد',
                    'body'  => 'ساعات کاری با موفقیت ایجاد شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ساعات کاری حذف شد',
                    'body'  => 'ساعات کاری با موفقیت حذف شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'ساعات کاری بازیابی شد',
                    'body'  => 'ساعات کاری با موفقیت بازیابی شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ساعات کاری حذف شد',
                    'body'  => 'ساعات کاری با موفقیت حذف شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'ساعات کاری حذف شد',
                    'body'  => 'ساعات کاری با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ساعات کاری حذف شد',
                    'body'  => 'ساعات کاری با موفقیت حذف شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'entries' => [
                    'name'        => 'عنوان نوبت کاری',
                    'day-of-week' => 'روز هفته',
                ],
            ],

            'timing-information' => [
                'title' => 'اطلاعات زمان‌بندی',

                'entries' => [
                    'day-period' => 'بازه روز',
                    'week-type'  => 'نوع هفته',
                    'work-from'  => 'شروع کار',
                    'work-to'    => 'پایان کار',
                ],
            ],

            'date-information' => [
                'title' => 'اطلاعات تاریخ',

                'entries' => [
                    'starting-date' => 'تاریخ شروع',
                    'ending-date'   => 'تاریخ پایان',
                ],
            ],

            'additional-information' => [
                'title' => 'اطلاعات تکمیلی',

                'entries' => [
                    'durations-days' => 'مدت (روز)',
                    'display-type'   => 'نوع نمایش',
                ],
            ],
        ],

        'note' => 'یادداشت',
    ],
];
