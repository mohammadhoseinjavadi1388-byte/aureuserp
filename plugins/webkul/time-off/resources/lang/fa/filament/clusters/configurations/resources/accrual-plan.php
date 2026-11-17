<?php

return [
    'title'      => 'طرح تعلق تدریجی',
    'navigation' => [
        'title' => 'طرح تعلق تدریجی',
    ],

    'form' => [
        'fields' => [
            'name'                    => 'عنوان',
            'is-based-on-worked-time' => 'بر اساس زمان کارکرد',
            'accrued-gain-time'       => 'زمان تعلق مرخصی',
            'carry-over-time'         => 'زمان انتقال به دوره بعد',
            'carry-over-date'         => 'تاریخ انتقال به دوره بعد',
            'status'                  => 'وضعیت',
        ],
    ],

    'table' => [
        'columns' => [
            'name'   => 'نام',
            'levels' => 'سطوح',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'طرح تعلق تدریجی حذف شد',
                    'body'  => 'طرح تعلق تدریجی با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'طرح تعلق تدریجی حذف شد',
                    'body'  => 'طرح تعلق تدریجی با موفقیت حذف شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'basic-information' => 'اطلاعات پایه',
        ],

        'entries' => [
            'name'                    => 'نام',
            'is-based-on-worked-time' => 'بر اساس زمان کارکرد',
            'accrued-gain-time'       => 'زمان تعلق مرخصی',
            'carry-over-time'         => 'زمان انتقال به دوره بعد',
            'carry-over-day'          => 'روز انتقال به دوره بعد',
            'carry-over-month'        => 'ماه انتقال به دوره بعد',
        ],
    ],
];
