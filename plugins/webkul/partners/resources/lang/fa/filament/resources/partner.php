<?php

return [
    'global-search' => [
        'email' => 'ایمیل',
        'phone' => 'تلفن',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'company'    => 'شرکت',
                    'avatar'     => 'تصویر',
                    'tax-id'     => 'شناسه مالیاتی',
                    'job-title'  => 'عنوان شغلی',
                    'phone'      => 'تلفن',
                    'mobile'     => 'موبایل',
                    'email'      => 'ایمیل',
                    'website'    => 'وب‌سایت',
                    'title'      => 'عنوان',
                    'name'       => 'نام',
                    'short-name' => 'نام کوتاه',
                    'tags'       => 'برچسب‌ها',
                    'color'      => 'رنگ',
                ],

                'address' => [
                    'title' => 'نشانی',

                    'fields' => [
                        'street1'  => 'خیابان 1',
                        'street2'  => 'خیابان 2',
                        'city'     => 'شهر',
                        'zip'      => 'کد پستی',
                        'state'    => 'استان',
                        'country'  => 'کشور',
                        'name'     => 'نام',
                        'code'     => 'کد',
                    ],
                ],
            ],
        ],

        'tabs' => [
            'sales-purchase' => [
                'title' => 'فروش و خرید',

                'fields' => [
                    'responsible'           => 'مسئول',
                    'responsible-hint-text' => 'کارشناس فروش داخلی که مسئول این مشتری است',
                    'company-id'            => 'شناسه شرکت',
                    'company-id-hint-text'  => 'شماره ثبت شرکت؛ در صورتی که با شناسه مالیاتی متفاوت باشد استفاده می‌شود. این شماره باید در میان همه طرف حساب‌های یک کشور یکتا باشد.',
                    'reference'             => 'مرجع',
                    'industry'              => 'صنعت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'parent'     => 'والد',
            'work-email' => 'ایمیل کاری',
            'work-phone' => 'تلفن کاری',
            'tags'       => 'برچسب‌ها',

            'status' => [
                'active'   => 'فعال',
                'archived' => 'بایگانی‌شده',
            ],
        ],

        'groups' => [
            'account-type' => 'نوع حساب',
            'parent'       => 'والد',
            'title'        => 'عنوان',
            'job-title'    => 'عنوان شغلی',
            'industry'     => 'صنعت',
        ],

        'filters' => [
            'account-type'     => 'نوع حساب',
            'name'             => 'نام',
            'email'            => 'ایمیل',
            'parent'           => 'والد',
            'title'            => 'عنوان',
            'tax-id'           => 'شناسه مالیاتی',
            'phone'            => 'تلفن',
            'mobile'           => 'موبایل',
            'job-title'        => 'عنوان شغلی',
            'website'          => 'وب‌سایت',
            'company-registry' => 'شماره ثبت شرکت',
            'responsible'      => 'مسئول',
            'reference'        => 'مرجع',
            'parent'           => 'والد',
            'creator'          => 'ایجادکننده',
            'company'          => 'شرکت',
            'industry'         => 'صنعت',
            'industry'         => 'صنعت',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'مخاطب به‌روزرسانی شد',
                    'body'  => 'مخاطب با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'مخاطب بازیابی شد',
                    'body'  => 'مخاطب با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'مخاطب حذف شد',
                    'body'  => 'مخاطب با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'مخاطب به‌صورت دائمی حذف شد',
                        'body'  => 'مخاطب با موفقیت به‌صورت دائمی حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف مخاطب ممکن نیست',
                        'body'  => 'این مخاطب قابل حذف نیست، زیرا در حال حاضر در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'مخاطبان بازیابی شدند',
                    'body'  => 'مخاطبان با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'مخاطبان حذف شدند',
                    'body'  => 'مخاطبان با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'مخاطبان به‌صورت دائمی حذف شدند',
                        'body'  => 'مخاطبان با موفقیت به‌صورت دائمی حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف مخاطبان ممکن نیست',
                        'body'  => 'این مخاطبان قابل حذف نیستند، زیرا در حال حاضر در حال استفاده هستند.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'company'    => 'شرکت',
                    'avatar'     => 'تصویر',
                    'tax-id'     => 'شناسه مالیاتی',
                    'job-title'  => 'عنوان شغلی',
                    'phone'      => 'تلفن',
                    'mobile'     => 'موبایل',
                    'email'      => 'ایمیل',
                    'website'    => 'وب‌سایت',
                    'title'      => 'عنوان',
                    'name'       => 'نام',
                    'short-name' => 'نام کوتاه',
                    'tags'       => 'برچسب‌ها',
                ],

                'address' => [
                    'title' => 'نشانی',

                    'fields' => [
                        'street1'  => 'خیابان 1',
                        'street2'  => 'خیابان 2',
                        'city'     => 'شهر',
                        'zip'      => 'کد پستی',
                        'state'    => 'استان',
                        'country'  => 'کشور',
                        'name'     => 'نام',
                        'code'     => 'کد',
                    ],
                ],
            ],
        ],

        'tabs' => [
            'sales-purchase' => [
                'title' => 'فروش و خرید',

                'fields' => [
                    'responsible'           => 'مسئول',
                    'responsible-hint-text' => 'کارشناس فروش داخلی که مسئول این مشتری است',
                    'company-id'            => 'شناسه شرکت',
                    'company-id-hint-text'  => 'شماره ثبت شرکت؛ در صورتی که با شناسه مالیاتی متفاوت است از آن استفاده کنید. این شماره باید در میان همه طرف حساب‌های یک کشور یکتا باشد',
                    'reference'             => 'مرجع',
                    'industry'              => 'صنعت',
                ],
            ],
        ],
    ],
];
