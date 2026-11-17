<?php

return [
    'navigation' => [
        'title' => 'تجهیزات',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'اطلاعات عمومی',
                'fields' => [
                    'name' => 'نام',
                    'note' => 'توضیحات',
                ],
            ],

            'settings' => [
                'title'  => 'تنظیمات',
                'fields' => [
                    'category'   => 'دسته‌بندی تجهیزات',
                    'team'       => 'تیم نگهداری و تعمیرات',
                    'company'    => 'شرکت',
                    'technician' => 'تکنسین',
                    'owner'      => 'مالک',
                    'location'   => 'محل استفاده',
                ],
            ],

            'product-information' => [
                'title'  => 'اطلاعات محصول',
                'fields' => [
                    'partner'                     => 'تأمین‌کننده',
                    'partner-ref'                 => 'مرجع تأمین‌کننده',
                    'model'                       => 'مدل',
                    'serial-no'                   => 'شماره سریال',
                    'effective-date'              => 'تاریخ شروع بهره‌برداری',
                    'effective-date-hint-tooltip' => 'به‌عنوان نقطه شروع محاسبه میانگین زمان بین خرابی‌ها استفاده می‌شود.',
                    'cost'                        => 'بهای تمام‌شده',
                    'warranty-date'               => 'تاریخ پایان گارانتی',
                ],
            ],

            'maintenance' => [
                'title'  => 'نگهداری و تعمیرات',
                'fields' => [
                    'expected-mtbf' => 'میانگین زمان مورد انتظار بین خرابی‌ها',
                ],
                'suffixes' => [
                    'days' => 'روز',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام تجهیزات',
            'owner'      => 'مالک',
            'serial-no'  => 'شماره سریال',
            'category'   => 'دسته‌بندی تجهیزات',
            'technician' => 'تکنسین',
            'company'    => 'شرکت',
            'created-at' => 'تاریخ ایجاد',
        ],

        'filters' => [
            'category'   => 'دسته‌بندی تجهیزات',
            'team'       => 'تیم نگهداری و تعمیرات',
            'technician' => 'تکنسین',
        ],

        'groups' => [
            'category'   => 'دسته‌بندی تجهیزات',
            'owner'      => 'مالک',
            'technician' => 'تکنسین',
            'vendor'     => 'تأمین‌کننده',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تجهیزات به‌روزرسانی شد',
                    'body'  => 'تجهیزات با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'تجهیزات بازیابی شد',
                    'body'  => 'تجهیزات با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تجهیزات بایگانی شد',
                    'body'  => 'تجهیزات با موفقیت بایگانی شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تجهیزات حذف شد',
                        'body'  => 'تجهیزات برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف تجهیزات ممکن نیست',
                        'body'  => 'رکورد دیگری به این تجهیزات ارجاع دارد.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تجهیزات بازیابی شد',
                    'body'  => 'تجهیزات انتخاب‌شده با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تجهیزات بایگانی شد',
                    'body'  => 'تجهیزات انتخاب‌شده با موفقیت بایگانی شد.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'تجهیزات ایجاد شد',
                    'body'  => 'تجهیزات با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'اطلاعات عمومی',
                'entries' => [
                    'name' => 'نام',
                    'note' => 'توضیحات',
                ],
            ],

            'settings' => [
                'title'   => 'تنظیمات',
                'entries' => [
                    'category'   => 'دسته‌بندی تجهیزات',
                    'team'       => 'تیم نگهداری و تعمیرات',
                    'company'    => 'شرکت',
                    'technician' => 'تکنسین',
                    'owner'      => 'مالک',
                    'location'   => 'محل استفاده',
                ],
            ],

            'product-information' => [
                'title'   => 'اطلاعات محصول',
                'entries' => [
                    'partner'        => 'تأمین‌کننده',
                    'partner-ref'    => 'مرجع تأمین‌کننده',
                    'model'          => 'مدل',
                    'serial-no'      => 'شماره سریال',
                    'effective-date' => 'تاریخ شروع بهره‌برداری',
                    'cost'           => 'بهای تمام‌شده',
                    'warranty-date'  => 'تاریخ پایان گارانتی',
                ],
            ],

            'maintenance' => [
                'title'   => 'نگهداری و تعمیرات',
                'entries' => [
                    'expected-mtbf'          => 'میانگین زمان مورد انتظار بین خرابی‌ها',
                    'maintenance-count'      => 'تعداد نگهداری و تعمیرات',
                    'maintenance-open-count' => 'تعداد نگهداری و تعمیرات باز',
                    'assigned-at'            => 'تاریخ واگذاری',
                    'scraped-at'             => 'تاریخ اسقاط',
                ],
                'suffixes' => [
                    'days' => 'روز',
                ],
            ],
        ],
    ],
];
