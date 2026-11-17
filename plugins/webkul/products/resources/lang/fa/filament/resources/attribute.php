<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',

                'fields' => [
                    'name' => 'نام',
                    'type' => 'نوع',
                ],
            ],

            'options' => [
                'title'  => 'گزینه‌ها',

                'fields' => [
                    'name'        => 'نام',
                    'color'       => 'رنگ',
                    'extra-price' => 'قیمت اضافه',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'نام',
            'type'        => 'نوع',
            'deleted-at'  => 'تاریخ حذف',
            'created-at'  => 'تاریخ ایجاد',
            'updated-at'  => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'type'       => 'نوع',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'type' => 'نوع',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'ویژگی بازیابی شد',
                    'body'  => 'ویژگی با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ویژگی حذف شد',
                    'body'  => 'ویژگی با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'ویژگی حذف دائمی شد',
                        'body'  => 'ویژگی با موفقیت حذف دائمی شد.',
                    ],

                    'error' => [
                        'title' => 'حذف ویژگی ممکن نشد',
                        'body'  => 'این ویژگی قابل حذف نیست، زیرا در این محصول استفاده شده است: :products',
                        'more'  => '... و :count مورد دیگر',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'ویژگی‌ها بازیابی شدند',
                    'body'  => 'ویژگی‌ها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ویژگی‌ها حذف شدند',
                    'body'  => 'ویژگی‌ها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'ویژگی‌ها حذف دائمی شدند',
                        'body'  => 'ویژگی‌ها با موفقیت حذف دائمی شدند.',
                    ],

                    'partial' => [
                        'title' => 'برخی ویژگی‌ها حذف نشدند',
                        'body'  => 'ویژگی «:attributes» قابل حذف نیست، زیرا در این محصول استفاده شده است: :products',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'entries' => [
                    'name' => 'نام',
                    'type' => 'نوع',
                ],
            ],

            'record-information' => [
                'title' => 'اطلاعات رکورد',

                'entries' => [
                    'creator'    => 'ایجادکننده',
                    'created_at' => 'تاریخ ایجاد',
                    'updated_at' => 'تاریخ آخرین به‌روزرسانی',
                ],
            ],
        ],
    ],
];
