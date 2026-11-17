<?php

return [
    'heading' => [
        'title' => 'درخواست‌های مرخصی',
    ],

    'modal-actions' => [
        'edit' => [
            'title'                         => 'ویرایش',
            'duration-display'              => ':count روز کاری|:count روز کاری',
            'duration-display-with-weekend' => ':count روز کاری (+ :weekend روز تعطیل آخر هفته)|:count روز کاری (+ :weekend روز تعطیل آخر هفته)',

            'notification' => [
                'title' => 'مرخصی به‌روزرسانی شد',
                'body'  => 'درخواست مرخصی شما با موفقیت به‌روزرسانی شد.',
            ],
        ],

        'delete' => [
            'title' => 'حذف',

            'notification' => [
                'title' => 'مرخصی حذف شد',
                'body'  => 'درخواست مرخصی شما با موفقیت حذف شد.',
            ],
        ],
    ],

    'config' => [
        'button-text' => [
            'today' => 'امروز',
            'month' => 'ماه',
            'week'  => 'هفته',
            'list'  => 'فهرست',
            'year'  => 'سال',
        ],
    ],

    'view-action' => [
        'title'       => 'مشاهده',
        'description' => 'مشاهده درخواست مرخصی',
    ],

    'notifications' => [
        'employee-not-found' => [
            'title' => 'کارمند یافت نشد',
            'body'  => 'لطفاً پیش از درخواست مرخصی، یک کارمند به پروفایل خود اضافه کنید.',
        ],

        'error' => [
            'title' => 'مشکلی پیش آمد',
            'body'  => 'پردازش درخواست مرخصی شما ممکن نشد. لطفاً دوباره تلاش کنید.',
        ],
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

            'success' => [
                'notification' => [
                    'title' => 'مرخصی ایجاد شد',
                    'body'  => 'درخواست مرخصی شما با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'form' => [
        'title'       => 'درخواست مرخصی',
        'description' => 'درخواست مرخصی خود را با جزئیات زیر ایجاد یا ویرایش کنید:',

        'fields' => [
            'time-off-type'             => 'نوع مرخصی',
            'time-off-type-placeholder' => 'نوع مرخصی را انتخاب کنید',
            'time-off-type-helper'      => 'نوع مرخصی مورد درخواست خود را انتخاب کنید.',
            'request-date-from'         => 'تاریخ شروع درخواست',
            'request-date-to'           => 'تاریخ پایان درخواست',
            'period'                    => 'بازه زمانی',
            'half-day'                  => 'نیم‌روز',
            'half-day-helper'           => 'برای مرخصی نیم‌روز فعال کنید.',
            'requested-days'            => 'مدت درخواستی (روز/ساعت)',
            'description'               => 'توضیحات',
            'description-placeholder'   => 'توضیحی ثبت نشده است',
            'description-helper'        => 'توضیح کوتاهی درباره درخواست مرخصی خود وارد کنید.',
            'duration'                  => 'مدت',
            'please-select-dates'       => 'لطفاً تاریخ شروع و پایان درخواست را انتخاب کنید.',
        ],
    ],

    'infolist' => [
        'title'       => 'جزئیات مرخصی',
        'description' => 'جزئیات درخواست مرخصی شما به شرح زیر است:',
        'entries'     => [
            'time-off-type'           => 'نوع مرخصی',
            'request-date-from'       => 'تاریخ شروع درخواست',
            'request-date-to'         => 'تاریخ پایان درخواست',
            'description'             => 'توضیحات',
            'description-placeholder' => 'توضیحی ثبت نشده است',
            'duration'                => 'مدت',
            'status'                  => 'وضعیت',
        ],
    ],

    'events' => [
        'title' => ':name در :status: :days روز',
    ],
];
