<?php

return [
    'model-label'        => 'سطح',
    'plural-model-label' => 'سطوح',

    'navigation' => [
        'title' => 'سطوح',
        'group' => 'اعضا',
    ],

    'header-actions' => [
        'create' => 'سطح جدید',
    ],

    'form' => [
        'name'          => 'نام',
        'weight'        => 'وزن سطح',
        'weight-helper' => 'میزان احتمال واگذاری سرنخ به طرف‌حساب‌های این سطح. 0 یعنی بدون سرنخ.',
    ],

    'table' => [
        'columns' => [
            'name'     => 'نام',
            'weight'   => 'وزن سطح',
            'partners' => 'مخاطبان',
        ],
    ],

    'tabs' => [
        'active'   => 'فعال',
        'archived' => 'بایگانی‌شده',
    ],

    'notifications' => [
        'created'  => 'سطح ایجاد شد',
        'updated'  => 'سطح به‌روزرسانی شد',
        'restored' => 'سطح بازیابی شد',
        'deleted'  => 'سطح حذف شد',
    ],

    'contact' => [
        'section'       => 'سطح طرف حساب',
        'level'         => 'سطح',
        'weight'        => 'وزن سطح',
        'weight-helper' => 'برای استفاده از وزن سطح، خالی بگذارید.',
    ],
];
