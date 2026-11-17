<?php

return [
    'navigation' => [
        'title' => 'لیست‌های قیمت',
        'group' => 'محصولات',
    ],

    'header-actions' => [
        'create' => [
            'label' => 'لیست قیمت جدید',
        ],
    ],

    'form' => [
        'section' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'fields' => [
                    'name'     => 'نام لیست قیمت',
                    'currency' => 'ارز',
                    'company'  => 'شرکت',
                    'status'   => 'فعال',
                ],
            ],

            'rules' => [
                'title'        => 'قواعد قیمت',
                'description'  => 'اولین قاعده‌ای که با محصول مطابقت داشته باشد قیمت آن را تعیین می‌کند. قواعد اختصاصی‌تر بر قواعد کلی‌تر اولویت دارند.',
                'add-rule'     => 'افزودن قاعده',
                'all-products' => 'همه محصولات',

                'actions' => [
                    'edit' => 'ویرایش قاعده',
                ],

                'columns' => [
                    'apply-to'     => 'اعمال روی',
                    'target'       => 'اعمال بر',
                    'min-quantity' => 'حداقل تعداد',
                    'type'         => 'محاسبه قیمت',
                    'price'        => 'قیمت',
                    'period'       => 'دوره',
                ],

                'formula' => [
                    'discount'     => 'تخفیف',
                    'markup'       => 'افزایش قیمت',
                    'rule-tip'     => ':base با :discount % :type و :surcharge هزینه اضافی'."\n".'مثال: :amount * :factor + :surcharge → :total',
                    'rounding-tip' => 'نکته: می‌خواهید قیمت به 9.99 گرد شود؟ گرد کردن را روی 10.00 و هزینه اضافی را روی -0.01 تنظیم کنید.',
                ],

                'fields' => [
                    'apply-to-product'      => 'محصول',
                    'apply-to-category'     => 'دسته‌بندی',
                    'all-products'          => 'همه محصولات',
                    'all-categories'        => 'همه دسته‌بندی‌ها',
                    'all-variants'          => 'همه تنوع‌های محصول',
                    'variant'               => 'تنوع محصول',
                    'on'                    => 'روی',
                    'sales-price'           => 'قیمت فروش',
                    'apply-to'              => 'اعمال بر',
                    'product'               => 'محصول',
                    'category'              => 'دسته‌بندی محصول',
                    'min-quantity'          => 'حداقل تعداد',
                    'type'                  => 'نوع قیمت',
                    'fixed-price'           => 'قیمت ثابت',
                    'percent-price'         => 'تخفیف',
                    'percent-price-helper'  => 'برای اعمال افزایش قیمت، مقدار منفی وارد کنید.',
                    'base'                  => 'قیمت پایه',
                    'base-price-list'       => 'لیست قیمت دیگر',
                    'price-discount'        => 'تخفیف',
                    'price-discount-helper' => 'برای اعمال افزایش قیمت، مقدار منفی وارد کنید.',
                    'price-markup'          => 'افزایش قیمت',
                    'price-round'           => 'گرد کردن به',
                    'price-round-helper'    => 'قیمت را به مضربی از این مقدار گرد می‌کند؛ پس از تخفیف و پیش از هزینه اضافی اعمال می‌شود.',
                    'price-surcharge'       => 'هزینه اضافی',
                    'price-min-margin'      => 'حداقل حاشیه سود',
                    'price-max-margin'      => 'حداکثر حاشیه سود',
                    'starts-at'             => 'دوره اعتبار',
                    'ends-at'               => 'تاریخ پایان',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'     => 'لیست قیمت',
            'currency' => 'ارز',
            'company'  => 'شرکت',
            'rules'    => 'قواعد',
            'status'   => 'فعال',
        ],

        'filters' => [
            'status'   => 'فعال',
            'currency' => 'ارز',
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'لیست‌های قیمت حذف شدند',
                    'body'  => 'لیست‌های قیمت انتخاب‌شده با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],
];
