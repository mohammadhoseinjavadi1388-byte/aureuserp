<?php

return [
    'title'      => 'نوع مرخصی',
    'navigation' => [
        'title' => 'نوع مرخصی',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'اطلاعات عمومی',
                'fields' => [
                    'name'                => 'عنوان',
                    'approval'            => 'تأیید',
                    'requires-allocation' => 'نیازمند تخصیص مرخصی',
                    'employee-requests'   => 'درخواست‌های کارمند',
                    'display-option'      => 'گزینه‌های نمایش',
                ],
            ],
            'display-option' => [
                'title'  => 'گزینه‌های نمایش',
                'fields' => [
                    'color' => 'رنگ',
                ],
            ],
            'configuration' => [
                'title' => 'پیکربندی',

                'fields' => [
                    'notified-time-off-officers'          => 'مسئولان مرخصی مطلع‌شونده',
                    'take-time-off-in'                    => 'واحد ثبت مرخصی',
                    'public-holiday-included'             => 'با احتساب تعطیلات رسمی',
                    'allow-to-attach-supporting-document' => 'امکان پیوست مدرک پشتیبان',
                    'show-on-dashboard'                   => 'نمایش در داشبورد',
                    'allow-negative-cap'                  => 'مجاز بودن مانده منفی',
                    'kind-off-time'                       => 'نوع زمان',
                    'max-negative-cap'                    => 'حداکثر مانده منفی',
                    'kind-of-time'                        => 'نوع مرخصی',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                      => 'نام',
            'company-name'              => 'شرکت',
            'color'                     => 'رنگ',
            'notified-time-officers'    => 'مسئولان مرخصی مطلع‌شونده',
            'time-off-approval'         => 'تأیید مرخصی',
            'requires-allocation'       => 'نیازمند تخصیص مرخصی',
            'allocation-approval'       => 'تأیید تخصیص مرخصی',
            'employee-request'          => 'درخواست کارمند',
        ],

        'filters' => [
            'name'                => 'نام',
            'company-name'        => 'شرکت',
            'time-off-approval'   => 'تأیید مرخصی',
            'requires-allocation' => 'نیازمند تخصیص مرخصی',
            'time-type'           => 'نوع زمان',
            'request-unit'        => 'واحد درخواست',
            'created-by'          => 'ایجادکننده',
            'employee-request'    => 'درخواست کارمند',
            'created-at'          => 'تاریخ ایجاد',
            'updated-at'          => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'نوع مرخصی حذف شد',
                    'body'  => 'نوع مرخصی با موفقیت حذف شد.',
                ],
            ],
            'restore' => [
                'notification' => [
                    'title' => 'نوع مرخصی بازیابی شد',
                    'body'  => 'نوع مرخصی با موفقیت بازیابی شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'نوع مرخصی بازیابی شد',
                    'body'  => 'نوع مرخصی با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'نوع مرخصی حذف شد',
                    'body'  => 'نوع مرخصی با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'نوع مرخصی برای همیشه حذف شد',
                        'body'  => 'نوع مرخصی با موفقیت برای همیشه حذف شد.',
                    ],
                    'error' => [
                        'title' => 'حذف نوع مرخصی ممکن نیست',
                        'body'  => 'این نوع مرخصی در حال استفاده است و نمی‌توان آن را حذف کرد.',
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
                    'name'                => 'عنوان',
                    'approval'            => 'تأیید',
                    'requires-allocation' => 'نیازمند تخصیص مرخصی',
                    'employee-requests'   => 'درخواست‌های کارمند',
                    'display-option'      => 'گزینه‌های نمایش',
                ],
            ],
            'display-option' => [
                'title'   => 'گزینه‌های نمایش',
                'entries' => [
                    'color' => 'رنگ',
                ],
            ],
            'configuration' => [
                'title' => 'پیکربندی',

                'entries' => [
                    'notified-time-off-officers'          => 'مسئولان مرخصی مطلع‌شونده',
                    'take-time-off-in'                    => 'واحد ثبت مرخصی',
                    'public-holiday-included'             => 'با احتساب تعطیلات رسمی',
                    'allow-to-attach-supporting-document' => 'امکان پیوست مدرک پشتیبان',
                    'show-on-dashboard'                   => 'نمایش در داشبورد',
                    'kind-off-time'                       => 'نوع زمان',
                    'max-negative-cap'                    => 'حداکثر مانده منفی',
                    'kind-of-time'                        => 'نوع مرخصی',
                ],
            ],
        ],
    ],
];
