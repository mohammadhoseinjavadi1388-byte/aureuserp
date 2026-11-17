<?php

return [
    'title' => 'موجودی‌ها',

    'tabs' => [
        'internal-locations' => 'مکان‌های داخلی',
        'transit-locations'  => 'مکان‌های ترانزیت',
        'on-hand'            => 'موجودی در دسترس',
        'to-count'           => 'برای شمارش',
        'to-apply'           => 'برای اعمال',
    ],

    'form' => [
        'fields' => [
            'product'          => 'محصول',
            'location'         => 'مکان انبار',
            'package'          => 'بسته',
            'lot'              => 'سری ساخت / شماره سریال',
            'on-hand-qty'      => 'تعداد موجودی در دسترس',
            'storage-category' => 'دسته‌بندی انبارش',
        ],
    ],

    'table' => [
        'columns' => [
            'product'           => 'محصول',
            'location'          => 'مکان انبار',
            'lot'               => 'سری ساخت / شماره سریال',
            'storage-category'  => 'دسته‌بندی انبارش',
            'quantity'          => 'تعداد',
            'package'           => 'بسته',
            'on-hand'           => 'تعداد موجودی در دسترس',
            'unit'              => 'واحد',
            'reserved-quantity' => 'تعداد رزروشده',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'تعداد به‌روزرسانی شد',
                    'body'  => 'تعداد با موفقیت به‌روزرسانی شد.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'label' => 'افزودن موجودی',

                'notification' => [
                    'title' => 'موجودی افزوده شد',
                    'body'  => 'موجودی با موفقیت افزوده شد.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'موجودی از قبل وجود دارد',
                        'body'  => 'برای همین پیکربندی از قبل موجودی ثبت شده است. لطفاً به‌جای آن، تعداد را به‌روزرسانی کنید.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'موجودی حذف شد',
                    'body'  => 'موجودی با موفقیت حذف شد.',
                ],
            ],
        ],
    ],
];
