<?php

return [
    'title' => 'کاندیدا',

    'navigation' => [
        'title' => 'کاندیداها',
    ],

    'global-search' => [
        'email-from' => 'ایمیل فرستنده',
        'phone'      => 'تلفن',
        'company'    => 'شرکت',
        'degree'     => 'مدرک تحصیلی',
    ],

    'form' => [
        'sections' => [
            'basic-information' => [
                'title' => 'اطلاعات پایه',

                'fields' => [
                    'full-name' => 'نام کامل',
                    'email'     => 'نشانی ایمیل',
                    'phone'     => 'شماره تلفن',
                    'linkedin'  => 'پروفایل لینکدین',
                    'contact'   => 'مخاطب',
                ],
            ],

            'additional-details' => [
                'title' => 'جزئیات تکمیلی',

                'fields' => [
                    'company'           => 'شرکت',
                    'degree'            => 'مدرک تحصیلی',
                    'tags'              => 'برچسب‌ها',
                    'manager'           => 'مدیر',
                    'availability-date' => 'تاریخ آمادگی شروع به کار',

                    'priority-options' => [
                        'low'    => 'کم',
                        'medium' => 'متوسط',
                        'high'   => 'زیاد',
                    ],
                ],
            ],

            'status-and-evaluation' => [
                'title' => 'وضعیت',

                'fields' => [
                    'active'     => 'فعال',
                    'evaluation' => 'ارزیابی',
                ],
            ],

            'communication' => [
                'title' => 'ارتباطات',

                'fields' => [
                    'cc-email'      => 'ایمیل رونوشت (CC)',
                    'email-bounced' => 'ایمیل برگشت‌خورده',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام کامل',
            'tags'       => 'برچسب‌ها',
            'evaluation' => 'ارزیابی',
        ],

        'filters' => [
            'company'      => 'شرکت',
            'partner-name' => 'مخاطب',
            'degree'       => 'مدرک تحصیلی',
            'manager-name' => 'مدیر',
        ],

        'groups' => [
            'manager-name' => 'مدیر',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'کاندیدا حذف شد',
                    'body'  => 'کاندیدا با موفقیت حذف شد.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'کاندیدا ایجاد شد',
                    'body'  => 'کاندیدا با موفقیت ایجاد شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'کاندیداها حذف شدند',
                    'body'  => 'کاندیداها با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'basic-information' => [
                'title' => 'اطلاعات پایه',

                'entries' => [
                    'full-name' => 'نام کامل',
                    'email'     => 'نشانی ایمیل',
                    'phone'     => 'شماره تلفن',
                    'linkedin'  => 'پروفایل لینکدین',
                    'contact'   => 'مخاطب',
                ],
            ],

            'additional-details' => [
                'title' => 'جزئیات تکمیلی',

                'entries' => [
                    'company'           => 'شرکت',
                    'degree'            => 'مدرک تحصیلی',
                    'tags'              => 'برچسب‌ها',
                    'manager'           => 'مدیر',
                    'availability-date' => 'تاریخ آمادگی شروع به کار',

                    'priority-options' => [
                        'low'    => 'کم',
                        'medium' => 'متوسط',
                        'high'   => 'زیاد',
                    ],
                ],
            ],

            'status-and-evaluation' => [
                'title' => 'وضعیت',

                'entries' => [
                    'active'     => 'فعال',
                    'evaluation' => 'ارزیابی',
                ],
            ],

            'communication' => [
                'title' => 'ارتباطات',

                'entries' => [
                    'cc-email'      => 'ایمیل رونوشت (CC)',
                    'email-bounced' => 'ایمیل برگشت‌خورده',
                ],
            ],
        ],
    ],
];
