<?php

return [
    'form' => [
        'sections' => [
            'activity-details' => [
                'title' => 'جزئیات فعالیت',

                'fields' => [
                    'activity-type' => 'نوع فعالیت',
                    'summary'       => 'خلاصه',
                    'note'          => 'یادداشت',
                ],
            ],

            'assignment' => [
                'title' => 'واگذاری',

                'fields' => [
                    'assignment' => 'واگذاری',
                    'assignee'   => 'مسئول انجام',
                ],
            ],

            'delay-information' => [
                'title' => 'اطلاعات تأخیر',

                'fields' => [
                    'delay-count'            => 'مقدار تأخیر',
                    'delay-unit'             => 'واحد تأخیر',
                    'delay-from'             => 'مبنای تأخیر',
                    'delay-from-helper-text' => 'مبنای محاسبه تأخیر',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'activity-type' => 'نوع فعالیت',
            'summary'       => 'خلاصه',
            'assignment'    => 'واگذاری',
            'assigned-to'   => 'واگذارشده به',
            'interval'      => 'فاصله زمانی',
            'delay-unit'    => 'واحد تأخیر',
            'delay-from'    => 'مبنای تأخیر',
            'created-by'    => 'ایجادکننده',
            'created-at'    => 'تاریخ ایجاد',
            'updated-at'    => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'activity-type' => 'نوع فعالیت',
            'assignment'    => 'واگذاری',
            'assigned-to'   => 'واگذارشده به',
            'interval'      => 'فاصله زمانی',
            'delay-unit'    => 'واحد تأخیر',
            'delay-from'    => 'مبنای تأخیر',
            'created-by'    => 'ایجادکننده',
            'created-at'    => 'تاریخ ایجاد',
            'updated-at'    => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'activity-type'   => 'نوع فعالیت',
            'activity-status' => 'وضعیت فعالیت',
            'has-delay'       => 'دارای تأخیر',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'الگوی فعالیت به‌روزرسانی شد',
                    'body'  => 'الگوی فعالیت با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'الگوی فعالیت ایجاد شد',
                    'body'  => 'الگوی فعالیت با موفقیت ایجاد شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'الگوی فعالیت حذف شد',
                    'body'  => 'الگوی فعالیت با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'الگوهای فعالیت حذف شدند',
                    'body'  => 'الگوهای فعالیت با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-details' => [
                'title' => 'جزئیات فعالیت',

                'entries' => [
                    'activity-type' => 'نوع فعالیت',
                    'summary'       => 'خلاصه',
                ],
            ],

            'assignment' => [
                'title' => 'واگذاری',

                'entries' => [
                    'assignment' => 'واگذاری',
                    'assignee'   => 'مسئول انجام',
                ],
            ],

            'delay-information' => [
                'title' => 'اطلاعات تأخیر',

                'entries' => [
                    'delay-count'            => 'مقدار تأخیر',
                    'delay-unit'             => 'واحد تأخیر',
                    'delay-from'             => 'مبنای تأخیر',
                    'delay-from-helper-text' => 'مبنای محاسبه تأخیر',
                ],
            ],
        ],

        'note' => 'یادداشت',
    ],
];
