<?php

return [
    'setup' => [
        'title'               => 'زمان‌بندی فعالیت',
        'submit-action-title' => 'زمان‌بندی',

        'form' => [
            'fields' => [
                'activity-plan' => 'برنامه فعالیت',
                'plan-date'     => 'تاریخ برنامه',
                'plan-summary'  => 'خلاصه برنامه',
                'activity-type' => 'نوع فعالیت',
                'due-date'      => 'تاریخ سررسید',
                'summary'       => 'خلاصه',
                'assigned-to'   => 'واگذارشده به',
                'log-note'      => 'یادداشت داخلی',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'فعالیت ایجاد شد',
                    'body'  => 'فعالیت ایجاد شد.',
                ],

                'warning'  => [
                    'title' => 'فایل جدیدی وجود ندارد',
                    'body'  => 'همه فایل‌ها قبلاً بارگذاری شده‌اند.',
                ],

                'error' => [
                    'title' => 'ایجاد فعالیت ناموفق بود',
                    'body'  => 'ایجاد فعالیت انجام نشد ',
                ],
            ],
        ],
    ],
];
