<?php

return [
    'title' => 'سمت‌های شغلی',

    'navigation' => [
        'title' => 'سمت‌های شغلی',
        'group' => 'استخدام',
    ],

    'form' => [
        'sections' => [
            'employment-information' => [
                'title' => 'اطلاعات استخدام',

                'fields' => [
                    'job-position-title'         => 'عنوان سمت شغلی',
                    'job-position-title-tooltip' => 'عنوان رسمی سمت شغلی را وارد کنید',
                    'department'                 => 'دپارتمان',
                    'department-modal-title'     => 'ایجاد دپارتمان',
                    'company-modal-title'        => 'ایجاد شرکت',
                    'job-location'               => 'محل کار',
                    'industry'                   => 'صنعت',
                    'company'                    => 'شرکت',
                    'employment-type'            => 'نوع استخدام',
                    'recruiter'                  => 'کارشناس استخدام',
                    'interviewer'                => 'مصاحبه‌کننده',
                ],
            ],

            'job-description' => [
                'title' => 'شرح شغل',

                'fields' => [
                    'job-description'  => 'شرح شغل',
                    'job-requirements' => 'شرایط احراز شغل',
                ],
            ],

            'workforce-planning' => [
                'title' => 'برنامه‌ریزی نیروی انسانی',

                'fields' => [
                    'recruitment-target'         => 'هدف استخدام',
                    'date-from'                  => 'از تاریخ',
                    'date-to'                    => 'تا تاریخ',
                    'expected-skills'            => 'مهارت‌های مورد انتظار',
                    'employment-type'            => 'نوع استخدام',
                    'status'                     => 'وضعیت',
                ],
            ],

            'position-status' => [
                'title' => 'وضعیت سمت',

                'fields' => [
                    'status' => 'وضعیت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                 => 'شناسه',
            'name'               => 'سمت شغلی',
            'department'         => 'دپارتمان',
            'job-position'       => 'سمت شغلی',
            'company'            => 'شرکت',
            'expected-employees' => 'تعداد کارمندان مورد انتظار',
            'current-employees'  => 'تعداد کارمندان فعلی',
            'status'             => 'وضعیت',
            'created-by'         => 'ایجادکننده',
            'created-at'         => 'تاریخ ایجاد',
            'updated-at'         => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'department'      => 'دپارتمان',
            'employment-type' => 'نوع استخدام',
            'job-position'    => 'سمت شغلی',
            'company'         => 'شرکت',
            'status'          => 'وضعیت',
            'created-by'      => 'ایجادکننده',
            'updated-at'      => 'تاریخ به‌روزرسانی',
            'created-at'      => 'تاریخ ایجاد',
        ],

        'groups' => [
            'job-position'    => 'سمت شغلی',
            'company'         => 'شرکت',
            'department'      => 'دپارتمان',
            'employment-type' => 'نوع استخدام',
            'created-by'      => 'ایجادکننده',
            'created-at'      => 'تاریخ ایجاد',
            'updated-at'      => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'سمت شغلی بازیابی شد',
                    'body'  => 'سمت شغلی با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'سمت شغلی حذف شد',
                    'body'  => 'سمت شغلی با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'سمت‌های شغلی بازیابی شدند',
                    'body'  => 'سمت‌های شغلی با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'سمت‌های شغلی حذف شدند',
                    'body'  => 'سمت‌های شغلی با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'سمت‌های شغلی برای همیشه حذف شدند',
                    'body'  => 'سمت‌های شغلی با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'سمت‌های شغلی',
                    'body'  => 'سمت شغلی با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'employment-information' => [
                'title' => 'اطلاعات استخدام',

                'entries' => [
                    'job-position-title' => 'عنوان سمت شغلی',
                    'department'         => 'دپارتمان',
                    'company'            => 'شرکت',
                    'employment-type'    => 'نوع استخدام',
                    'job-location'       => 'محل کار',
                    'industry'           => 'صنعت',
                ],
            ],
            'job-description' => [
                'title' => 'شرح شغل',

                'entries' => [
                    'job-description'  => 'شرح شغل',
                    'job-requirements' => 'شرایط احراز شغل',
                ],
            ],
            'work-planning' => [
                'title' => 'برنامه‌ریزی نیروی انسانی',

                'entries' => [
                    'expected-employees' => 'تعداد کارمندان مورد انتظار',
                    'current-employees'  => 'تعداد کارمندان فعلی',
                    'date-from'          => 'از تاریخ',
                    'date-to'            => 'تا تاریخ',
                    'recruitment-target' => 'هدف استخدام',
                ],
            ],
            'position-status' => [
                'title' => 'وضعیت سمت',

                'entries' => [
                    'status' => 'وضعیت',
                ],
            ],
        ],
    ],
];
