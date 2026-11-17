<?php

return [
    'heading' => [
        'title' => 'نمای کلی مرخصی‌ها',
    ],

    'modal-actions' => [
        'edit' => [
            'title'        => 'ویرایش',
            'notification' => [
                'title' => 'مرخصی به‌روزرسانی شد',
                'body'  => 'درخواست مرخصی با موفقیت به‌روزرسانی شد.',
            ],
        ],

        'delete' => [
            'title' => 'حذف',

            'notification' => [
                'title' => 'مرخصی حذف شد',
                'body'  => 'درخواست مرخصی با موفقیت حذف شد.',
            ],
        ],
    ],

    'view-action' => [
        'title'       => 'مشاهده',
        'description' => 'مشاهده درخواست مرخصی',
    ],

    'header-actions' => [
        'create' => [
            'title'       => 'مرخصی جدید',
            'description' => 'ایجاد درخواست مرخصی',

            'notification' => [
                'title' => 'مرخصی ایجاد شد',
                'body'  => 'درخواست مرخصی با موفقیت ایجاد شد.',
            ],

            'employee-not-found' => [
                'notification' => [
                    'title' => 'کارمند یافت نشد',
                    'body'  => 'لطفاً پیش از ایجاد درخواست مرخصی، یک کارمند به پروفایل خود اضافه کنید.',
                ],
            ],
        ],
    ],

    'form' => [
        'fields' => [
            'time-off-type'     => 'نوع مرخصی',
            'request-date-from' => 'تاریخ شروع درخواست',
            'request-date-to'   => 'تاریخ پایان درخواست',
            'period'            => 'بازه زمانی',
            'half-day'          => 'نیم‌روز',
            'requested-days'    => 'مدت درخواستی (روز/ساعت)',
            'description'       => 'توضیحات',
        ],
    ],

    'infolist' => [
        'entries' => [
            'time-off-type'           => 'نوع مرخصی',
            'request-date-from'       => 'تاریخ شروع درخواست',
            'request-date-to'         => 'تاریخ پایان درخواست',
            'description'             => 'توضیحات',
            'description-placeholder' => 'توضیحی ثبت نشده است',
            'duration'                => 'مدت',
            'status'                  => 'وضعیت',
        ],
    ],
];
