<?php

return [
    'title' => 'ارزها',

    'navigation' => [
        'title' => 'ارزها',
    ],

    'form' => [
        'sections' => [
            'currency-details' => [
                'title' => 'اطلاعات ارز',

                'fields' => [
                    'name'         => 'نام ارز',
                    'name-tooltip' => 'نام رسمی ارز را وارد کنید',
                    'symbol'       => 'نماد ارز',
                    'full-name'    => 'نام کامل',
                    'iso-numeric'  => 'کد عددی ISO',
                ],
            ],

            'format-information' => [
                'title' => 'پیکربندی قالب',

                'fields' => [
                    'decimal-places'        => 'تعداد ارقام اعشار',
                    'rounding'              => 'دقت گرد کردن',
                    'rounding-helper-text'  => 'دقت گرد کردن را برای محاسبات ارزی تعیین کنید',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'وضعیت و پیکربندی',

                'fields' => [
                    'status' => 'وضعیت',
                ],
            ],

            'rates' => [
                'title'       => 'نرخ‌های ارز',
                'description' => 'سابقه نرخ تبدیل این ارز را نسبت به ارز پایه (USD) مدیریت کنید.',

                'fields' => [
                    'name'              => 'تاریخ',
                    'unit-per-currency' => 'واحد به ازای هر :currency',
                    'currency-per-unit' => ':currency به ازای هر واحد',
                ],

                'add-rate'   => 'افزودن نرخ',
                'item-label' => 'نرخ',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'           => 'نام ارز',
            'symbol'         => 'نماد',
            'full-name'      => 'نام کامل',
            'iso-numeric'    => 'کد ISO',
            'decimal-places' => 'تعداد ارقام اعشار',
            'rounding'       => 'گرد کردن',
            'status'         => 'وضعیت',
            'created-at'     => 'تاریخ ایجاد',
            'updated-at'     => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'name'           => 'نام',
            'status'         => 'وضعیت',
            'decimal-places' => 'تعداد ارقام اعشار',
            'creation-date'  => 'تاریخ ایجاد',
            'last-update'    => 'آخرین به‌روزرسانی',
        ],

        'filters' => [
            'status' => 'وضعیت',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title'   => 'ارز حذف شد',
                    'body'    => 'ارز با موفقیت حذف شد.',

                    'success' => [
                        'title' => 'ارز حذف شد',
                        'body'  => 'ارز با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف ارز ممکن نیست',
                        'body'  => 'این ارز در حال استفاده است و نمی‌توان آن را حذف کرد.',
                    ],
                ],
            ],

            'deactivate' => [
                'notification' => [
                    'title' => 'غیرفعال‌سازی ارز ممکن نیست',
                    'body'  => 'این ارز در یک یا چند شرکت در حال استفاده است و نمی‌توان آن را غیرفعال کرد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ارزها حذف شدند',
                    'body'  => 'ارزها با موفقیت حذف شدند.',

                    'error' => [
                        'title' => 'حذف ارزها ممکن نیست',
                        'body'  => 'برخی از ارزهای انتخاب‌شده در حال استفاده هستند و نمی‌توان آن‌ها را حذف کرد.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'currency-details' => [
                'title' => 'اطلاعات ارز',

                'entries' => [
                    'name'         => 'نام ارز',
                    'symbol'       => 'نماد ارز',
                    'full-name'    => 'نام کامل',
                    'iso-numeric'  => 'کد عددی ISO',
                ],
            ],

            'format-information' => [
                'title' => 'پیکربندی قالب',

                'entries' => [
                    'decimal-places' => 'تعداد ارقام اعشار',
                    'rounding'       => 'دقت گرد کردن',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'وضعیت و پیکربندی',

                'entries' => [
                    'status' => 'وضعیت',
                ],
            ],

            'rates' => [
                'title'       => 'نرخ‌های ارز',

                'entries' => [
                    'name'              => 'تاریخ',
                    'unit-per-currency' => 'واحد به ازای هر :currency',
                    'currency-per-unit' => ':currency به ازای هر واحد',
                ],
            ],
        ],
    ],
];
