<?php

return [
    'model-label'        => 'فرصت',
    'plural-model-label' => 'فرصت‌ها',

    'navigation' => [
        'title' => 'کاریز فروش من',
    ],

    'global-search' => [
        'customer' => 'مشتری',
        'stage'    => 'مرحله',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'فرصت',

                'fields' => [
                    'name'             => 'فرصت',
                    'name-placeholder' => 'مثلاً قیمت‌گذاری محصول',
                    'expected-revenue' => 'درآمد مورد انتظار',
                    'probability'      => 'احتمال',
                    'customer'         => 'مشتری',
                    'email'            => 'ایمیل',
                    'phone'            => 'تلفن',
                ],
            ],

            'notes' => [
                'title' => 'یادداشت‌های داخلی',
            ],

            'sales' => [
                'title' => 'فروش',

                'fields' => [
                    'salesperson'      => 'کارشناس فروش',
                    'team'             => 'تیم فروش',
                    'company'          => 'شرکت',
                    'expected-closing' => 'تاریخ بسته‌شدن مورد انتظار',
                    'priority'         => 'اولویت',
                    'tags'             => 'برچسب‌ها',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'won' => [
                'title' => 'موفق',
            ],

            'lost' => [
                'title' => 'ازدست‌رفته',

                'entries' => [
                    'lost-reason' => 'دلیل از دست رفتن',
                    'feedback'    => 'یادداشت پایانی',
                ],
            ],

            'general' => [
                'title' => 'فرصت',

                'entries' => [
                    'expected-revenue' => 'درآمد مورد انتظار',
                    'probability'      => 'احتمال',
                    'customer'         => 'مشتری',
                    'email'            => 'ایمیل',
                    'phone'            => 'تلفن',
                ],
            ],

            'notes' => [
                'title' => 'یادداشت‌های داخلی',
            ],

            'sales' => [
                'title' => 'فروش',

                'entries' => [
                    'salesperson'      => 'کارشناس فروش',
                    'team'             => 'تیم فروش',
                    'company'          => 'شرکت',
                    'expected-closing' => 'تاریخ بسته‌شدن مورد انتظار',
                    'priority'         => 'اولویت',
                    'tags'             => 'برچسب‌ها',
                    'closed-at'        => 'تاریخ بسته‌شدن',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'             => 'فرصت',
            'customer'         => 'مشتری',
            'stage'            => 'مرحله',
            'expected-revenue' => 'درآمد مورد انتظار',
            'probability'      => 'احتمال',
            'priority'         => 'اولویت',
            'salesperson'      => 'کارشناس فروش',
            'team'             => 'تیم فروش',
            'expected-closing' => 'تاریخ بسته‌شدن مورد انتظار',
            'tags'             => 'برچسب‌ها',
            'email'            => 'ایمیل',
            'phone'            => 'تلفن',
            'medium'           => 'رسانه',
            'lost-reason'      => 'دلیل از دست رفتن',
            'created-at'       => 'تاریخ ایجاد',
        ],

        'summaries' => [
            'total' => 'جمع کل',
        ],

        'groups' => [
            'stage'            => 'مرحله',
            'team'             => 'تیم فروش',
            'salesperson'      => 'کارشناس فروش',
            'priority'         => 'اولویت',
            'expected-closing' => 'تاریخ بسته‌شدن مورد انتظار',
        ],

        'actions' => [
            'schedule-activity' => [
                'label' => 'زمان‌بندی فعالیت',
            ],

            'restore' => [
                'label' => 'بازیابی',

                'notification' => [
                    'title' => 'فرصت بازیابی شد',
                    'body'  => 'فرصت به کاریز فروش بازگردانده شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'فرصت حذف شد',
                    'body'  => 'فرصت برای همیشه حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'فرصت‌ها بازیابی شدند',
                    'body'  => 'فرصت‌ها به کاریز فروش بازگردانده شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'فرصت‌ها حذف شدند',
                    'body'  => 'فرصت‌ها برای همیشه حذف شدند.',
                ],
            ],
        ],
    ],

    'actions' => [
        'new-quotation' => [
            'label'             => 'پیش‌فاکتور جدید',
            'modal-heading'     => 'پیش‌فاکتور جدید',
            'modal-description' => 'این فرصت هنوز مشتری ندارد. مشتری پیش‌فاکتور را انتخاب کنید.',
            'submit'            => 'ادامه',
            'subheading'        => 'از فرصت: :name',
        ],

        'won' => [
            'label' => 'موفق',

            'modal' => [
                'heading'     => 'علامت‌گذاری به‌عنوان موفق',
                'description' => 'فرصت با احتمال 100% به مرحله موفق منتقل می‌شود.',
            ],

            'notification' => [
                'success' => [
                    'title' => 'فرصت موفق شد',
                    'body'  => 'فرصت به‌عنوان موفق علامت‌گذاری شد.',
                ],

                'no-won-stage' => [
                    'title' => 'مرحله موفق تعریف نشده است',
                    'body'  => 'ابتدا در CRM ← پیکربندی ← مراحل، گزینه «مرحله موفق است؟» را برای یکی از مراحل فعال کنید.',
                ],
            ],
        ],

        'lost' => [
            'label' => 'ازدست‌رفته',

            'modal' => [
                'heading' => 'علامت‌گذاری به‌عنوان ازدست‌رفته',
                'submit'  => 'علامت‌گذاری به‌عنوان ازدست‌رفته',
            ],

            'form' => [
                'lost-reason' => 'دلیل از دست رفتن',
                'feedback'    => 'یادداشت پایانی',
            ],

            'notification' => [
                'title' => 'فرصت از دست رفت',
                'body'  => 'فرصت به‌عنوان ازدست‌رفته علامت‌گذاری و به نمای «ازدست‌رفته» منتقل شد.',
            ],
        ],
    ],

    'quotations' => [
        'title' => 'پیش‌فاکتورها',

        'columns' => [
            'number'      => 'شماره',
            'date'        => 'تاریخ',
            'customer'    => 'مشتری',
            'salesperson' => 'کارشناس فروش',
            'total'       => 'جمع کل',
            'status'      => 'وضعیت',
        ],

        'empty' => [
            'heading'     => 'هنوز پیش‌فاکتوری وجود ندارد',
            'description' => 'برای ایجاد پیش‌فاکتور از این فرصت، از «پیش‌فاکتور جدید» استفاده کنید.',
        ],
    ],
];
