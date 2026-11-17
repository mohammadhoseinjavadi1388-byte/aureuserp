<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'payment-term'         => 'شرایط پرداخت',
                'company'              => 'شرکت',
                'company-placeholder'  => 'همه شرکت‌ها',
                'early-discount'       => 'تخفیف پرداخت زودهنگام',
                'discount-days-prefix' => 'در صورت پرداخت ظرف',
                'discount-days-suffix' => 'روز',
                'reduced-tax'          => 'مالیات کاهش‌یافته',
                'note'                 => 'یادداشت',
                'status'               => 'وضعیت',
            ],
        ],

        'tabs' => [
            'due-terms' => [
                'title' => 'شرایط سررسید',

                'repeater' => [
                    'due-terms' => [
                        'fields' => [
                            'value'                  => 'مقدار',
                            'due'                    => 'سررسید',
                            'delay-type'             => 'نوع مهلت',
                            'days-on-the-next-month' => 'روز از ماه بعد',
                            'days'                   => 'روز',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'payment-term' => 'شرایط پرداخت',
            'company'      => 'شرکت',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'company-name'        => 'نام شرکت',
            'discount-days'       => 'روزهای تخفیف',
            'early-pay-discount'  => 'تخفیف پرداخت زودهنگام',
            'payment-term'        => 'شرایط پرداخت',
            'display-on-invoice'  => 'نمایش در فاکتور',
            'early-discount'      => 'تخفیف پرداخت زودهنگام',
            'discount-percentage' => 'درصد تخفیف',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'شرایط پرداخت بازیابی شد',
                    'body'  => 'شرایط پرداخت با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'شرایط پرداخت حذف شد',
                    'body'  => 'شرایط پرداخت با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'شرایط پرداخت برای همیشه حذف شد',
                        'body'  => 'شرایط پرداخت با موفقیت برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف دائمی شرایط پرداخت ناموفق بود',
                        'body'  => 'حذف دائمی این شرایط پرداخت ممکن نیست، زیرا اسناد حسابداری مرتبط دارد.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'شرایط پرداخت بازیابی شدند',
                    'body'  => 'شرایط پرداخت انتخاب‌شده با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'شرایط پرداخت حذف شدند',
                    'body'  => 'شرایط پرداخت انتخاب‌شده با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'شرایط پرداخت برای همیشه حذف شدند',
                        'body'  => 'شرایط پرداخت انتخاب‌شده با موفقیت برای همیشه حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف دائمی شرایط پرداخت ناموفق بود',
                        'body'  => 'حذف دائمی این شرایط پرداخت ممکن نیست، زیرا اسناد حسابداری مرتبط دارند.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'payment-term'         => 'شرایط پرداخت',
                'early-discount'       => 'تخفیف پرداخت زودهنگام',
                'discount-percentage'  => 'درصد تخفیف',
                'discount-days-prefix' => 'در صورت پرداخت ظرف',
                'discount-days-suffix' => 'روز',
                'reduced-tax'          => 'مالیات کاهش‌یافته',
                'note'                 => 'یادداشت',
                'status'               => 'وضعیت',
            ],
        ],

        'tabs' => [
            'due-terms' => [
                'title' => 'شرایط سررسید',

                'repeater' => [
                    'due-terms' => [
                        'entries' => [
                            'value'                  => 'مقدار',
                            'due'                    => 'سررسید',
                            'delay-type'             => 'نوع مهلت',
                            'days-on-the-next-month' => 'روز از ماه بعد',
                            'days'                   => 'روز',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
