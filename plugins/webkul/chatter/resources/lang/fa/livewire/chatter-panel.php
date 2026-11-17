<?php

return [
    'heading' => 'گفتگو',

    'placeholders' => [
        'no-record-found' => 'رکوردی یافت نشد.',
        'loading'         => 'در حال بارگذاری گفتگو...',
    ],

    'activity-infolist' => [
        'title' => 'فعالیت‌ها',
    ],

    'cancel-activity-plan-action' => [
        'title' => 'لغو فعالیت',
    ],

    'delete-message-action' => [
        'title' => 'حذف پیام',
    ],

    'edit-activity' => [
        'title' => 'ویرایش فعالیت',

        'form' => [
            'fields' => [
                'activity-plan' => 'برنامه فعالیت',
                'plan-date'     => 'تاریخ برنامه',
                'plan-summary'  => 'خلاصه برنامه',
                'activity-type' => 'نوع فعالیت',
                'due-date'      => 'تاریخ سررسید',
                'summary'       => 'خلاصه',
                'assigned-to'   => 'واگذارشده به',

                'message-placeholder' => 'پیام خود را اینجا بنویسید...',
            ],
        ],

        'action' => [
            'notification' => [
                'success' => [
                    'title' => 'فعالیت به‌روزرسانی شد',
                    'body'  => 'فعالیت با موفقیت به‌روزرسانی شد.',
                ],
            ],
        ],
    ],

    'process-message' => [
        'original-note' => '<br><div><span class="font-bold">یادداشت اصلی</span>: :body</div>',
        'original-note' => '<br><div><span class="font-bold">یادداشت اصلی</span>: :body</div>',
        'feedback'      => '<div><span class="font-bold">بازخورد</span>: <p>:feedback</p></div>',
    ],

    'mark-as-done' => [
        'title'   => 'علامت‌گذاری به‌عنوان انجام‌شده',
        'actions' => [
            'done' => [
                'label' => 'انجام شد',
            ],
        ],
        'form'  => [
            'fields' => [
                'feedback' => 'بازخورد',
            ],
        ],

        'footer-actions' => [
            'label' => 'انجام و زمان‌بندی بعدی',

            'actions' => [
                'notification' => [
                    'mark-as-done' => [
                        'title' => 'فعالیت انجام شد',
                        'body'  => 'فعالیت با موفقیت به‌عنوان انجام‌شده علامت‌گذاری شد.',
                    ],
                ],
            ],
        ],
    ],
];
