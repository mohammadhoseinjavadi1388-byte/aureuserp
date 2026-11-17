<?php

return [
    'navigation' => [
        'title' => 'تعدادها',
        'group' => 'تعدیلات',
    ],

    'form' => [
        'fields' => [
            'location'         => 'مکان انبار',
            'product'          => 'محصول',
            'package'          => 'بسته',
            'lot'              => 'سری ساخت / شماره‌های سریال',
            'counted-qty'      => 'تعداد شمارش‌شده',
            'scheduled-at'     => 'تاریخ برنامه‌ریزی‌شده',
            'storage-category' => 'دسته‌بندی انبارش',
        ],
    ],

    'table' => [
        'columns' => [
            'location'           => 'مکان انبار',
            'product'            => 'محصول',
            'product-category'   => 'دسته‌بندی محصول',
            'lot'                => 'سری ساخت / شماره‌های سریال',
            'storage-category'   => 'دسته‌بندی انبارش',
            'available-quantity' => 'موجودی قابل استفاده',
            'quantity'           => 'تعداد',
            'package'            => 'بسته',
            'last-counted-at'    => 'تاریخ آخرین شمارش',
            'on-hand'            => 'موجودی در دسترس',
            'uom'                => 'واحد اندازه‌گیری',
            'counted'            => 'تعداد شمارش‌شده',
            'difference'         => 'اختلاف',
            'scheduled-at'       => 'تاریخ برنامه‌ریزی‌شده',
            'user'               => 'کاربر',
            'company'            => 'شرکت',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'تعداد به‌روزرسانی شد',
                    'body'  => 'تعداد با موفقیت به‌روزرسانی شد.',
                ],
            ],
        ],

        'groups' => [
            'product'          => 'محصول',
            'product-category' => 'دسته‌بندی محصول',
            'location'         => 'مکان انبار',
            'storage-category' => 'دسته‌بندی انبارش',
            'lot'              => 'سری ساخت / شماره‌های سریال',
            'company'          => 'شرکت',
            'package'          => 'بسته',
        ],

        'filters' => [
            'product'             => 'محصول',
            'uom'                 => 'واحد اندازه‌گیری',
            'product-category'    => 'دسته‌بندی محصول',
            'location'            => 'مکان انبار',
            'storage-category'    => 'دسته‌بندی انبارش',
            'lot'                 => 'سری ساخت / شماره‌های سریال',
            'company'             => 'شرکت',
            'package'             => 'بسته',
            'on-hand-quantity'    => 'موجودی در دسترس',
            'difference-quantity' => 'تعداد اختلاف',
            'incoming-at'         => 'تاریخ ورود',
            'scheduled-at'        => 'تاریخ برنامه‌ریزی‌شده',
            'user'                => 'کاربر',
            'created-at'          => 'تاریخ ایجاد',
            'updated-at'          => 'تاریخ به‌روزرسانی',
            'company'             => 'شرکت',
            'creator'             => 'ایجادکننده',
        ],

        'header-actions' => [
            'create' => [
                'label' => 'افزودن تعداد',

                'notification' => [
                    'title' => 'تعداد افزوده شد',
                    'body'  => 'تعداد با موفقیت افزوده شد.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'تعداد از قبل وجود دارد',
                        'body'  => 'برای این پیکربندی از قبل تعدادی ثبت شده است. لطفاً همان تعداد موجود را به‌روزرسانی کنید.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'apply' => [
                'label' => 'اعمال',

                'notification' => [
                    'title' => 'تغییرات تعداد اعمال شد',
                    'body'  => 'تغییرات تعداد با موفقیت اعمال شد.',
                ],
            ],

            'clear' => [
                'label' => 'پاک کردن',

                'notification' => [
                    'title' => 'تغییرات تعداد پاک شد',
                    'body'  => 'تغییرات تعداد با موفقیت پاک شد.',
                ],
            ],
        ],
    ],
];
