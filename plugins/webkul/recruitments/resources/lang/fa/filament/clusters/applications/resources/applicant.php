<?php

return [
    'title' => 'متقاضی',

    'navigation' => [
        'title' => 'متقاضیان',
    ],

    'global-search' => [
        'department' => 'دپارتمان',
        'work-email' => 'ایمیل کاری',
        'work-phone' => 'تلفن کاری',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title' => 'اطلاعات عمومی',

                'fields' => [
                    'evaluation-good'           => 'ارزیابی: خوب',
                    'evaluation-very-good'      => 'ارزیابی: خیلی خوب',
                    'evaluation-very-excellent' => 'ارزیابی: عالی',
                    'hired'                     => 'استخدام‌شده',
                    'candidate-name'            => 'نام کاندیدا',
                    'email'                     => 'ایمیل',
                    'phone'                     => 'تلفن',
                    'linkedin-profile'          => 'پروفایل لینکدین',
                    'recruiter'                 => 'کارشناس استخدام',
                    'interviewer'               => 'مصاحبه‌کننده',
                    'tags'                      => 'برچسب‌ها',
                    'notes'                     => 'یادداشت‌ها',
                    'hired-date'                => 'تاریخ استخدام',
                    'job-position'              => 'سمت‌های شغلی',
                ],
            ],

            'education-and-availability' => [
                'title' => 'تحصیلات و آمادگی شروع به کار',

                'fields' => [
                    'degree'            => 'مدرک تحصیلی',
                    'availability-date' => 'تاریخ آمادگی شروع به کار',
                ],
            ],

            'department' => [
                'title' => 'دپارتمان',
            ],

            'salary' => [
                'title' => 'حقوق درخواستی و پیشنهادی',

                'fields' => [
                    'expected-salary'       => 'حقوق درخواستی',
                    'salary-proposed-extra' => 'سایر مزایا',
                    'proposed-salary'       => 'حقوق پیشنهادی',
                    'salary-expected-extra' => 'سایر مزایا',
                ],
            ],

            'source-and-medium' => [
                'title' => 'منبع و رسانه',

                'fields' => [
                    'source' => 'منبع',
                    'medium' => 'رسانه',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'partner-name'       => 'نام طرف حساب',
            'applied-on'         => 'تاریخ درخواست',
            'job-position'       => 'سمت شغلی',
            'stage'              => 'مرحله',
            'candidate-name'     => 'نام کاندیدا',
            'evaluation'         => 'ارزیابی',
            'application-status' => 'وضعیت درخواست',
            'tags'               => 'برچسب‌ها',
            'refuse-reason'      => 'دلیل رد',
            'email'              => 'ایمیل',
            'recruiter'          => 'کارشناس استخدام',
            'interviewer'        => 'مصاحبه‌کننده',
            'candidate-phone'    => 'تلفن',
            'medium'             => 'رسانه',
            'source'             => 'منبع',
            'salary-expected'    => 'حقوق درخواستی',
            'availability-date'  => 'تاریخ آمادگی شروع به کار',
        ],

        'filters' => [
            'source'                  => 'منبع',
            'medium'                  => 'رسانه',
            'candidate'               => 'کاندیدا',
            'priority'                => 'اولویت',
            'salary-proposed-extra'   => 'مزایای پیشنهادی',
            'salary-expected-extra'   => 'مزایای درخواستی',
            'applicant-notes'         => 'یادداشت‌های متقاضی',
            'create-date'             => 'تاریخ درخواست',
            'date-closed'             => 'تاریخ استخدام',
            'date-last-stage-updated' => 'آخرین تغییر مرحله',
            'stage'                   => 'مرحله',
            'job-position'            => 'سمت شغلی',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'متقاضی حذف شد',
                    'body'  => 'متقاضی با موفقیت حذف شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'متقاضی بازیابی شد',
                    'body'  => 'متقاضی با موفقیت بازیابی شد.',
                ],
            ],
        ],

        'groups' => [
            'stage'          => 'مرحله',
            'job-position'   => 'سمت شغلی',
            'candidate-name' => 'نام کاندیدا',
            'responsible'    => 'مسئول',
            'creation-date'  => 'تاریخ ایجاد',
            'hired-date'     => 'تاریخ استخدام',
            'last-stage'     => 'آخرین مرحله',
            'refuse-reason'  => 'دلیل رد',
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'کارمندان حذف شدند',
                    'body'  => 'کارمندان با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'کارمندان حذف شدند',
                    'body'  => 'کارمندان با موفقیت حذف شدند.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'کارمندان بازیابی شدند',
                    'body'  => 'کارمندان با موفقیت بازیابی شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title' => 'اطلاعات عمومی',

                'entries' => [
                    'evaluation-good'           => 'ارزیابی: خوب',
                    'evaluation-very-good'      => 'ارزیابی: خیلی خوب',
                    'evaluation-very-excellent' => 'ارزیابی: عالی',
                    'hired'                     => 'استخدام‌شده',
                    'candidate-name'            => 'نام کاندیدا',
                    'email'                     => 'ایمیل',
                    'phone'                     => 'تلفن',
                    'linkedin-profile'          => 'پروفایل لینکدین',
                    'recruiter'                 => 'کارشناس استخدام',
                    'interviewer'               => 'مصاحبه‌کننده',
                    'tags'                      => 'برچسب‌ها',
                    'notes'                     => 'یادداشت‌ها',
                    'job-position'              => 'سمت‌های شغلی',
                ],
            ],

            'education-and-availability' => [
                'title' => 'تحصیلات و آمادگی شروع به کار',

                'entries' => [
                    'degree'            => 'مدرک تحصیلی',
                    'availability-date' => 'تاریخ آمادگی شروع به کار',
                ],
            ],

            'department' => [
                'title' => 'دپارتمان',
            ],

            'salary' => [
                'title' => 'حقوق درخواستی و پیشنهادی',

                'entries' => [
                    'expected-salary'       => 'حقوق درخواستی',
                    'salary-proposed-extra' => 'سایر مزایا',
                    'proposed-salary'       => 'حقوق پیشنهادی',
                    'salary-expected-extra' => 'سایر مزایا',
                ],
            ],

            'source-and-medium' => [
                'title' => 'منبع و رسانه',

                'entries' => [
                    'source' => 'منبع',
                    'medium' => 'رسانه',
                ],
            ],
        ],
    ],
];
