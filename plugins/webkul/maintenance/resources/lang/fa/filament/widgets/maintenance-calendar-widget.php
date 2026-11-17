<?php

return [
    'heading' => [
        'title' => 'تقویم نگهداری و تعمیرات',
    ],

    'config' => [
        'button-text' => [
            'today' => 'امروز',
            'year'  => 'سال',
            'month' => 'ماه',
            'week'  => 'هفته',
            'list'  => 'فهرست',
        ],
    ],

    'header-actions' => [
        'create' => [
            'label'         => 'درخواست جدید',
            'modal-heading' => 'درخواست نگهداری و تعمیرات جدید',
            'notification'  => [
                'success' => [
                    'title' => 'درخواست نگهداری و تعمیرات ایجاد شد',
                    'body'  => 'درخواست نگهداری و تعمیرات با موفقیت ایجاد شد.',
                ],
                'error' => [
                    'title' => 'ایجاد درخواست نگهداری و تعمیرات ممکن نشد',
                    'body'  => 'ابتدا یک مرحله و یک تیم نگهداری و تعمیرات ایجاد کنید.',
                ],
            ],
        ],
    ],

    'view-action' => [
        'label' => 'مشاهده',
    ],

    'modal-actions' => [
        'edit' => [
            'label' => 'ویرایش',
        ],
    ],

    'form' => [
        'fields' => [
            'subject'      => 'موضوع',
            'scheduled-at' => 'زمان برنامه‌ریزی‌شده',
        ],
    ],

    'infolist' => [
        'title'   => 'درخواست نگهداری و تعمیرات',
        'entries' => [
            'subject'          => 'موضوع',
            'date'             => 'تاریخ',
            'time'             => 'زمان',
            'technician'       => 'تکنسین',
            'priority'         => 'اولویت',
            'maintenance-type' => 'نوع نگهداری و تعمیرات',
            'stage'            => 'مرحله',
        ],
    ],
];
