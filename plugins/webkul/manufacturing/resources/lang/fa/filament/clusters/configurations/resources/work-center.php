<?php

return [
    'navigation' => [
        'title' => 'مراکز کاری',
        'group' => 'پیکربندی',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',
                'fields' => [
                    'name'                     => 'نام',
                    'name-placeholder'         => 'مثلاً خط مونتاژ 1',
                    'code'                     => 'کد',
                    'code-placeholder'         => 'مثلاً AL1',
                    'working-state'            => 'وضعیت کاری',
                    'color'                    => 'رنگ',
                    'tags'                     => 'برچسب',
                    'alternative-work-centers' => 'مراکز کاری جایگزین',
                    'company'                  => 'شرکت',
                    'calendar'                 => 'ساعات کاری',
                ],
            ],

            'information' => [
                'title'     => 'اطلاعات عمومی',
                'fieldsets' => [
                    'production-information' => 'اطلاعات تولید',
                    'costing-information'    => 'اطلاعات بهای تمام‌شده',
                ],
                'fields' => [
                    'default-capacity' => 'ظرفیت پیش‌فرض',
                    'time-efficiency'  => 'بازده زمانی',
                    'oee-target'       => 'هدف OEE',
                    'costs-per-hour'   => 'هزینه هر ساعت',
                    'cost-suffix'      => 'در ساعت',
                    'setup-time'       => 'زمان آماده‌سازی',
                    'cleanup-time'     => 'زمان پاک‌سازی',
                    'time-suffix'      => 'دقیقه',
                ],
            ],

            'description' => [
                'title'  => 'توضیحات',
                'fields' => [
                    'note'             => 'توضیحات',
                    'note-placeholder' => 'توضیحات مرکز کاری...',
                ],
            ],

            'specific-capacity' => [
                'title'  => 'ظرفیت اختصاصی',
                'fields' => [
                    'records' => 'ظرفیت اختصاصی',
                ],
                'columns' => [
                    'product'      => 'محصول',
                    'product-uom'  => 'واحد اندازه‌گیری',
                    'capacity'     => 'ظرفیت',
                    'setup-time'   => 'زمان آماده‌سازی',
                    'cleanup-time' => 'زمان پاک‌سازی',
                ],
                'actions' => [
                    'add' => 'افزودن سطر',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'             => 'نام',
            'code'             => 'کد',
            'company'          => 'شرکت',
            'calendar'         => 'ساعات کاری',
            'working-state'    => 'وضعیت کاری',
            'default-capacity' => 'ظرفیت',
            'time-efficiency'  => 'بازده',
            'costs-per-hour'   => 'هزینه هر ساعت',
            'deleted-at'       => 'تاریخ حذف',
            'created-at'       => 'تاریخ ایجاد',
            'updated-at'       => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'company' => 'شرکت',
        ],

        'filters' => [
            'company'       => 'شرکت',
            'working-state' => 'وضعیت کاری',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'مرکز کاری بازیابی شد',
                    'body'  => 'مرکز کاری با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'مرکز کاری بایگانی شد',
                    'body'  => 'مرکز کاری با موفقیت بایگانی شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'مرکز کاری حذف شد',
                        'body'  => 'مرکز کاری برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف مرکز کاری ممکن نشد',
                        'body'  => 'این مرکز کاری قابل حذف نیست، زیرا در حال حاضر در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'مراکز کاری بازیابی شدند',
                    'body'  => 'مراکز کاری انتخاب‌شده با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'مراکز کاری بایگانی شدند',
                    'body'  => 'مراکز کاری انتخاب‌شده با موفقیت بایگانی شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'مراکز کاری حذف شدند',
                        'body'  => 'مراکز کاری انتخاب‌شده برای همیشه حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف مراکز کاری ممکن نشد',
                        'body'  => 'یک یا چند مورد از مراکز کاری انتخاب‌شده در حال حاضر در حال استفاده است.',
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
                    'name'                     => 'نام مرکز کاری',
                    'code'                     => 'کد',
                    'working-state'            => 'وضعیت کاری',
                    'tags'                     => 'برچسب',
                    'alternative-work-centers' => 'مراکز کاری جایگزین',
                    'company'                  => 'شرکت',
                    'calendar'                 => 'ساعات کاری',
                ],
            ],

            'information' => [
                'title'     => 'اطلاعات عمومی',
                'fieldsets' => [
                    'production-information' => 'اطلاعات تولید',
                    'costing-information'    => 'اطلاعات بهای تمام‌شده',
                ],

                'entries' => [
                    'default-capacity' => 'ظرفیت پیش‌فرض',
                    'time-efficiency'  => 'بازده زمانی',
                    'oee-target'       => 'هدف OEE',
                    'costs-per-hour'   => 'هزینه هر ساعت',
                    'cost-suffix'      => 'به ازای هر مرکز کاری',
                    'setup-time'       => 'زمان آماده‌سازی',
                    'cleanup-time'     => 'زمان پاک‌سازی',
                    'time-suffix'      => 'دقیقه',
                ],
            ],

            'description' => [
                'title'   => 'توضیحات',
                'entries' => [
                    'note' => 'توضیحات',
                ],
            ],

            'specific-capacity' => [
                'title'   => 'ظرفیت‌های اختصاصی',
                'columns' => [
                    'product'      => 'محصول',
                    'product-uom'  => 'واحد اندازه‌گیری',
                    'capacity'     => 'ظرفیت',
                    'setup-time'   => 'زمان آماده‌سازی',
                    'cleanup-time' => 'زمان پاک‌سازی',
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
