<?php

return [
    'title' => 'کاربران',

    'navigation' => [
        'title' => 'کاربران',
    ],

    'global-search' => [
        'email' => 'ایمیل',
    ],

    'form' => [
        'validation' => [
            'cannot-remove-last-admin'   => 'نمی‌توان نقش مدیر سیستم را از آخرین کاربر مدیر حذف کرد.',
            'first-user-must-be-admin'   => 'به اولین کاربر سیستم باید نقش مدیر سیستم اختصاص داده شود.',
        ],

        'sections' => [
            'general-information' => [
                'title'  => 'اطلاعات عمومی',
                'fields' => [
                    'name'                  => 'نام',
                    'email'                 => 'ایمیل',
                    'password'              => 'رمز عبور',
                    'password-confirmation' => 'تکرار رمز عبور',
                ],
            ],

            'permissions' => [
                'title'  => 'مجوزها',
                'fields' => [
                    'roles'                                    => 'نقش‌ها',
                    'permissions'                              => 'مجوزها',
                    'resource-permission'                      => 'سطح دسترسی به رکوردها',
                    'resource-permission-self-change-disabled' => 'نمی‌توانید سطح دسترسی به رکوردهای خودتان را تغییر دهید. از یک مدیر سیستم دیگر بخواهید آن را به‌روزرسانی کند.',
                    'teams'                                    => 'تیم‌ها',
                ],
            ],

            'avatar' => [
                'title' => 'تصویر کاربر',
            ],

            'lang-and-status' => [
                'title'  => 'زبان و وضعیت',
                'fields' => [
                    'language' => 'زبان دلخواه',
                    'status'   => 'وضعیت',
                ],
            ],

            'multi-company' => [
                'title'                       => 'چندشرکتی',
                'allowed-companies'           => 'شرکت‌های مجاز',
                'default-company'             => 'شرکت پیش‌فرض',
                'default-company-not-allowed' => 'شرکت پیش‌فرض باید یکی از شرکت‌های مجاز باشد.',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'avatar'              => 'تصویر کاربر',
            'name'                => 'نام',
            'email'               => 'ایمیل',
            'teams'               => 'تیم‌ها',
            'role'                => 'نقش',
            'resource-permission' => 'سطح دسترسی به رکوردها',
            'default-company'     => 'شرکت پیش‌فرض',
            'allowed-company'     => 'شرکت مجاز',
            'created-by'          => 'ایجادکننده',
            'created-at'          => 'تاریخ ایجاد',
            'updated-at'          => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'resource-permission' => 'سطح دسترسی به رکوردها',
            'teams'               => 'تیم‌ها',
            'roles'               => 'نقش‌ها',
            'default-company'     => 'شرکت پیش‌فرض',
            'allowed-companies'   => 'شرکت‌های مجاز',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'کاربر ویرایش شد',
                    'body'  => 'کاربر با موفقیت ویرایش شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'کاربر حذف شد',
                    'body'  => 'کاربر با موفقیت حذف شد.',
                    'error' => [
                        'title' => 'کاربر قابل حذف نیست',
                        'body'  => 'این کاربر پیش‌فرض است یا شما نمی‌توانید حساب خودتان را حذف کنید.',
                    ],
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'کاربر بازیابی شد',
                    'body'  => 'کاربر با موفقیت بازیابی شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'کاربران بازیابی شدند',
                    'body'  => 'کاربران با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'کاربران حذف شدند',
                    'body'  => 'کاربران با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'کاربران برای همیشه حذف شدند',
                    'body'  => 'کاربران با موفقیت برای همیشه حذف شدند.',
                    'error' => [
                        'title' => 'حذف کاربر ممکن نیست',
                        'body'  => 'این کاربر در حال استفاده است و نمی‌توان آن را حذف کرد.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'کاربران ایجاد شدند',
                    'body'  => 'کاربران با موفقیت ایجاد شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title'   => 'اطلاعات عمومی',
                'entries' => [
                    'name'                  => 'نام',
                    'email'                 => 'ایمیل',
                    'password'              => 'رمز عبور',
                    'password-confirmation' => 'تکرار رمز عبور',
                ],
            ],

            'permissions' => [
                'title'   => 'مجوزها',
                'entries' => [
                    'roles'               => 'نقش‌ها',
                    'permissions'         => 'مجوزها',
                    'resource-permission' => 'سطح دسترسی به رکوردها',
                    'teams'               => 'تیم‌ها',
                ],
            ],

            'avatar' => [
                'title' => 'تصویر کاربر',
            ],

            'lang-and-status' => [
                'title'   => 'زبان و وضعیت',
                'entries' => [
                    'language' => 'زبان دلخواه',
                    'status'   => 'وضعیت',
                ],
            ],

            'multi-company' => [
                'title'                       => 'چندشرکتی',
                'allowed-companies'           => 'شرکت‌های مجاز',
                'default-company'             => 'شرکت پیش‌فرض',
                'default-company-not-allowed' => 'شرکت پیش‌فرض باید یکی از شرکت‌های مجاز باشد.',
            ],
        ],
    ],
];
