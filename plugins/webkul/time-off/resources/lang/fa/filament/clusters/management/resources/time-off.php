<?php

return [
    'title' => 'مرخصی',

    'model-label' => 'مرخصی',

    'navigation' => [
        'title' => 'مرخصی',
    ],

    'global-search' => [
        'employee'      => 'کارمند',
        'time-off-type' => 'نوع مرخصی',
        'date-from'     => 'از تاریخ',
        'date-to'       => 'تا تاریخ',
    ],

    'form' => [
        'fields' => [
            'employee-name'     => 'نام کارمند',
            'department-name'   => 'نام دپارتمان',
            'time-off-type'     => 'نوع مرخصی',
            'date'              => 'تاریخ',
            'dates'             => 'تاریخ‌ها',
            'request-date-from' => 'تاریخ شروع درخواست',
            'request-date-to'   => 'تاریخ پایان درخواست',
            'description'       => 'توضیحات',
            'period'            => 'بازه',
            'half-day'          => 'نیم‌روز',
            'requested-days'    => 'مدت درخواستی (روز/ساعت)',
            'description'       => 'توضیحات',
            'attachment'        => 'پیوست',
            'day'               => ':day روز',
            'days'              => ':days روز',
        ],
    ],

    'table' => [
        'columns' => [
            'employee-name'  => 'کارمند',
            'time-off-type'  => 'نوع مرخصی',
            'description'    => 'توضیحات',
            'date-from'      => 'از تاریخ',
            'date-to'        => 'تا تاریخ',
            'duration'       => 'مدت',
            'status'         => 'وضعیت',
        ],

        'groups' => [
            'employee-name' => 'کارمند',
            'time-off-type' => 'نوع مرخصی',
            'status'        => 'وضعیت',
            'start-date'    => 'تاریخ شروع',
            'start-to'      => 'تاریخ پایان',
            'updated-at'    => 'تاریخ به‌روزرسانی',
            'created-at'    => 'تاریخ ایجاد',
        ],

        'actions' => [
            'approve' => [
                'title' => [
                    'validate' => 'تأیید نهایی',
                    'approve'  => 'تأیید',
                ],
                'notification' => [
                    'title' => 'مرخصی تأیید شد',
                    'body'  => 'مرخصی با موفقیت تأیید شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'مرخصی حذف شد',
                    'body'  => 'مرخصی با موفقیت حذف شد.',
                ],
            ],

            'refused' => [
                'title'        => 'رد',
                'notification' => [
                    'title' => 'مرخصی رد شد',
                    'body'  => 'مرخصی با موفقیت رد شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'مرخصی حذف شد',
                    'body'  => 'مرخصی با موفقیت حذف شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'employee-name'     => 'نام کارمند',
            'department-name'   => 'نام دپارتمان',
            'time-off-type'     => 'نوع مرخصی',
            'date'              => 'تاریخ',
            'dates'             => 'تاریخ‌ها',
            'request-date-from' => 'تاریخ شروع درخواست',
            'request-date-to'   => 'تاریخ پایان درخواست',
            'description'       => 'توضیحات',
            'period'            => 'بازه',
            'half-day'          => 'نیم‌روز',
            'requested-days'    => 'مدت درخواستی (روز/ساعت)',
            'attachment'        => 'پیوست',
            'day'               => ':day روز',
            'days'              => ':days روز',
            'date-from'         => 'از تاریخ',
            'date-to'           => 'تا تاریخ',
            'status'            => 'وضعیت',
        ],
    ],
];
