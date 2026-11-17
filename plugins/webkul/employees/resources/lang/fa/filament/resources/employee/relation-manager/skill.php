<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'skill-type'  => 'نوع مهارت',
                'skill'       => 'مهارت',
                'skill-level' => 'سطح مهارت',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'skill-type'    => 'نوع مهارت',
            'skill'         => 'مهارت',
            'skill-level'   => 'سطح مهارت',
            'level-percent' => 'درصد سطح',
            'created-by'    => 'ایجادکننده',
            'user'          => 'کاربر',
            'created-at'    => 'تاریخ ایجاد',
        ],

        'groups' => [
            'skill-type' => 'نوع مهارت',
        ],

        'header-actions' => [
            'add-skill' => 'افزودن مهارت',
        ],

        'filters' => [
            'activity-type'   => 'نوع فعالیت',
            'activity-status' => 'وضعیت فعالیت',
            'has-delay'       => 'دارای تأخیر',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'مهارت به‌روزرسانی شد',
                    'body'  => 'مهارت با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'مهارت ایجاد شد',
                    'body'  => 'مهارت با موفقیت ایجاد شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'مهارت حذف شد',
                    'body'  => 'مهارت با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'مهارت‌ها حذف شدند',
                    'body'  => 'مهارت‌ها با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'skill-type'    => 'نوع مهارت',
            'skill'         => 'مهارت',
            'skill-level'   => 'سطح مهارت',
            'level-percent' => 'درصد سطح',
        ],
    ],
];
