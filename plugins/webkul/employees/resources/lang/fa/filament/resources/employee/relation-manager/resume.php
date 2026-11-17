<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'title'            => 'عنوان',
                'name'             => 'نام',
                'type'             => 'نوع',
                'create-type'      => 'ایجاد نوع',
                'duration'         => 'مدت',
                'start-date'       => 'تاریخ شروع',
                'end-date'         => 'تاریخ پایان',
                'display-type'     => 'نوع نمایش',
                'description'      => 'توضیحات',
                'attachments'      => 'پیوست‌ها',
                'file'             => 'فایل',
                'file-helper-text' => 'قالب‌های مجاز: PDF، DOC، DOCX، TXT، PNG، JPEG و WEBP. حداکثر حجم هر فایل 10 مگابایت.',
                'attachment-name'  => 'برچسب',
                'add-attachment'   => 'افزودن پیوست',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'        => 'عنوان',
            'start-date'   => 'تاریخ شروع',
            'end-date'     => 'تاریخ پایان',
            'display-type' => 'نوع نمایش',
            'description'  => 'توضیحات',
            'created-by'   => 'ایجادکننده',
            'attachments'  => 'پیوست‌ها',
            'created-at'   => 'تاریخ ایجاد',
            'updated-at'   => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'group-by-type'         => 'گروه‌بندی بر اساس نوع',
            'group-by-display-type' => 'گروه‌بندی بر اساس نوع نمایش',
        ],

        'header-actions' => [
            'add-resume' => 'افزودن رزومه',
        ],

        'filters' => [
            'type'            => 'نوع',
            'start-date-from' => 'تاریخ شروع از',
            'start-date-to'   => 'تاریخ شروع تا',
            'created-from'    => 'ایجادشده از',
            'created-to'      => 'ایجادشده تا',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'رزومه به‌روزرسانی شد',
                    'body'  => 'رزومه با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'رزومه ایجاد شد',
                    'body'  => 'رزومه با موفقیت ایجاد شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'رزومه حذف شد',
                    'body'  => 'رزومه با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'رزومه‌ها حذف شدند',
                    'body'  => 'رزومه‌ها با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'title'           => 'عنوان',
            'display-type'    => 'نوع نمایش',
            'type'            => 'نوع',
            'description'     => 'توضیحات',
            'duration'        => 'مدت',
            'start-date'      => 'تاریخ شروع',
            'end-date'        => 'تاریخ پایان',
            'attachments'     => 'پیوست‌ها',
            'file'            => 'فایل',
            'attachment-name' => 'برچسب',
        ],
    ],
];
