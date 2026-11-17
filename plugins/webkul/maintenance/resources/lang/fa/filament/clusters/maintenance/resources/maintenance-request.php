<?php

return [
    'navigation' => [
        'group' => 'نگهداری و تعمیرات',
        'title' => 'درخواست‌های نگهداری و تعمیرات',
    ],

    'form' => [
        'sections' => [
            'request' => [
                'title'  => 'درخواست',
                'fields' => [
                    'name'                      => 'درخواست',
                    'name-placeholder'          => 'مثلاً صفحه‌نمایش کار نمی‌کند',
                    'equipment'                 => 'تجهیزات',
                    'category'                  => 'دسته‌بندی',
                    'requested-at'              => 'تاریخ درخواست',
                    'requested-at-hint-tooltip' => 'تاریخی که درخواست نگهداری و تعمیرات گزارش شده است.',
                    'maintenance-type'          => 'نوع نگهداری و تعمیرات',
                    'recurrent'                 => 'تکرارشونده',
                    'repeat-every'              => 'تکرار هر',
                    'maintenance-type-options'  => [
                        'corrective' => 'اصلاحی',
                        'preventive' => 'پیشگیرانه',
                    ],
                ],
                'tabs' => [
                    'notes' => [
                        'title'  => 'یادداشت‌ها',
                        'fields' => [
                            'description'             => 'یادداشت‌های داخلی',
                            'description-placeholder' => 'یادداشت‌های داخلی',
                        ],
                    ],
                    'instructions' => [
                        'title'  => 'دستورالعمل‌ها',
                        'fields' => [
                            'instruction-type'         => 'نوع دستورالعمل',
                            'instruction-type-options' => [
                                'pdf'          => 'PDF',
                                'google-slide' => 'Google Slide',
                                'text'         => 'متن',
                            ],
                            'instruction-pdf'              => 'PDF',
                            'instruction-google-slide'     => 'Google Slide',
                            'instruction-text'             => 'توضیحات',
                            'instruction-text-placeholder' => 'توضیحات',
                        ],
                    ],
                ],
            ],

            'settings' => [
                'title'  => 'تنظیمات',
                'fields' => [
                    'team'                      => 'تیم',
                    'responsible'               => 'مسئول',
                    'scheduled-at'              => 'تاریخ برنامه‌ریزی‌شده',
                    'scheduled-at-hint-tooltip' => 'تاریخ و ساعتی که شروع این کار نگهداری و تعمیرات برای آن برنامه‌ریزی شده است.',
                    'duration'                  => 'مدت',
                    'duration-hint-tooltip'     => 'مدت پیش‌بینی‌شده برای نگهداری و تعمیرات.',
                    'duration-suffix'           => 'ساعت',
                    'priority'                  => 'اولویت',
                    'company'                   => 'شرکت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'موضوع',
            'creator'    => 'کاربر ایجادکننده',
            'technician' => 'تکنسین',
            'category'   => 'دسته‌بندی',
            'stage'      => 'مرحله',
            'company'    => 'شرکت',
        ],

        'groups' => [
            'stage'       => 'مرحله',
            'assigned-to' => 'واگذارشده به',
            'category'    => 'دسته‌بندی',
            'created-by'  => 'ایجادکننده',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'درخواست نگهداری و تعمیرات بازیابی شد',
                    'body'  => 'درخواست نگهداری و تعمیرات با موفقیت بازیابی شد.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'درخواست نگهداری و تعمیرات بایگانی شد',
                    'body'  => 'درخواست نگهداری و تعمیرات با موفقیت بایگانی شد.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'درخواست نگهداری و تعمیرات حذف شد',
                        'body'  => 'درخواست نگهداری و تعمیرات برای همیشه حذف شد.',
                    ],
                    'error' => [
                        'title' => 'حذف درخواست نگهداری و تعمیرات ممکن نیست',
                        'body'  => 'رکورد دیگری به این درخواست نگهداری و تعمیرات ارجاع دارد.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'درخواست‌های نگهداری و تعمیرات بازیابی شدند',
                    'body'  => 'درخواست‌های نگهداری و تعمیرات انتخاب‌شده با موفقیت بازیابی شدند.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'درخواست‌های نگهداری و تعمیرات بایگانی شدند',
                    'body'  => 'درخواست‌های نگهداری و تعمیرات انتخاب‌شده با موفقیت بایگانی شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'request' => [
                'title'   => 'درخواست',
                'entries' => [
                    'name'                     => 'درخواست',
                    'equipment'                => 'تجهیزات',
                    'category'                 => 'دسته‌بندی',
                    'requested-at'             => 'تاریخ درخواست',
                    'maintenance-type'         => 'نوع نگهداری و تعمیرات',
                    'instruction-type'         => 'نوع دستورالعمل',
                    'instruction-pdf'          => 'PDF',
                    'instruction-google-slide' => 'Google Slide',
                    'description'              => 'یادداشت‌های داخلی',
                    'instruction-text'         => 'توضیحات',
                ],
            ],

            'settings' => [
                'title'   => 'تنظیمات',
                'entries' => [
                    'team'            => 'تیم',
                    'responsible'     => 'مسئول',
                    'scheduled-at'    => 'تاریخ برنامه‌ریزی‌شده',
                    'duration'        => 'مدت',
                    'duration-suffix' => 'ساعت',
                    'priority'        => 'اولویت',
                    'company'         => 'شرکت',
                ],
            ],
        ],
    ],
];
