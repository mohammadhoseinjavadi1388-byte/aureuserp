<?php

return [
    'navigation' => [
        'title' => 'دستورهای کار',
        'group' => 'عملیات',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',
                'fields' => [
                    'work-order'          => 'دستور کار',
                    'work-center'         => 'مرکز کاری',
                    'product'             => 'محصول',
                    'quantity'            => 'تعداد',
                    'manufacturing-order' => 'دستور تولید',
                    'lot-serial'          => 'سری ساخت/شماره سریال',
                    'start-date'          => 'تاریخ شروع',
                    'end-date'            => 'تاریخ پایان',
                    'date-range-separator'=> 'تا',
                    'expected-duration'   => 'مدت مورد انتظار',
                    'duration-suffix'     => 'دقیقه',
                    'real-duration'       => 'مدت واقعی',
                ],
            ],
        ],
        'tabs' => [
            'time-tracking' => [
                'title'      => 'ثبت زمان',
                'add-action' => 'افزودن سطر',
                'columns'    => [
                    'user'         => 'کاربر',
                    'duration'     => 'مدت',
                    'start-date'   => 'تاریخ شروع',
                    'end-date'     => 'تاریخ پایان',
                    'productivity' => 'بهره‌وری',
                ],
                'footer' => [
                    'real-duration' => 'مدت واقعی',
                ],
            ],
            'components' => [
                'title'      => 'اجزا',
                'add-action' => 'افزودن سطر',
                'columns'    => [
                    'product'    => 'محصول',
                    'from'       => 'از',
                    'to-consume' => 'برای مصرف',
                    'quantity'   => 'تعداد',
                    'uom'        => 'واحد اندازه‌گیری',
                ],
            ],
            'work-instruction' => [
                'title'   => 'دستورالعمل کار',
                'entries' => [
                    'operation' => 'عملیات',
                    'worksheet' => 'برگه دستورالعمل',
                ],
            ],
            'blocked-by' => [
                'title'  => 'مسدودشده توسط',
                'fields' => [
                    'work-orders' => 'دستورهای کار',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'operation'           => 'عملیات',
            'work-center'         => 'مرکز کاری',
            'manufacturing-order' => 'دستور تولید',
            'product'             => 'محصول',
            'quantity-remaining'  => 'تعداد باقی‌مانده',
            'lot-serial'          => 'سری ساخت/شماره سریال',
            'start'               => 'شروع',
            'end'                 => 'پایان',
            'expected-duration'   => 'مدت مورد انتظار',
            'real-duration'       => 'مدت واقعی',
            'status'              => 'وضعیت',
        ],
        'groups' => [
            'status'              => 'وضعیت',
            'work-center'         => 'مرکز کاری',
            'manufacturing-order' => 'دستور تولید',
            'product'             => 'محصول',
            'start'               => 'شروع',
            'end'                 => 'پایان',
        ],
        'filters' => [
            'work-order'          => 'دستور کار',
            'status'              => 'وضعیت',
            'operation'           => 'عملیات',
            'work-center'         => 'مرکز کاری',
            'manufacturing-order' => 'دستور تولید',
            'product'             => 'محصول',
            'start'               => 'شروع',
            'end'                 => 'پایان',
            'created-at'          => 'تاریخ ایجاد',
            'updated-at'          => 'تاریخ به‌روزرسانی',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'عمومی',
                'entries' => [
                    'work-order'          => 'دستور کار',
                    'work-center'         => 'مرکز کاری',
                    'product'             => 'محصول',
                    'quantity'            => 'تعداد',
                    'manufacturing-order' => 'دستور تولید',
                    'lot-serial'          => 'سری ساخت/شماره سریال',
                    'start-date'          => 'تاریخ شروع',
                    'end-date'            => 'تاریخ پایان',
                    'expected-duration'   => 'مدت مورد انتظار',
                    'real-duration'       => 'مدت واقعی',
                ],
            ],
        ],
        'tabs' => [
            'time-tracking' => [
                'title'  => 'ثبت زمان',
                'footer' => [
                    'real-duration' => 'مدت واقعی',
                ],
            ],
            'components' => [
                'title' => 'اجزا',
            ],
            'work-instruction' => [
                'title'   => 'دستورالعمل کار',
                'entries' => [
                    'operation' => 'عملیات',
                    'worksheet' => 'برگه دستورالعمل',
                ],
            ],
            'blocked-by' => [
                'title'   => 'مسدودشده توسط',
                'columns' => [
                    'work-order'  => 'دستور کار',
                    'work-center' => 'مرکز کاری',
                    'status'      => 'وضعیت',
                ],
            ],
        ],
    ],

    'pages' => [
        'list' => [
            'header-actions' => [
                'create' => [
                    'label' => 'دستور کار جدید',
                ],
            ],
        ],
    ],
];
