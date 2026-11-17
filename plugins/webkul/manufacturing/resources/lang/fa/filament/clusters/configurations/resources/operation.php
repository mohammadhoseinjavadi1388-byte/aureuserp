<?php

return [
    'navigation' => [
        'title' => 'عملیات',
        'group' => 'پیکربندی',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',
                'fields' => [
                    'name'              => 'عملیات',
                    'name-placeholder'  => 'مثلاً برش',
                    'bill-of-material'  => 'فهرست مواد (BOM)',
                    'work-center'       => 'مرکز کاری',
                    'apply-on-variants' => 'اعمال روی تنوع‌های محصول',
                    'company'           => 'شرکت',
                    'blocked-by'        => 'مسدودشده توسط',
                ],
            ],
            'settings' => [
                'title'  => 'تنظیمات',
                'fields' => [
                    'time-mode'                  => 'محاسبه مدت',
                    'time-mode-batch'            => 'بر اساس',
                    'time-mode-batch-prefix'     => 'آخرین',
                    'time-mode-batch-suffix'     => 'دستور کار',
                    'manual-cycle-time'          => 'مدت پیش‌فرض',
                    'manual-cycle-time-suffix'   => 'دقیقه',
                ],
            ],
            'worksheet' => [
                'title'  => 'برگه دستورالعمل',
                'fields' => [
                    'worksheet'                => 'برگه دستورالعمل',
                    'pdf'                      => 'PDF',
                    'google-slide'             => 'Google Slide',
                    'google-slide-placeholder' => 'پیوند Google Slide',
                    'description'              => 'توضیحات',
                    'description-placeholder'  => 'توضیحات عملیات...',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'              => 'عملیات',
            'bill-of-material'  => 'فهرست مواد (BOM)',
            'work-center'       => 'مرکز کاری',
            'time-mode'         => 'محاسبه مدت',
            'manual-cycle-time' => 'مدت پیش‌فرض',
            'worksheet-type'    => 'برگه دستورالعمل',
            'deleted-at'        => 'تاریخ حذف',
            'created-at'        => 'تاریخ ایجاد',
            'updated-at'        => 'تاریخ به‌روزرسانی',
        ],
        'filters' => [
            'work-center'    => 'مرکز کاری',
            'time-mode'      => 'محاسبه مدت',
            'worksheet-type' => 'برگه دستورالعمل',
        ],
        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'عملیات بازیابی شد',
                    'body'  => 'عملیات با موفقیت بازیابی شد.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'عملیات بایگانی شد',
                    'body'  => 'عملیات با موفقیت بایگانی شد.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'عملیات حذف شد',
                        'body'  => 'عملیات برای همیشه حذف شد.',
                    ],
                    'error' => [
                        'title' => 'حذف عملیات ممکن نشد',
                        'body'  => 'این عملیات قابل حذف نیست، زیرا در حال حاضر در حال استفاده است.',
                    ],
                ],
            ],
        ],
        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'عملیات بازیابی شدند',
                    'body'  => 'عملیات انتخاب‌شده با موفقیت بازیابی شدند.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'عملیات بایگانی شدند',
                    'body'  => 'عملیات انتخاب‌شده با موفقیت بایگانی شدند.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'عملیات حذف شدند',
                        'body'  => 'عملیات انتخاب‌شده برای همیشه حذف شدند.',
                    ],
                    'error' => [
                        'title' => 'حذف عملیات ممکن نشد',
                        'body'  => 'یک یا چند مورد از عملیات انتخاب‌شده در حال حاضر در حال استفاده است.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'اطلاعات عمومی',
                'entries' => [
                    'name'              => 'عملیات',
                    'bill-of-material'  => 'فهرست مواد (BOM)',
                    'work-center'       => 'مرکز کاری',
                    'apply-on-variants' => 'اعمال روی تنوع‌های محصول',
                    'company'           => 'شرکت',
                ],
            ],
            'settings' => [
                'title'   => 'تنظیمات',
                'entries' => [
                    'time-mode'                => 'محاسبه مدت',
                    'time-mode-batch'          => 'بر اساس',
                    'manual-cycle-time'        => 'مدت پیش‌فرض',
                    'manual-cycle-time-suffix' => 'دقیقه',
                ],
            ],
            'worksheet' => [
                'title'   => 'برگه دستورالعمل',
                'entries' => [
                    'worksheet'    => 'برگه دستورالعمل',
                    'pdf'          => 'PDF',
                    'google-slide' => 'Google Slide',
                    'description'  => 'توضیحات',
                ],
            ],
            'record-information' => [
                'title'   => 'اطلاعات رکورد',
                'entries' => [
                    'created-by'   => 'ایجادکننده',
                    'created-at'   => 'تاریخ ایجاد',
                    'last-updated' => 'آخرین به‌روزرسانی',
                ],
            ],
        ],
    ],
];
