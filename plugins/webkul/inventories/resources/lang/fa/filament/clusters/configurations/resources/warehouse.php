<?php

return [
    'navigation' => [
        'title' => 'انبارها',
        'group' => 'مدیریت انبار',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',
                'fields' => [
                    'name'                    => 'نام',
                    'name-placeholder'        => 'مثلاً انبار مرکزی',
                    'code'                    => 'نام کوتاه',
                    'code-placeholder'        => 'مثلاً CW',
                    'code-hint-tooltip'       => 'نام کوتاه به‌عنوان شناسه انبار استفاده می‌شود.',
                    'company'                 => 'شرکت',
                    'multi-warehouse-warning' => 'با ایجاد انبار جدید، تنظیم «مکان‌های انبار» به‌طور خودکار فعال می‌شود.',
                    'address'                 => 'نشانی',
                ],
            ],

            'settings' => [
                'title'  => 'تنظیمات',

                'fields' => [
                    'shipment-management'              => 'مدیریت محموله‌ها',
                    'incoming-shipments'               => 'محموله‌های ورودی',
                    'incoming-shipments-hint-tooltip'  => 'مسیر ورودی پیش‌فرض',
                    'outgoing-shipments'               => 'محموله‌های خروجی',
                    'outgoing-shipments-hint-tooltip'  => 'مسیر خروجی پیش‌فرض',
                    'manufacture'                      => 'تولید',
                    'manufacture-hint-tooltip'         => 'مسیر تولید پیش‌فرض',
                    'resupply-management'              => 'مدیریت تأمین مجدد',
                    'resupply-management-hint-tooltip' => 'مسیرهای تأمین مجدد این انبار از انبارهای انتخاب‌شده به‌طور خودکار ایجاد می‌شوند.',
                    'resupply-from'                    => 'تأمین مجدد از',
                ],
            ],

            'additional' => [
                'title'  => 'اطلاعات تکمیلی',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'code'       => 'نام کوتاه',
            'company'    => 'شرکت',
            'address'    => 'نشانی',
            'deleted-at' => 'تاریخ حذف',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'address'       => 'نشانی',
            'company'       => 'شرکت',
            'created-at'    => 'تاریخ ایجاد',
            'updated-at'    => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'company' => 'شرکت',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'انبار بازیابی شد',
                    'body'  => 'انبار با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'انبار حذف شد',
                    'body'  => 'انبار با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'انبار برای همیشه حذف شد',
                        'body'  => 'انبار با موفقیت برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف انبار ممکن نیست',
                        'body'  => 'انبار در حال استفاده است و نمی‌توان آن را حذف کرد.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'انبارها بازیابی شد',
                    'body'  => 'انبارها با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'انبارها حذف شد',
                    'body'  => 'انبارها با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'انبارها برای همیشه حذف شد',
                        'body'  => 'انبارها با موفقیت برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف انبارها ممکن نیست',
                        'body'  => 'انبارها در حال استفاده هستند و نمی‌توان آن‌ها را حذف کرد.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'entries' => [
                    'name'    => 'نام انبار',
                    'code'    => 'کد انبار',
                    'company' => 'شرکت',
                    'address' => 'نشانی',
                ],
            ],

            'settings' => [
                'title' => 'تنظیمات',

                'entries' => [
                    'shipment-management' => 'مدیریت محموله‌ها',
                    'incoming-shipments'  => 'محموله‌های ورودی',
                    'outgoing-shipments'  => 'محموله‌های خروجی',
                    'resupply-management' => 'مدیریت تأمین مجدد',
                    'resupply-from'       => 'تأمین مجدد از',
                ],
            ],

            'record-information' => [
                'title' => 'اطلاعات رکورد',

                'entries' => [
                    'created-by'   => 'ایجادکننده',
                    'created-at'   => 'تاریخ ایجاد',
                    'last-updated' => 'آخرین به‌روزرسانی',
                ],
            ],
        ],
    ],
];
