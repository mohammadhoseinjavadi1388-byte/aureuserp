<?php

return [
    'title' => 'وظایف',

    'navigation' => [
        'title' => 'وظایف',
    ],

    'global-search' => [
        'project'   => 'پروژه',
        'customer'  => 'مشتری',
        'milestone' => 'نقطه عطف',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'title'             => 'عنوان',
                    'title-placeholder' => 'عنوان وظیفه...',
                    'tags'              => 'برچسب‌ها',
                    'name'              => 'نام',
                    'color'             => 'رنگ',
                    'description'       => 'توضیحات',
                    'project'           => 'پروژه',
                    'status'            => 'وضعیت',
                    'start_date'        => 'تاریخ شروع',
                    'end_date'          => 'تاریخ پایان',
                ],
            ],

            'additional' => [
                'title' => 'اطلاعات تکمیلی',
            ],

            'settings' => [
                'title' => 'تنظیمات',

                'fields' => [
                    'project'                     => 'پروژه',
                    'milestone'                   => 'نقطه عطف',
                    'milestone-hint-text'         => 'با اتصال نقطه عطف به یک قلم سفارش فروش، خدمات شما پس از رسیدن به آن نقطه عطف به‌صورت خودکار تحویل می‌شود.',
                    'name'                        => 'نام',
                    'deadline'                    => 'مهلت',
                    'is-completed'                => 'تکمیل‌شده',
                    'customer'                    => 'مشتری',
                    'assignees'                   => 'مسئولان',
                    'allocated-hours'             => 'ساعات تخصیص‌یافته',
                    'allocated-hours-helper-text' => 'بر حسب ساعت (مثلاً 1.5 ساعت یعنی 1 ساعت و 30 دقیقه)',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                  => 'شناسه',
            'priority'            => 'اولویت',
            'state'               => 'وضعیت',
            'new-state'           => 'وضعیت جدید',
            'update-state'        => 'به‌روزرسانی وضعیت',
            'title'               => 'عنوان',
            'project'             => 'پروژه',
            'project-placeholder' => 'وظیفه خصوصی',
            'milestone'           => 'نقطه عطف',
            'customer'            => 'مشتری',
            'assignees'           => 'مسئولان',
            'allocated-time'      => 'زمان تخصیص‌یافته',
            'time-spent'          => 'زمان صرف‌شده',
            'time-remaining'      => 'زمان باقی‌مانده',
            'progress'            => 'پیشرفت',
            'deadline'            => 'مهلت',
            'tags'                => 'برچسب‌ها',
            'stage'               => 'مرحله',
        ],

        'groups' => [
            'state'      => 'وضعیت',
            'project'    => 'پروژه',
            'milestone'  => 'نقطه عطف',
            'customer'   => 'مشتری',
            'deadline'   => 'مهلت',
            'stage'      => 'مرحله',
            'created-at' => 'تاریخ ایجاد',
        ],

        'filters' => [
            'title'             => 'عنوان',
            'priority'          => 'اولویت',
            'low'               => 'کم',
            'high'              => 'زیاد',
            'state'             => 'وضعیت',
            'tags'              => 'برچسب‌ها',
            'allocated-hours'   => 'ساعات تخصیص‌یافته',
            'total-hours-spent' => 'مجموع ساعات صرف‌شده',
            'remaining-hours'   => 'ساعات باقی‌مانده',
            'overtime'          => 'اضافه‌کاری',
            'progress'          => 'پیشرفت',
            'deadline'          => 'مهلت',
            'created-at'        => 'تاریخ ایجاد',
            'updated-at'        => 'تاریخ به‌روزرسانی',
            'assignees'         => 'مسئولان',
            'customer'          => 'مشتری',
            'project'           => 'پروژه',
            'stage'             => 'مرحله',
            'milestone'         => 'نقطه عطف',
            'company'           => 'شرکت',
            'creator'           => 'ایجادکننده',
        ],

        'actions' => [
            'update-state' => [
                'modal-heading' => 'به‌روزرسانی وضعیت وظیفه',
            ],

            'restore' => [
                'notification' => [
                    'title' => 'وظیفه بازیابی شد',
                    'body'  => 'وظیفه با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'وظیفه حذف شد',
                    'body'  => 'وظیفه با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'وظیفه برای همیشه حذف شد',
                    'body'  => 'وظیفه با موفقیت برای همیشه حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'وظایف بازیابی شدند',
                    'body'  => 'وظایف با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'وظایف حذف شدند',
                    'body'  => 'وظایف با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'وظایف برای همیشه حذف شدند',
                    'body'  => 'وظایف با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'entries' => [
                    'title'       => 'عنوان',
                    'state'       => 'وضعیت',
                    'tags'        => 'برچسب‌ها',
                    'priority'    => 'اولویت',
                    'description' => 'توضیحات',
                ],
            ],

            'project-information' => [
                'title' => 'اطلاعات پروژه',

                'entries' => [
                    'project'   => 'پروژه',
                    'milestone' => 'نقطه عطف',
                    'customer'  => 'مشتری',
                    'assignees' => 'مسئولان',
                    'deadline'  => 'مهلت',
                    'stage'     => 'مرحله',
                ],
            ],

            'time-tracking' => [
                'title' => 'ردیابی زمان',

                'entries' => [
                    'allocated-time'        => 'زمان تخصیص‌یافته',
                    'time-spent'            => 'زمان صرف‌شده',
                    'time-spent-suffix'     => ' ساعت',
                    'time-remaining'        => 'زمان باقی‌مانده',
                    'time-remaining-suffix' => ' ساعت',
                    'progress'              => 'پیشرفت',
                ],
            ],

            'additional-information' => [
                'title' => 'اطلاعات تکمیلی',
            ],

            'record-information' => [
                'title' => 'اطلاعات رکورد',

                'entries' => [
                    'created-at'   => 'تاریخ ایجاد',
                    'created-by'   => 'ایجادکننده',
                    'last-updated' => 'آخرین به‌روزرسانی',
                ],
            ],

            'statistics' => [
                'title' => 'آمار',

                'entries' => [
                    'sub-tasks'         => 'زیروظیفه‌ها',
                    'timesheet-entries' => 'ردیف‌های برگه ثبت ساعت کاری',
                ],
            ],
        ],
    ],
];
