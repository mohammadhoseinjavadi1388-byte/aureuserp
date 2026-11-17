<?php

return [
    'title' => 'تخصیص مرخصی',

    'model-label' => 'تخصیص مرخصی',

    'navigation' => [
        'title' => 'تخصیص مرخصی',
    ],

    'global-search' => [
        'employee'      => 'کارمند',
        'time-off-type' => 'نوع مرخصی',
        'date-from'     => 'از تاریخ',
        'date-to'       => 'تا تاریخ',
    ],

    'form' => [
        'fields' => [
            'name'                => 'نام',
            'name-placeholder'    => 'نوع مرخصی (از شروع اعتبار تا پایان اعتبار/بدون محدودیت)',
            'time-off-type'       => 'نوع مرخصی',
            'employee-name'       => 'نام کارمند',
            'allocation-type'     => 'نوع تخصیص',
            'validity-period'     => 'دوره اعتبار',
            'date-from'           => 'از تاریخ',
            'date-to'             => 'تا تاریخ',
            'date-to-placeholder' => 'بدون محدودیت',
            'allocation'          => 'تخصیص مرخصی',
            'allocation-suffix'   => 'تعداد روز',
            'reason'              => 'دلیل',
        ],
    ],

    'table' => [
        'columns' => [
            'employee-name'   => 'کارمند',
            'time-off-type'   => 'نوع مرخصی',
            'amount'          => 'مقدار',
            'allocation-type' => 'نوع تخصیص',
            'status'          => 'وضعیت',
        ],

        'groups' => [
            'time-off-type'   => 'نوع مرخصی',
            'employee-name'   => 'نام کارمند',
            'allocation-type' => 'نوع تخصیص',
            'status'          => 'وضعیت',
            'start-date'      => 'تاریخ شروع',
        ],

        'actions' => [
            'approve' => [
                'title' => [
                    'validate' => 'تأیید نهایی',
                    'approve'  => 'تأیید',
                ],
                'notification' => [
                    'title' => 'تخصیص مرخصی تأیید شد',
                    'body'  => 'تخصیص مرخصی با موفقیت تأیید شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تخصیص مرخصی حذف شد',
                    'body'  => 'تخصیص مرخصی با موفقیت حذف شد.',
                ],
            ],

            'refused' => [
                'title'        => 'رد',
                'notification' => [
                    'title' => 'تخصیص مرخصی رد شد',
                    'body'  => 'تخصیص مرخصی با موفقیت رد شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تخصیص‌های مرخصی حذف شدند',
                    'body'  => 'تخصیص‌های مرخصی با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'allocation-details' => [
                'title'   => 'جزئیات تخصیص',
                'entries' => [
                    'name'                => 'نام',
                    'time-off-type'       => 'نوع مرخصی',
                    'allocation-type'     => 'نوع تخصیص',
                ],
            ],

            'validity-period' => [
                'title'   => 'دوره اعتبار',
                'entries' => [
                    'date-from' => 'از تاریخ',
                    'date-to'   => 'تا تاریخ',
                    'reason'    => 'دلیل',
                ],
            ],
            'allocation-status' => [
                'title'   => 'وضعیت تخصیص',
                'entries' => [
                    'date-to-placeholder' => 'بدون محدودیت',
                    'allocation'          => 'تعداد روز',
                    'allocation-value'    => ':days روز',
                    'state'               => 'وضعیت',
                ],
            ],
        ],
    ],
];
