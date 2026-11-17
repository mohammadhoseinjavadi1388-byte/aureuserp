<?php

return [
    'title' => 'دپارتمان‌ها',

    'navigation' => [
        'title' => 'دپارتمان‌ها',
        'group' => 'کارمندان',
    ],

    'form' => [
        'sections' => [
            'activity-type-details' => [
                'title' => 'اطلاعات عمومی',

                'fields' => [
                    'name'                => 'نوع فعالیت',
                    'name-tooltip'        => 'نام رسمی نوع فعالیت را وارد کنید',
                    'action'              => 'اقدام',
                    'default-user'        => 'کاربر پیش‌فرض',
                    'summary'             => 'خلاصه',
                    'note'                => 'یادداشت',
                ],
            ],

            'delay-information' => [
                'title' => 'اطلاعات تأخیر',

                'fields' => [
                    'delay-count'            => 'مقدار تأخیر',
                    'delay-unit'             => 'واحد تأخیر',
                    'delay-form'             => 'مبنای تأخیر',
                    'delay-form-helper-text' => 'مبنای محاسبه تأخیر',
                ],
            ],

            'advanced-information' => [
                'title' => 'اطلاعات پیشرفته',

                'fields' => [
                    'icon'                => 'آیکون',
                    'decoration-type'     => 'نوع نمایش',
                    'chaining-type'       => 'نوع زنجیره',
                    'suggest'             => 'پیشنهاد',
                    'trigger'             => 'ایجاد خودکار',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'وضعیت و پیکربندی',

                'fields' => [
                    'status'               => 'وضعیت',
                    'keep-done-activities' => 'نگهداری فعالیت‌های انجام‌شده',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نوع فعالیت',
            'summary'    => 'خلاصه',
            'planned-in' => 'برنامه‌ریزی در',
            'type'       => 'نوع',
            'action'     => 'اقدام',
            'status'     => 'وضعیت',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'name'             => 'نام',
            'action-category'  => 'دسته‌بندی اقدام',
            'status'           => 'وضعیت',
            'delay-count'      => 'مقدار تأخیر',
            'delay-unit'       => 'واحد تأخیر',
            'delay-source'     => 'مبنای تأخیر',
            'associated-model' => 'مدل مرتبط',
            'chaining-type'    => 'نوع زنجیره',
            'decoration-type'  => 'نوع نمایش',
            'default-user'     => 'کاربر پیش‌فرض',
            'creation-date'    => 'تاریخ ایجاد',
            'last-update'      => 'آخرین به‌روزرسانی',
        ],

        'filters' => [
            'action'    => 'اقدام',
            'status'    => 'وضعیت',
            'has-delay' => 'دارای تأخیر',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'نوع فعالیت بازیابی شد',
                    'body'  => 'نوع فعالیت با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'نوع فعالیت حذف شد',
                    'body'  => 'نوع فعالیت با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'نوع فعالیت برای همیشه حذف شد',
                        'body'  => 'نوع فعالیت با موفقیت برای همیشه حذف شد.',
                    ],
                    'error' => [
                        'title' => 'حذف نوع فعالیت ممکن نیست',
                        'body'  => 'این نوع فعالیت در حال استفاده است و نمی‌توان آن را حذف کرد.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'انواع فعالیت بازیابی شدند',
                    'body'  => 'انواع فعالیت با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'انواع فعالیت حذف شدند',
                    'body'  => 'انواع فعالیت با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'انواع فعالیت برای همیشه حذف شدند',
                    'body'  => 'انواع فعالیت با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-type-details' => [
                'title' => 'اطلاعات عمومی',

                'entries' => [
                    'name'                => 'نوع فعالیت',
                    'name-tooltip'        => 'نام رسمی نوع فعالیت را وارد کنید',
                    'action'              => 'اقدام',
                    'default-user'        => 'کاربر پیش‌فرض',
                    'plugin'              => 'افزونه',
                    'summary'             => 'خلاصه',
                    'note'                => 'یادداشت',
                ],
            ],

            'delay-information' => [
                'title' => 'اطلاعات تأخیر',

                'entries' => [
                    'delay-count'            => 'مقدار تأخیر',
                    'delay-unit'             => 'واحد تأخیر',
                    'delay-form'             => 'مبنای تأخیر',
                    'delay-form-helper-text' => 'مبنای محاسبه تأخیر',
                ],
            ],

            'advanced-information' => [
                'title' => 'اطلاعات پیشرفته',

                'entries' => [
                    'icon'                => 'آیکون',
                    'decoration-type'     => 'نوع نمایش',
                    'chaining-type'       => 'نوع زنجیره',
                    'suggest'             => 'پیشنهاد',
                    'trigger'             => 'ایجاد خودکار',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'وضعیت و پیکربندی',

                'entries' => [
                    'status'               => 'وضعیت',
                    'keep-done-activities' => 'نگهداری فعالیت‌های انجام‌شده',
                ],
            ],
        ],
    ],
];
