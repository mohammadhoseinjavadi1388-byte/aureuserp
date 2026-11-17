<?php

return [
    'navigation' => [
        'title' => 'دستورهای تولید',
        'group' => 'عملیات',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',
                'fields' => [
                    'product'                => 'محصول',
                    'quantity'               => 'تعداد',
                    'uom'                    => 'واحد اندازه‌گیری',
                    'bill-of-material'       => 'فهرست مواد (BOM)',
                    'scheduled-date'         => 'تاریخ برنامه‌ریزی‌شده',
                    'scheduled-end'          => 'پایان برنامه‌ریزی‌شده',
                    'responsible'            => 'مسئول',
                    'to-produce'             => 'برای تولید',
                    'to-produce-placeholder' => 'پیش‌نمایش تصویر',
                    'uom-placeholder'        => 'واحد اندازه‌گیری',
                ],
            ],
        ],
        'tabs' => [
            'components' => [
                'title'        => 'اجزا',
                'add-action'   => 'افزودن سطر',
                'process-note' => 'اجزا هم‌زمان با تعریف فرایند تولید ایجاد می‌شوند.',
                'columns'      => [
                    'component'          => 'محصول',
                    'from'               => 'از',
                    'to-consume'         => 'برای مصرف',
                    'to-consume-tooltip' => 'موجودی در دسترس کافی نیست',
                    'quantity'           => 'تعداد',
                    'uom'                => 'واحد اندازه‌گیری',
                    'forecast'           => 'پیش‌بینی',
                ],
            ],
            'work-orders' => [
                'title'        => 'دستورهای کار',
                'add-action'   => 'افزودن سطر',
                'process-note' => 'دستورهای کار پس از پیکربندی فرایند تولید ایجاد می‌شوند.',
                'columns'      => [
                    'operation'          => 'عملیات',
                    'work-center'        => 'مرکز کاری',
                    'product'            => 'محصول',
                    'quantity-remaining' => 'تعداد باقی‌مانده',
                    'quantity-produced'  => 'تعداد تولیدشده',
                    'start'              => 'شروع',
                    'end'                => 'پایان',
                    'expected-duration'  => 'مدت مورد انتظار',
                    'real-duration'      => 'مدت واقعی',
                    'status'             => 'وضعیت',
                    'lot-serial'         => 'سری ساخت/شماره سریال',
                ],
                'actions'      => [
                    'open-work-order' => [
                        'tooltip' => 'باز کردن دستور کار',
                    ],

                    'done' => [
                        'label' => 'انجام‌شده',
                    ],
                ],
            ],
            'by-products' => [
                'title'        => 'محصولات جانبی',
                'process-note' => 'محصولات جانبی هم‌زمان با تعریف فرایند تولید ایجاد می‌شوند.',
                'columns'      => [
                    'product'    => 'محصول',
                    'to'         => 'به',
                    'to-produce' => 'برای تولید',
                    'uom'        => 'واحد اندازه‌گیری',
                ],
            ],
            'miscellaneous' => [
                'title'  => 'متفرقه',
                'fields' => [
                    'operation-type'             => 'نوع عملیات',
                    'source'                     => 'مبدأ',
                    'finished-products-location' => 'مکان انبار محصولات نهایی',
                    'company'                    => 'شرکت',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'reference'              => 'مرجع',
            'start'                  => 'شروع',
            'end'                    => 'پایان',
            'deadline'               => 'مهلت',
            'product'                => 'محصول',
            'lot-serial-number'      => 'سری ساخت/شماره سریال',
            'bill-of-material'       => 'فهرست مواد (BOM)',
            'source'                 => 'مبدأ',
            'responsible'            => 'مسئول',
            'mo-readiness'           => 'آمادگی دستور تولید',
            'component-status'       => 'وضعیت اجزا',
            'quantity'               => 'تعداد',
            'uom'                    => 'واحد اندازه‌گیری',
            'consumption-efficiency' => 'بازده مصرف',
            'expected-duration'      => 'مدت مورد انتظار',
            'real-duration'          => 'مدت واقعی',
            'company'                => 'شرکت',
            'state'                  => 'وضعیت',
        ],
        'groups' => [
            'state'            => 'وضعیت',
            'product'          => 'محصول',
            'bill-of-material' => 'فهرست مواد (BOM)',
            'responsible'      => 'مسئول',
            'deadline'         => 'مهلت',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'دستور تولید حذف شد',
                    'body'  => 'دستور تولید با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'دستورهای تولید حذف شدند',
                    'body'  => 'دستورهای تولید انتخاب‌شده با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'عمومی',
                'entries' => [
                    'product'                  => 'محصول',
                    'scheduled-date'           => 'تاریخ برنامه‌ریزی‌شده',
                    'responsible'              => 'مسئول',
                    'quantity'                 => 'تعداد',
                    'uom'                      => 'واحد اندازه‌گیری',
                    'bill-of-material'         => 'فهرست مواد (BOM)',
                    'operation-type'           => 'نوع عملیات',
                    'consumption-efficiency'   => 'بازده مصرف',
                ],
            ],
        ],
        'tabs' => [
            'components' => [
                'title'        => 'اجزا',
                'process-note' => 'اجزا پس از پیکربندی فرایند تولید در دسترس خواهند بود.',
                'columns'      => [
                    'component' => 'جزء',
                    'quantity'  => 'تعداد',
                    'uom'       => 'واحد اندازه‌گیری',
                ],
            ],
            'work-orders' => [
                'title'        => 'دستورهای کار',
                'process-note' => 'دستورهای کار پس از پیکربندی فرایند تولید در دسترس خواهند بود.',
                'columns'      => [
                    'operation'          => 'عملیات',
                    'work-center'        => 'مرکز کاری',
                    'product'            => 'محصول',
                    'quantity-remaining' => 'تعداد باقی‌مانده',
                    'expected-duration'  => 'مدت مورد انتظار',
                    'real-duration'      => 'مدت واقعی',
                    'lot-serial'         => 'سری ساخت/شماره سریال',
                    'start'              => 'شروع',
                    'end'                => 'پایان',
                ],
            ],
            'by-products' => [
                'title'        => 'محصولات جانبی',
                'process-note' => 'محصولات جانبی پس از پیکربندی فرایند تولید در دسترس خواهند بود.',
                'columns'      => [
                    'product'    => 'محصول',
                    'to'         => 'به',
                    'to-produce' => 'برای تولید',
                    'uom'        => 'واحد اندازه‌گیری',
                ],
            ],
            'miscellaneous' => [
                'title'   => 'متفرقه',
                'entries' => [
                    'operation-type'             => 'نوع عملیات',
                    'source'                     => 'مبدأ',
                    'finished-products-location' => 'مکان انبار محصولات نهایی',
                    'company'                    => 'شرکت',
                ],
            ],
        ],
    ],

    'pages' => [
        'shared' => [
            'header-actions' => [
                'confirm' => [
                    'label'        => 'تأیید',
                    'notification' => [
                        'title' => 'دستور تولید تأیید شد',
                    ],
                ],

                'cancel' => [
                    'label'        => 'لغو',
                    'notification' => [
                        'title' => 'دستور تولید لغو شد',
                    ],
                ],
            ],
        ],
    ],
];
