<?php

return [
    'navigation' => [
        'title' => 'محصولات',
        'group' => 'انبارداری',
    ],

    'global-search' => [
        'partner' => 'طرف حساب',
        'origin'  => 'مبدأ',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'receive-from'         => 'دریافت از',
                    'contact'              => 'مخاطب',
                    'delivery-address'     => 'نشانی تحویل',
                    'operation-type'       => 'نوع عملیات',
                    'source-location'      => 'مکان مبدأ',
                    'destination-location' => 'مکان مقصد',
                ],
            ],

            'additional-fields' => [
                'title' => 'اطلاعات تکمیلی',
            ],
        ],

        'tabs' => [
            'operations' => [
                'title' => 'عملیات',

                'columns' => [
                    'product'                    => 'محصول',
                    'final-location'             => 'مکان نهایی',
                    'description'                => 'توضیحات',
                    'scheduled-at'               => 'تاریخ برنامه‌ریزی‌شده',
                    'deadline'                   => 'مهلت',
                    'packaging'                  => 'بسته‌بندی',
                    'demand'                     => 'تقاضا',
                    'quantity'                   => 'تعداد',
                    'insufficient-stock-tooltip' => 'تعداد موجود کافی نیست',
                    'unit'                       => 'واحد',
                    'picked'                     => 'برداشت‌شده',
                ],

                'actions' => [
                    'open-product' => [
                        'tooltip' => 'باز کردن محصول',
                    ],
                ],

                'fields' => [
                    'product'        => 'محصول',
                    'final-location' => 'مکان نهایی',
                    'description'    => 'توضیحات',
                    'scheduled-at'   => 'تاریخ برنامه‌ریزی‌شده',
                    'deadline'       => 'مهلت',
                    'packaging'      => 'بسته‌بندی',
                    'demand'         => 'تقاضا',
                    'quantity'       => 'تعداد',
                    'unit'           => 'واحد',
                    'picked'         => 'برداشت‌شده',

                    'lines' => [
                        'modal-heading'             => 'مدیریت جابه‌جایی‌های موجودی',
                        'modal-submit-action-label' => 'ذخیره',
                        'add-line'                  => 'افزودن ردیف',

                        'actions' => [
                            'generate' => 'تولید شماره سریال/سری ساخت',
                            'import'   => 'درون‌ریزی شماره سریال/سری ساخت',
                        ],

                        'fields' => [
                            'lot'                => 'سری ساخت/شماره سریال',
                            'pick-from'          => 'برداشت از',
                            'location'           => 'ذخیره در',
                            'package'            => 'بسته مقصد',
                            'quantity'           => 'تعداد',
                            'uom'                => 'واحد اندازه‌گیری',
                            'first-lot'          => 'شماره اولین سری ساخت',
                            'quantity-per-lot'   => 'تعداد در هر سری ساخت',
                            'quantity-received'  => 'تعداد دریافت‌شده',
                            'keep-current-lines' => 'حفظ ردیف‌های فعلی',
                            'serials'            => 'سری ساخت/شماره‌های سریال',
                            'serials-helper'     => 'در هر خط یک سری ساخت/شماره سریال وارد کنید.',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'تکمیلی',

                'fields' => [
                    'responsible'                  => 'مسئول',
                    'shipping-policy'              => 'سیاست ارسال',
                    'shipping-policy-hint-tooltip' => 'مشخص می‌کند کالاها به‌صورت جزئی تحویل شوند یا همه یک‌جا.',
                    'scheduled-at'                 => 'تاریخ برنامه‌ریزی‌شده',
                    'scheduled-at-hint-tooltip'    => 'زمان برنامه‌ریزی‌شده برای پردازش نخستین بخش محموله. اگر در اینجا مقداری را دستی وارد کنید، همان مقدار به‌عنوان تاریخ مورد انتظار همه جابه‌جایی‌های موجودی اعمال می‌شود.',
                    'source-document'              => 'سند مبدأ',
                    'source-document-hint-tooltip' => 'مرجع سند',
                ],
            ],

            'note' => [
                'title' => 'یادداشت',

                'fields' => [

                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'        => 'مورد علاقه',
            'reference'       => 'مرجع',
            'from'            => 'از',
            'to'              => 'به',
            'contact'         => 'مخاطب',
            'responsible'     => 'مسئول',
            'scheduled-at'    => 'تاریخ برنامه‌ریزی‌شده',
            'deadline'        => 'مهلت',
            'closed-at'       => 'تاریخ بسته شدن',
            'source-document' => 'سند مبدأ',
            'operation-type'  => 'نوع عملیات',
            'company'         => 'شرکت',
            'state'           => 'وضعیت',
            'deleted-at'      => 'تاریخ حذف',
            'created-at'      => 'تاریخ ایجاد',
            'updated-at'      => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'state'           => 'وضعیت',
            'source-document' => 'سند مبدأ',
            'operation-type'  => 'نوع عملیات',
            'scheduled-at'    => 'تاریخ برنامه‌ریزی‌شده',
            'created-at'      => 'تاریخ ایجاد',
        ],

        'filters' => [
            'operation-type'       => 'نوع عملیات',
            'name'                 => 'نام',
            'state'                => 'وضعیت',
            'partner'              => 'طرف حساب',
            'responsible'          => 'مسئول',
            'owner'                => 'مالک',
            'source-location'      => 'مکان مبدأ',
            'destination-location' => 'مکان مقصد',
            'deadline'             => 'مهلت',
            'scheduled-at'         => 'تاریخ برنامه‌ریزی‌شده',
            'closed-at'            => 'تاریخ بسته شدن',
            'created-at'           => 'تاریخ ایجاد',
            'updated-at'           => 'تاریخ به‌روزرسانی',
            'company'              => 'شرکت',
            'creator'              => 'ایجادکننده',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'اطلاعات عمومی',
                'entries' => [
                    'contact'              => 'مخاطب',
                    'operation-type'       => 'نوع عملیات',
                    'source-location'      => 'مکان مبدأ',
                    'destination-location' => 'مکان مقصد',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title'   => 'عملیات',
                'entries' => [
                    'product'        => 'محصول',
                    'final-location' => 'مکان نهایی',
                    'description'    => 'توضیحات',
                    'scheduled-at'   => 'تاریخ برنامه‌ریزی‌شده',
                    'deadline'       => 'مهلت',
                    'packaging'      => 'بسته‌بندی',
                    'demand'         => 'تقاضا',
                    'quantity'       => 'تعداد',
                    'unit'           => 'واحد',
                    'picked'         => 'برداشت‌شده',
                ],
            ],
            'additional' => [
                'title'   => 'اطلاعات تکمیلی',
                'entries' => [
                    'responsible'     => 'مسئول',
                    'shipping-policy' => 'سیاست ارسال',
                    'scheduled-at'    => 'تاریخ برنامه‌ریزی‌شده',
                    'source-document' => 'سند مبدأ',
                ],
            ],
            'note' => [
                'title' => 'یادداشت',
            ],
        ],
    ],

    'tabs' => [
        'todo'        => 'در دست اقدام',
        'my'          => 'انتقال‌های من',
        'starred'     => 'ستاره‌دار',
        'draft'       => 'پیش‌نویس',
        'waiting'     => 'در انتظار',
        'ready'       => 'آماده',
        'late'        => 'دیرکرد',
        'done'        => 'انجام‌شده',
        'canceled'    => 'لغوشده',
        'back-orders' => 'سفارش‌های معوق',
    ],

    'notifications' => [
        'uom-precision-warning' => [
            'title' => 'هشدار دقت واحد اندازه‌گیری',
            'body'  => 'واحد اندازه‌گیری انتخابی شما کوچک‌تر از واحدی است که این محصول با آن در انبار نگهداری می‌شود. این موضوع ممکن است در تعدادهای رزروشده خطای گردکردن ایجاد کند. بهتر است برای ارزش‌گذاری موجودی از کوچک‌ترین واحد اندازه‌گیری استفاده کنید یا دقت گردکردن واحد پایه را کاهش دهید.',
        ],
    ],
];
