<?php

return [
    'model-label'        => 'سرنخ',
    'plural-model-label' => 'سرنخ‌ها',

    'navigation' => [
        'title' => 'سرنخ‌ها',
    ],

    'global-search' => [
        'contact' => 'مخاطب',
        'company' => 'شرکت',
    ],

    'form' => [
        'sections' => [
            'general' => 'سرنخ',
            'sales'   => 'فروش',
        ],

        'tabs' => [
            'notes'      => 'یادداشت‌ها',
        ],

        'fieldsets' => [
            'marketing' => 'بازاریابی',
            'analysis'  => 'تحلیل',
        ],

        'fields' => [
            'name-placeholder'    => 'مثلاً قیمت‌گذاری محصول',
            'probability'         => 'احتمال',
            'company-name'        => 'نام شرکت',
            'address'             => 'نشانی',
            'street1'             => 'خیابان...',
            'street2'             => 'خیابان 2...',
            'city'                => 'شهر',
            'zip'                 => 'کد پستی',
            'state'               => 'استان',
            'country'             => 'کشور',
            'website'             => 'وب‌سایت',
            'website-placeholder' => 'مثلاً https://www.example.com',
            'salesperson'         => 'کارشناس فروش',
            'team'                => 'تیم فروش',
            'contact-name'        => 'نام مخاطب',
            'email'               => 'ایمیل',
            'job-position'        => 'سمت شغلی',
            'phone'               => 'تلفن',
            'priority'            => 'اولویت',
            'tags'                => 'برچسب‌ها',
            'company'             => 'شرکت',
            'campaign'            => 'کمپین',
            'medium'              => 'رسانه',
            'source'              => 'منبع',
            'referred-by'         => 'معرف',
            'assignment-date'     => 'تاریخ واگذاری',
            'closed-date'         => 'تاریخ بسته‌شدن',
        ],
    ],

    'infolist' => [
        'sections' => [
            'lost' => 'ازدست‌رفته',
        ],

        'entries' => [
            'lost-reason'  => 'دلیل از دست رفتن',
            'closing-note' => 'یادداشت پایانی',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'سرنخ',
            'contact-name' => 'نام مخاطب',
            'company-name' => 'نام شرکت',
            'email'        => 'ایمیل',
            'phone'        => 'تلفن',
            'city'         => 'شهر',
            'country'      => 'کشور',
            'salesperson'  => 'کارشناس فروش',
            'team'         => 'تیم فروش',
            'priority'     => 'اولویت',
            'tags'         => 'برچسب‌ها',
            'source'       => 'منبع',
            'medium'       => 'رسانه',
            'lost-reason'  => 'دلیل از دست رفتن',
            'created-at'   => 'تاریخ ایجاد',
        ],
    ],

    'actions' => [
        'create' => [
            'label' => 'سرنخ جدید',
        ],

        'open' => [
            'label' => 'باز کردن',
        ],

        'schedule-activity' => [
            'label' => 'زمان‌بندی فعالیت',
        ],

        'convert' => [
            'label' => 'تبدیل به فرصت',

            'modal' => [
                'heading' => 'تبدیل به فرصت',
                'submit'  => 'ایجاد فرصت',
            ],

            'form' => [
                'action'     => 'نوع تبدیل',
                'duplicates' => 'سرنخ‌ها و فرصت‌های مشابه برای ادغام',

                'customer'          => 'مشتری',
                'existing-customer' => 'مشتری موجود',
                'salesperson'       => 'کارشناس فروش',
                'team'              => 'تیم فروش',
            ],

            'notification' => [
                'title' => 'به فرصت تبدیل شد',
                'body'  => '«:name» اکنون یک فرصت در کاریز فروش است.',

                'invalid' => [
                    'title' => 'انتخاب نامعتبر',
                    'body'  => 'مشتری، کارشناس فروش یا تیم فروش انتخاب‌شده متعلق به شرکت این سرنخ نیست.',
                ],
            ],
        ],

        'mass-convert' => [
            'label' => 'تبدیل به فرصت',

            'modal' => [
                'heading' => 'تبدیل به فرصت',
                'submit'  => 'تبدیل',
            ],

            'form' => [
                'deduplicate'             => 'حذف موارد تکراری',
                'deduplicate-helper'      => 'هر سرنخ با سرنخ‌ها و فرصت‌های مشابه خود (ایمیل، تلفن یا مشتری یکسان) ادغام می‌شود.',
                'salespeople'             => 'کارشناسان فروش',
                'salespeople-helper'      => 'سرنخ‌های بدون کارشناس فروش به‌نوبت بین آن‌ها تقسیم می‌شوند.',
                'force-assignment'        => 'واگذاری اجباری',
                'force-assignment-helper' => 'سرنخ‌هایی که از قبل کارشناس فروش دارند نیز دوباره واگذار می‌شوند.',

                'customer-options' => [
                    'create' => 'اتصال به مشتری موجود یا ایجاد مشتری جدید',
                    'link'   => 'اتصال به مشتری موجود',
                ],
            ],

            'notification' => [
                'title' => 'سرنخ‌ها تبدیل شدند',
                'body'  => ':count سرنخ تبدیل شد، :merged رکورد مشابه ادغام شد و :skipped مورد نادیده گرفته شد.',
            ],
        ],
        'lost' => [
            'notification' => [
                'title' => 'سرنخ از دست رفت',
                'body'  => 'سرنخ به‌عنوان ازدست‌رفته علامت‌گذاری و به نمای «ازدست‌رفته» منتقل شد.',
            ],
        ],

        'restore' => [
            'notification' => [
                'title' => 'سرنخ بازیابی شد',
                'body'  => 'سرنخ با موفقیت بازیابی شد.',
            ],
        ],

        'force-delete' => [
            'notification' => [
                'title' => 'سرنخ حذف شد',
                'body'  => 'سرنخ برای همیشه حذف شد.',
            ],
        ],
    ],
];
