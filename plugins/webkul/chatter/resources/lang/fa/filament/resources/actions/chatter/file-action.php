<?php

return [
    'setup' => [
        'title'   => 'پیوست‌ها',
        'tooltip' => 'بارگذاری پیوست‌ها',

        'modal-submit-action-label' => 'بارگذاری',

        'form' => [
            'fields' => [
                'files'                  => 'فایل‌ها',
                'attachment-helper-text' => 'حداکثر حجم فایل: 10MB. انواع مجاز: تصویر، PDF، Word، Excel، متن',

                'actions' => [
                    'delete' => [
                        'title' => 'فایل حذف شد',
                        'body'  => 'فایل با موفقیت حذف شد.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'پیوست‌ها بارگذاری شدند',
                    'body'  => 'پیوست‌ها با موفقیت بارگذاری شدند.',
                ],

                'warning'  => [
                    'title' => 'فایل جدیدی وجود ندارد',
                    'body'  => 'همه فایل‌ها قبلاً بارگذاری شده‌اند.',
                ],

                'error' => [
                    'title' => 'خطا در بارگذاری پیوست',
                    'body'  => 'بارگذاری پیوست‌ها انجام نشد ',
                ],
            ],
        ],
    ],
];
