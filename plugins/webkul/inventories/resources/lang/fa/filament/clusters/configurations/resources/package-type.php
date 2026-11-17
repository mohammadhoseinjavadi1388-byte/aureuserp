<?php

return [
    'navigation' => [
        'title' => 'انواع بسته',
        'group' => 'تحویل',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',

                'fields' => [
                    'name'       => 'نام',
                    'barcode'    => 'بارکد',
                    'company'    => 'شرکت',
                    'weight'     => 'وزن',
                    'max-weight' => 'حداکثر وزن',

                    'fieldsets' => [
                        'size' => [
                            'title' => 'اندازه',

                            'fields' => [
                                'length' => 'طول',
                                'width'  => 'عرض',
                                'height' => 'ارتفاع',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'barcode'    => 'بارکد',
            'weight'     => 'وزن',
            'max-weight' => 'حداکثر وزن',
            'width'      => 'عرض',
            'height'     => 'ارتفاع',
            'length'     => 'طول',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'نوع بسته حذف شد',
                    'body'  => 'نوع بسته با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'نوع بسته حذف شد',
                    'body'  => 'نوع بسته با موفقیت حذف شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'اطلاعات عمومی',
                'entries' => [
                    'name'      => 'نام',
                    'fieldsets' => [
                        'size' => [
                            'title'   => 'ابعاد بسته',
                            'entries' => [
                                'length' => 'طول',
                                'width'  => 'عرض',
                                'height' => 'ارتفاع',
                            ],
                        ],
                    ],
                    'weight'     => 'وزن پایه',
                    'max-weight' => 'حداکثر وزن',
                    'barcode'    => 'بارکد',
                    'company'    => 'شرکت',
                    'created-at' => 'تاریخ ایجاد',
                    'updated-at' => 'آخرین به‌روزرسانی',
                ],
            ],

            'record-information' => [
                'title' => 'اطلاعات رکورد',

                'entries' => [
                    'created-by'   => 'ایجادکننده',
                    'created-at'   => 'تاریخ ایجاد',
                    'last-updated' => 'آخرین به‌روزرسانی',
                ],
            ],
        ],
    ],
];
