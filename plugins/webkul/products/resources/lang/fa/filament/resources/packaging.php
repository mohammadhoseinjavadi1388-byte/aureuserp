<?php

return [
    'form' => [
        'name'    => 'نام',
        'barcode' => 'بارکد',
        'product' => 'محصول',
        'routes'  => 'مسیرها',
        'qty'     => 'تعداد',
        'company' => 'شرکت',
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'product'    => 'محصول',
            'routes'     => 'مسیرها',
            'qty'        => 'تعداد',
            'company'    => 'شرکت',
            'barcode'    => 'بارکد',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'product'    => 'محصول',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'product' => 'محصول',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'بسته‌بندی به‌روزرسانی شد',
                    'body'  => 'بسته‌بندی با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'بسته‌بندی حذف شد',
                        'body'  => 'بسته‌بندی با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف بسته‌بندی ممکن نشد',
                        'body'  => 'این بسته‌بندی قابل حذف نیست، زیرا در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'چاپ',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'بسته‌بندی‌ها حذف شدند',
                        'body'  => 'بسته‌بندی‌ها با موفقیت حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف بسته‌بندی‌ها ممکن نشد',
                        'body'  => 'این بسته‌بندی‌ها قابل حذف نیستند، زیرا در حال استفاده هستند.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'label' => 'بسته‌بندی جدید',

                'notification' => [
                    'title' => 'بسته‌بندی ایجاد شد',
                    'body'  => 'بسته‌بندی با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'entries' => [
                    'name'    => 'نام بسته',
                    'barcode' => 'بارکد',
                    'product' => 'محصول',
                    'qty'     => 'تعداد',
                ],
            ],

            'organization' => [
                'title' => 'جزئیات سازمانی',

                'entries' => [
                    'company'    => 'شرکت',
                    'creator'    => 'ایجادکننده',
                    'created_at' => 'تاریخ ایجاد',
                    'updated_at' => 'تاریخ آخرین به‌روزرسانی',
                ],
            ],
        ],
    ],
];
