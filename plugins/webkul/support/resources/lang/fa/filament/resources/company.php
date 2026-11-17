<?php

return [
    'title' => 'شرکت‌ها',

    'navigation' => [
        'title' => 'شرکت‌ها',
    ],

    'global-search' => [
        'email' => 'ایمیل',
    ],

    'form' => [
        'sections' => [
            'company-information' => [
                'title'  => 'اطلاعات شرکت',
                'fields' => [
                    'name'                  => 'نام شرکت',
                    'registration-number'   => 'شماره ثبت',
                    'company-id'            => 'شناسه شرکت',
                    'tax-id'                => 'شناسه مالیاتی',
                    'tax-id-tooltip'        => 'شناسه مالیاتی، شناسه یکتای شرکت شما است.',
                    'website'               => 'وب‌سایت',
                ],
            ],

            'address-information' => [
                'title'  => 'اطلاعات نشانی',

                'fields' => [
                    'street1'        => 'خیابان 1',
                    'street2'        => 'خیابان 2',
                    'city'           => 'شهر',
                    'zipcode'        => 'کد پستی',
                    'country'        => 'کشور',
                    'currency-name'  => 'نام ارز',
                    'phone-code'     => 'پیش‌شماره تلفن',
                    'code'           => 'کد',
                    'country-name'   => 'نام کشور',
                    'state-required' => 'استان الزامی است',
                    'zip-required'   => 'کد پستی الزامی است',
                    'create-country' => 'ایجاد کشور',
                    'state'          => 'استان',
                    'state-name'     => 'نام استان',
                    'state-code'     => 'کد استان',
                    'create-state'   => 'ایجاد استان',
                ],
            ],

            'additional-information' => [
                'title' => 'اطلاعات تکمیلی',

                'fields' => [
                    'default-currency'        => 'ارز پیش‌فرض',
                    'currency-name'           => 'نام ارز',
                    'currency-full-name'      => 'نام کامل ارز',
                    'currency-symbol'         => 'نماد ارز',
                    'currency-iso-numeric'    => 'کد عددی ISO ارز',
                    'currency-decimal-places' => 'تعداد ارقام اعشار ارز',
                    'currency-rounding'       => 'گرد کردن ارز',
                    'currency-status'         => 'وضعیت ارز',
                    'company-foundation-date' => 'تاریخ تأسیس شرکت',
                    'currency-create'         => 'ایجاد ارز',
                    'status'                  => 'وضعیت',
                ],
            ],

            'branding' => [
                'title'  => 'برندینگ',
                'fields' => [
                    'company-logo' => 'لوگوی شرکت',
                    'color'        => 'رنگ',
                ],
            ],

            'contact-information' => [
                'title'  => 'اطلاعات تماس',
                'fields' => [
                    'email'  => 'نشانی ایمیل',
                    'phone'  => 'شماره تلفن',
                    'mobile' => 'شماره موبایل',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'لوگو',
            'company-name'         => 'نام شرکت',
            'branches'             => 'شعبه‌ها',
            'email'                => 'ایمیل',
            'city'                 => 'شهر',
            'country'              => 'کشور',
            'currency'             => 'ارز',
            'status'               => 'وضعیت',
            'created-by'           => 'ایجادکننده',
            'created-at'           => 'تاریخ ایجاد',
            'updated-at'           => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'company-name' => 'نام شرکت',
            'city'         => 'شهر',
            'country'      => 'کشور',
            'state'        => 'استان',
            'email'        => 'ایمیل',
            'phone'        => 'تلفن',
            'currency'     => 'ارز',
            'created-by'   => 'ایجادکننده',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'status'  => 'وضعیت',
            'country' => 'کشور',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'شرکت ویرایش شد',
                    'body'  => 'شرکت با موفقیت ویرایش شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'شرکت حذف شد',
                    'body'  => 'شرکت با موفقیت حذف شد.',

                    'default-company' => [
                        'title' => 'شرکت پیش‌فرض قابل حذف نیست',
                        'body'  => 'نمی‌توانید شرکتی را که به‌عنوان شرکت پیش‌فرض شما تعیین شده است حذف کنید.',
                    ],
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'شرکت بازیابی شد',
                    'body'  => 'شرکت با موفقیت بازیابی شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'شرکت برای همیشه حذف شد',
                        'body'  => 'شرکت با موفقیت برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف دائمی شرکت ناموفق بود',
                        'body'  => 'این شرکت با رکوردهای دیگری مرتبط است و حذف دائمی آن ممکن نیست.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'شرکت‌ها بازیابی شدند',
                    'body'  => 'شرکت‌ها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'شرکت‌ها حذف شدند',
                    'body'  => 'شرکت‌ها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'شرکت‌ها برای همیشه حذف شدند',
                    'body'  => 'شرکت‌ها با موفقیت برای همیشه حذف شدند.',

                    'error' => [
                        'title' => 'حذف دائمی شرکت‌ها ناموفق بود',
                        'body'  => 'این شرکت‌ها با رکوردهای دیگری مرتبط هستند و حذف دائمی آن‌ها ممکن نیست.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'شرکت‌ها ایجاد شدند',
                    'body'  => 'شرکت‌ها با موفقیت ایجاد شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'company-information' => [
                'title'   => 'اطلاعات شرکت',
                'entries' => [
                    'name'                  => 'نام شرکت',
                    'registration-number'   => 'شماره ثبت',
                    'company-id'            => 'شناسه شرکت',
                    'tax-id'                => 'شناسه مالیاتی',
                    'tax-id-tooltip'        => 'شناسه مالیاتی، شناسه یکتای شرکت شما است.',
                    'website'               => 'وب‌سایت',
                ],
            ],

            'address-information' => [
                'title'  => 'اطلاعات نشانی',

                'entries' => [
                    'street1'        => 'خیابان 1',
                    'street2'        => 'خیابان 2',
                    'city'           => 'شهر',
                    'zipcode'        => 'کد پستی',
                    'country'        => 'کشور',
                    'currency-name'  => 'نام ارز',
                    'phone-code'     => 'پیش‌شماره تلفن',
                    'code'           => 'کد',
                    'country-name'   => 'نام کشور',
                    'state-required' => 'استان الزامی است',
                    'zip-required'   => 'کد پستی الزامی است',
                    'create-country' => 'ایجاد کشور',
                    'state'          => 'استان',
                    'state-name'     => 'نام استان',
                    'state-code'     => 'کد استان',
                    'create-state'   => 'ایجاد استان',
                ],
            ],

            'additional-information' => [
                'title' => 'اطلاعات تکمیلی',

                'entries' => [
                    'default-currency'        => 'ارز پیش‌فرض',
                    'currency-name'           => 'نام ارز',
                    'currency-full-name'      => 'نام کامل ارز',
                    'currency-symbol'         => 'نماد ارز',
                    'currency-iso-numeric'    => 'کد عددی ISO ارز',
                    'currency-decimal-places' => 'تعداد ارقام اعشار ارز',
                    'currency-rounding'       => 'گرد کردن ارز',
                    'currency-status'         => 'وضعیت ارز',
                    'company-foundation-date' => 'تاریخ تأسیس شرکت',
                    'currency-create'         => 'ایجاد ارز',
                    'status'                  => 'وضعیت',
                ],
            ],

            'branding' => [
                'title'   => 'برندینگ',
                'entries' => [
                    'company-logo' => 'لوگوی شرکت',
                    'color'        => 'رنگ',
                ],
            ],

            'contact-information' => [
                'title'   => 'اطلاعات تماس',
                'entries' => [
                    'email'  => 'نشانی ایمیل',
                    'phone'  => 'شماره تلفن',
                    'mobile' => 'شماره موبایل',
                ],
            ],
        ],
    ],
];
