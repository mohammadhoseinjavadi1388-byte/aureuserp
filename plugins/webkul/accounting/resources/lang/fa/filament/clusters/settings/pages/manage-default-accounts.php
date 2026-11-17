<?php

return [
    'title' => 'مدیریت حساب‌های پیش‌فرض',

    'setup' => [
        'action'       => 'راه‌اندازی حسابداری برای این شرکت',
        'notice'       => 'حسابداری هنوز برای این شرکت راه‌اندازی نشده است. برای ایجاد سرفصل حساب‌ها، دفاتر روزنامه و تنظیمات پیش‌فرض آن، از گزینه «راه‌اندازی حسابداری» در بالا استفاده کنید.',
        'notification' => [
            'title' => 'حسابداری راه‌اندازی شد',
            'body'  => 'سرفصل حساب‌ها، دفاتر روزنامه و تنظیمات پیش‌فرض برای این شرکت ایجاد شد.',
        ],
    ],

    'form' => [
        'exchange-difference-entries' => [
            'label' => 'اسناد تفاوت نرخ ارز',

            'fields' => [
                'journal' => [
                    'label' => 'دفتر روزنامه',
                ],

                'gain' => [
                    'label' => 'سود',
                ],

                'loss' => [
                    'label' => 'زیان',
                ],
            ],
        ],

        'bank-transfer-and-payments' => [
            'label' => 'انتقال بانکی و پرداخت‌ها',

            'fields' => [
                'bank-suspense-account' => [
                    'label' => 'حساب معلق بانک',
                ],

                'transfer-account' => [
                    'label' => 'حساب انتقال',
                ],
            ],
        ],

        'product-accounts' => [
            'label' => 'حساب‌های محصول',

            'fields' => [
                'income-account' => [
                    'label' => 'حساب درآمد',
                ],

                'expense-account' => [
                    'label' => 'حساب هزینه',
                ],
            ],
        ],
    ],
];
