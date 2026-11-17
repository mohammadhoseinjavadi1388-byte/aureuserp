<?php

return [
    'navigation' => [
        'title' => 'پروژه‌ها',
    ],

    'global-search' => [
        'project-manager' => 'مدیر پروژه',
        'customer'        => 'مشتری',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'name'             => 'نام',
                    'name-placeholder' => 'نام پروژه...',
                    'description'      => 'توضیحات',
                ],
            ],

            'additional' => [
                'title' => 'اطلاعات تکمیلی',

                'fields' => [
                    'project-manager'             => 'مدیر پروژه',
                    'customer'                    => 'مشتری',
                    'start-date'                  => 'تاریخ شروع',
                    'end-date'                    => 'تاریخ پایان',
                    'allocated-hours'             => 'ساعات تخصیص‌یافته',
                    'allocated-hours-helper-text' => 'به ساعت (مثلاً 1.5 ساعت یعنی 1 ساعت و 30 دقیقه)',
                    'tags'                        => 'برچسب‌ها',
                    'company'                     => 'شرکت',
                ],
            ],

            'settings' => [
                'title' => 'تنظیمات',

                'fields' => [
                    'visibility'                   => 'سطح دسترسی',
                    'visibility-hint-tooltip'      => 'با افزودن کارمندان به‌عنوان دنبال‌کننده، به آن‌ها اجازه دهید به پروژه یا وظایف شما دسترسی داشته باشند. آن‌ها به‌طور خودکار به هر وظیفه‌ای که به آن‌ها واگذار شود دسترسی پیدا می‌کنند.',
                    'private-description'          => 'فقط کاربران داخلی دعوت‌شده.',
                    'internal-description'         => 'همه کاربران داخلی می‌توانند ببینند.',
                    'public-description'           => 'کاربران دعوت‌شده پورتال و همه کاربران داخلی.',
                    'time-management'              => 'مدیریت زمان',
                    'allow-timesheets'             => 'مجاز بودن برگه‌های ثبت ساعت کاری',
                    'allow-timesheets-helper-text' => 'زمان صرف‌شده برای وظایف را ثبت و پیشرفت را پیگیری کنید',
                    'task-management'              => 'مدیریت وظایف',
                    'allow-milestones'             => 'مجاز بودن نقاط عطف',
                    'allow-milestones-helper-text' => 'نقاط عطف کلیدی را که برای دستیابی به موفقیت ضروری هستند پایش کنید.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'            => 'نام',
            'customer'        => 'مشتری',
            'start-date'      => 'تاریخ شروع',
            'end-date'        => 'تاریخ پایان',
            'planned-date'    => 'تاریخ برنامه‌ریزی‌شده',
            'remaining-hours' => 'ساعات باقی‌مانده',
            'project-manager' => 'مدیر پروژه',
        ],

        'groups' => [
            'stage'           => 'مرحله',
            'project-manager' => 'مدیر پروژه',
            'customer'        => 'مشتری',
            'created-at'      => 'تاریخ ایجاد',
        ],

        'filters' => [
            'name'             => 'نام',
            'visibility'       => 'سطح دسترسی',
            'start-date'       => 'تاریخ شروع',
            'end-date'         => 'تاریخ پایان',
            'allow-timesheets' => 'مجاز بودن برگه‌های ثبت ساعت کاری',
            'allow-milestones' => 'مجاز بودن نقاط عطف',
            'allocated-hours'  => 'ساعات تخصیص‌یافته',
            'created-at'       => 'تاریخ ایجاد',
            'updated-at'       => 'تاریخ به‌روزرسانی',
            'stage'            => 'مرحله',
            'customer'         => 'مشتری',
            'project-manager'  => 'مدیر پروژه',
            'company'          => 'شرکت',
            'creator'          => 'ایجادکننده',
            'tags'             => 'برچسب‌ها',
        ],

        'actions' => [
            'tasks'      => ':count وظیفه',
            'milestones' => ':completed نقطه عطف از :all تکمیل شده است',

            'restore' => [
                'notification' => [
                    'title' => 'پروژه بازیابی شد',
                    'body'  => 'پروژه با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'پروژه حذف شد',
                    'body'  => 'پروژه با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [

                'notification' => [

                    'success' => [
                        'title' => 'پروژه حذف دائمی شد',
                        'body'  => 'پروژه با موفقیت حذف دائمی شد.',
                    ],

                    'error' => [
                        'title' => 'حذف دائمی پروژه ممکن نیست',
                        'body'  => 'این پروژه با رکوردهای دیگری مرتبط است.',
                    ],

                ],
            ],

        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'entries' => [
                    'name'             => 'نام',
                    'name-placeholder' => 'نام پروژه...',
                    'description'      => 'توضیحات',
                ],
            ],

            'additional' => [
                'title' => 'اطلاعات تکمیلی',

                'entries' => [
                    'project-manager'        => 'مدیر پروژه',
                    'customer'               => 'مشتری',
                    'project-timeline'       => 'زمان‌بندی پروژه',
                    'allocated-hours'        => 'ساعات تخصیص‌یافته',
                    'allocated-hours-suffix' => ' ساعت',
                    'remaining-hours'        => 'ساعات باقی‌مانده',
                    'remaining-hours-suffix' => ' ساعت',
                    'current-stage'          => 'مرحله فعلی',
                    'tags'                   => 'برچسب‌ها',
                ],
            ],

            'statistics' => [
                'title' => 'آمار',

                'entries' => [
                    'total-tasks'         => 'کل وظایف',
                    'milestones-progress' => 'پیشرفت نقاط عطف',
                ],
            ],

            'record-information' => [
                'title' => 'اطلاعات رکورد',

                'entries' => [
                    'created-at'   => 'تاریخ ایجاد',
                    'created-by'   => 'ایجادکننده',
                    'last-updated' => 'آخرین به‌روزرسانی',
                ],
            ],

            'settings' => [
                'title' => 'تنظیمات پروژه',

                'entries' => [
                    'visibility'         => 'سطح دسترسی',
                    'timesheets-enabled' => 'برگه‌های ثبت ساعت کاری فعال است',
                    'milestones-enabled' => 'نقاط عطف فعال است',
                ],
            ],
        ],
    ],
];
