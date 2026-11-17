<?php

return [
    'title' => 'مدیریت مالیات',

    'form' => [
        'default-taxes' => [
            'label'       => 'مالیات‌های پیش‌فرض',
            'helper-text' => 'اگر مالیاتی انتخاب نشده باشد، مقدار پیش‌فرض روی محصولات اعمال می‌شود',
        ],

        'sales-tax' => [
            'label' => 'مالیات فروش',
        ],

        'purchase-tax' => [
            'label' => 'مالیات خرید',
        ],

        'prices' => [
            'label' => 'قیمت‌ها',
        ],

        'rounding-method' => [
            'label'       => 'روش گرد کردن',
            'helper-text' => 'روشی که برای گرد کردن مبالغ مالیات به کار می‌رود',

            'options' => [
                'round-per-line' => 'گرد کردن در هر سطر',
                'round-globally' => 'گرد کردن روی جمع کل',
            ],
        ],

        'fiscal-country' => [
            'label' => 'کشور مالیاتی',
        ],
    ],
];
