<?php

return [
    'form' => [
        'fields' => [
            'accrual-amount'              => 'مقدار تعلق',
            'accrual-value-type'          => 'نوع مقدار تعلق',
            'accrual-frequency'           => 'تناوب تعلق',
            'accrual-day'                 => 'روز تعلق',
            'day-of-month'                => 'روز ماه',
            'first-day-of-month'          => 'روز اول ماه',
            'second-day-of-month'         => 'روز دوم ماه',
            'first-period-month'          => 'ماه دوره اول',
            'first-period-day'            => 'روز دوره اول',
            'second-period-month'         => 'ماه دوره دوم',
            'second-period-day'           => 'روز دوره دوم',
            'first-period-year'           => 'سال دوره اول',
            'cap-accrued-time'            => 'تعیین سقف برای مرخصی تعلق‌گرفته',
            'days'                        => 'روز',
            'start-count'                 => 'مقدار شروع',
            'start-type'                  => 'نوع شروع',
            'action-with-unused-accruals' => 'اقدام برای مرخصی‌های تعلق‌گرفته استفاده‌نشده',
            'milestone-cap'               => 'سقف نقطه عطف',
            'maximum-leave-yearly'        => 'حداکثر مرخصی سالانه',
            'accrual-validity'            => 'اعتبار تعلق',
            'accrual-validity-count'      => 'مقدار اعتبار تعلق',
            'accrual-validity-type'       => 'نوع اعتبار تعلق',
            'advanced-accrual-settings'   => 'تنظیمات پیشرفته تعلق تدریجی',
            'after-allocation-start'      => 'پس از تاریخ شروع تخصیص',
            'to-date'                     => 'تا تاریخ',
        ],
    ],

    'table' => [
        'columns' => [
            'accrual-amount'     => 'مقدار تعلق',
            'accrual-value-type' => 'نوع مقدار تعلق',
            'frequency'          => 'تناوب',
            'maximum-leave-days' => 'حداکثر روزهای مرخصی',
        ],

        'groups' => [
            'accrual-amount'       => 'مقدار تعلق',
            'accrual-value-type'   => 'نوع مقدار تعلق',
            'frequency'            => 'تناوب',
            'maximum-leave-days'   => 'حداکثر روزهای مرخصی',
        ],

        'filters' => [
            'accrual-frequency'           => 'تناوب تعلق',
            'start-type'                  => 'نوع شروع',
            'cap-accrued-time'            => 'تعیین سقف برای مرخصی تعلق‌گرفته',
            'action-with-unused-accruals' => 'اقدام برای مرخصی‌های تعلق‌گرفته استفاده‌نشده',
            'accrual-amount'              => 'مقدار تعلق',
            'accrual-frequency'           => 'تناوب تعلق',
            'start-type'                  => 'نوع شروع',
            'created-at'                  => 'تاریخ ایجاد',
            'updated-at'                  => 'تاریخ به‌روزرسانی',
        ],

        'header-actions' => [
            'created' => [
                'title' => 'طرح تعلق تدریجی مرخصی جدید',

                'notification' => [
                    'title' => 'طرح تعلق تدریجی مرخصی ایجاد شد',
                    'body'  => 'طرح تعلق تدریجی مرخصی با موفقیت ایجاد شد.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'طرح تعلق تدریجی مرخصی به‌روزرسانی شد',
                    'body'  => 'طرح تعلق تدریجی مرخصی با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'طرح تعلق تدریجی مرخصی حذف شد',
                    'body'  => 'طرح تعلق تدریجی مرخصی با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [

            'delete' => [
                'notification' => [
                    'title' => 'طرح‌های تعلق تدریجی مرخصی حذف شدند',
                    'body'  => 'طرح‌های تعلق تدریجی مرخصی با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'accrual-amount'              => 'مقدار تعلق',
            'accrual-value-type'          => 'نوع مقدار تعلق',
            'accrual-frequency'           => 'تناوب تعلق',
            'accrual-day'                 => 'روز تعلق',
            'day-of-month'                => 'روز ماه',
            'first-day-of-month'          => 'روز اول ماه',
            'second-day-of-month'         => 'روز دوم ماه',
            'first-period-month'          => 'ماه دوره اول',
            'first-period-day'            => 'روز دوره اول',
            'second-period-month'         => 'ماه دوره دوم',
            'second-period-day'           => 'روز دوره دوم',
            'first-period-year'           => 'سال دوره اول',
            'cap-accrued-time'            => 'تعیین سقف برای مرخصی تعلق‌گرفته',
            'days'                        => 'روز',
            'start-count'                 => 'مقدار شروع',
            'start-type'                  => 'نوع شروع',
            'action-with-unused-accruals' => 'اقدام برای مرخصی‌های تعلق‌گرفته استفاده‌نشده',
            'milestone-cap'               => 'سقف نقطه عطف',
            'maximum-leave-yearly'        => 'حداکثر مرخصی سالانه',
            'accrual-validity'            => 'اعتبار تعلق',
            'accrual-validity-count'      => 'مقدار اعتبار تعلق',
            'accrual-validity-type'       => 'نوع اعتبار تعلق',
            'advanced-accrual-settings'   => 'تنظیمات پیشرفته تعلق تدریجی',
            'after-allocation-start'      => 'پس از تاریخ شروع تخصیص',
        ],
    ],
];
