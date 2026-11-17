<?php

return [
    'form' => [
        'tabs' => [
            'general-information' => [
                'title' => 'اطلاعات عمومی',

                'sections' => [
                    'branch-information' => [
                        'title' => 'اطلاعات شعبه',

                        'fields' => [
                            'company-name'                => 'نام شرکت',
                            'registration-number'         => 'شماره ثبت',
                            'tax-id'                      => 'شناسه مالیاتی',
                            'tax-id-tooltip'              => 'شناسه مالیاتی، شناسه یکتای شرکت شما نزد سازمان مالیاتی است.',
                            'color'                       => 'رنگ',
                            'company-id'                  => 'شناسه شرکت',
                            'company-id-tooltip'          => 'شناسه شرکت، شناسه یکتای شرکت شما است.',
                        ],
                    ],

                    'branding' => [
                        'title'  => 'هویت بصری',
                        'fields' => [
                            'branch-logo' => 'لوگوی شعبه',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => 'اطلاعات نشانی',

                'sections' => [
                    'address-information' => [
                        'title' => 'اطلاعات نشانی',

                        'fields' => [
                            'street1'                => 'نشانی 1',
                            'street2'                => 'نشانی 2',
                            'city'                   => 'شهر',
                            'zip'                    => 'کد پستی',
                            'country'                => 'کشور',
                            'country-currency-name'  => 'نام ارز',
                            'country-phone-code'     => 'پیش‌شماره تلفن',
                            'country-code'           => 'کد',
                            'country-name'           => 'نام کشور',
                            'country-state-required' => 'استان الزامی است',
                            'country-zip-required'   => 'کد پستی الزامی است',
                            'country-create'         => 'ایجاد کشور',
                            'state'                  => 'استان',
                            'state-name'             => 'نام استان',
                            'state-code'             => 'کد استان',
                            'zip-code'               => 'کد پستی',
                            'state-create'           => 'ایجاد استان',
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
                            'currency-create'         => 'ایجاد ارز',
                            'company-foundation-date' => 'تاریخ تأسیس شرکت',
                            'status'                  => 'وضعیت',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'اطلاعات تماس',

                'sections' => [
                    'contact-information' => [
                        'title' => 'اطلاعات تماس',

                        'fields' => [
                            'email-address' => 'نشانی ایمیل',
                            'phone-number'  => 'شماره تلفن',
                            'mobile-number' => 'شماره تلفن',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'لوگو',
            'company-name'         => 'نام شعبه',
            'branches'             => 'شعبه‌ها',
            'email'                => 'ایمیل',
            'city'                 => 'شهر',
            'country'              => 'کشور',
            'currency'             => 'ارز',
            'status'               => 'وضعیت',
            'created-at'           => 'تاریخ ایجاد',
            'updated-at'           => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'company-name' => 'نام شعبه',
            'city'         => 'شهر',
            'country'      => 'کشور',
            'state'        => 'استان',
            'email'        => 'ایمیل',
            'phone'        => 'تلفن',
            'currency'     => 'ارز',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'trashed' => 'حذف‌شده‌ها',
            'status'  => 'وضعیت',
            'country' => 'کشور',
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'شعبه ایجاد شد',
                    'body'  => 'شعبه با موفقیت ایجاد شد.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'شعبه به‌روزرسانی شد',
                    'body'  => 'شعبه با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'شعبه حذف شد',
                    'body'  => 'شعبه با موفقیت حذف شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'شعبه بازیابی شد',
                    'body'  => 'شعبه با موفقیت بازیابی شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'شعبه‌ها بازیابی شدند',
                    'body'  => 'شعبه‌ها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'شعبه‌ها حذف شدند',
                    'body'  => 'شعبه‌ها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'شعبه‌ها برای همیشه حذف شدند',
                    'body'  => 'شعبه‌ها با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'general-information' => [
                'title' => 'اطلاعات عمومی',

                'sections' => [
                    'branch-information' => [
                        'title' => 'اطلاعات شعبه',

                        'entries' => [
                            'company-name'                => 'نام شرکت',
                            'registration-number'         => 'شماره ثبت',
                            'tax-id'                      => 'شناسه مالیاتی',
                            'registration-number-tooltip' => 'شناسه مالیاتی، شناسه یکتای شرکت شما نزد سازمان مالیاتی است.',
                            'color'                       => 'رنگ',
                        ],
                    ],

                    'branding' => [
                        'title'   => 'هویت بصری',
                        'entries' => [
                            'branch-logo' => 'لوگوی شعبه',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => 'اطلاعات نشانی',

                'sections' => [
                    'address-information' => [
                        'title' => 'اطلاعات نشانی',

                        'entries' => [
                            'street1'                => 'نشانی 1',
                            'street2'                => 'نشانی 2',
                            'city'                   => 'شهر',
                            'zip'                    => 'کد پستی',
                            'country'                => 'کشور',
                            'country-currency-name'  => 'نام ارز',
                            'country-phone-code'     => 'پیش‌شماره تلفن',
                            'country-code'           => 'کد',
                            'country-name'           => 'نام کشور',
                            'country-state-required' => 'استان الزامی است',
                            'country-zip-required'   => 'کد پستی الزامی است',
                            'country-create'         => 'ایجاد کشور',
                            'state'                  => 'استان',
                            'state-name'             => 'نام استان',
                            'state-code'             => 'کد استان',
                            'zip-code'               => 'کد پستی',
                            'state-create'           => 'ایجاد استان',
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
                            'currency-create'         => 'ایجاد ارز',
                            'company-foundation-date' => 'تاریخ تأسیس شرکت',
                            'status'                  => 'وضعیت',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'اطلاعات تماس',

                'sections' => [
                    'contact-information' => [
                        'title' => 'اطلاعات تماس',

                        'entries' => [
                            'email-address' => 'نشانی ایمیل',
                            'phone-number'  => 'شماره تلفن',
                            'mobile-number' => 'شماره تلفن',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
