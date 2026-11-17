<?php

return [
    'model-label'        => 'فعالیت',
    'plural-model-label' => 'فعالیت‌ها',

    'navigation' => [
        'title' => 'فعالیت‌های من',
    ],

    'table' => [
        'columns' => [
            'due-date'      => 'سررسید',
            'due-status'    => 'وضعیت سررسید',
            'opportunity'   => 'سرنخ / فرصت',
            'customer'      => 'مشتری',
            'activity-type' => 'نوع فعالیت',
            'summary'       => 'خلاصه',
            'assigned-to'   => 'واگذارشده به',
            'stage'         => 'مرحله',
            'created-at'    => 'تاریخ ایجاد',
        ],

        'groups' => [
            'activity-type' => 'نوع فعالیت',
            'assigned-to'   => 'واگذارشده به',
            'due-date'      => 'سررسید',
        ],

        'filters' => [
            'due-status'    => 'سررسید',
            'activity-type' => 'نوع فعالیت',
            'assigned-to'   => 'واگذارشده به',
        ],

        'empty-state' => [
            'heading'     => 'فعالیتی وجود ندارد',
            'description' => 'برای برنامه‌ریزی گام بعدی، از «زمان‌بندی فعالیت» یا آیکون ساعت روی فرصت استفاده کنید.',
        ],
    ],

    'actions' => [
        'schedule' => [
            'label' => 'زمان‌بندی فعالیت',

            'modal' => [
                'heading' => 'زمان‌بندی فعالیت',
                'submit'  => 'زمان‌بندی',
            ],

            'form' => [
                'opportunity'   => 'فرصت',
                'activity-type' => 'نوع فعالیت',
                'due-date'      => 'سررسید',
                'summary'       => 'خلاصه',
                'assigned-to'   => 'واگذارشده به',
                'note'          => 'یادداشت',
            ],

            'notification' => [
                'success' => [
                    'title' => 'فعالیت زمان‌بندی شد',
                    'body'  => 'فعالیت برای «:opportunity» زمان‌بندی شد.',
                ],

                'forbidden' => [
                    'title' => 'غیرمجاز',
                    'body'  => 'شما مجوز زمان‌بندی فعالیت برای این فرصت را ندارید.',
                ],
            ],
        ],

        'open' => [
            'label' => 'باز کردن رکورد',
        ],

        'done' => [
            'label'             => 'علامت‌گذاری به‌عنوان انجام‌شده',
            'bulk-notification' => ':count فعالیت به‌عنوان انجام‌شده علامت‌گذاری شد.',

            'modal' => [
                'heading' => 'علامت‌گذاری فعالیت به‌عنوان انجام‌شده',
                'submit'  => 'انجام شد',
            ],

            'form' => [
                'feedback' => 'بازخورد',
            ],

            'notification' => [
                'title' => 'فعالیت انجام شد',
                'body'  => 'فعالیت به‌عنوان انجام‌شده علامت‌گذاری و در فرصت ثبت شد.',
            ],
        ],

        'snooze' => [
            'label'        => 'تعویق :days روز',
            'notification' => 'فعالیت تا :date به تعویق افتاد.',
        ],

        'reschedule' => [
            'label' => 'زمان‌بندی مجدد',

            'modal' => [
                'heading' => 'زمان‌بندی مجدد فعالیت',
            ],

            'form' => [
                'due-date'    => 'سررسید',
                'summary'     => 'خلاصه',
                'assigned-to' => 'واگذارشده به',
            ],

            'notification' => [
                'title' => 'فعالیت دوباره زمان‌بندی شد',
                'body'  => 'فعالیت با موفقیت به‌روزرسانی شد.',
            ],
        ],

        'cancel' => [
            'label'      => 'لغو فعالیت',
            'bulk-label' => 'لغو فعالیت‌ها',

            'modal' => [
                'heading' => 'لغو فعالیت',
            ],

            'notification' => [
                'title' => 'فعالیت لغو شد',
                'body'  => 'فعالیت حذف شد.',
            ],
        ],
    ],
];
