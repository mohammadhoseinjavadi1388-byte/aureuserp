<?php

return [
    'assets' => [
        'label'   => 'دارایی‌ها',
        'options' => [
            'receivable'  => 'دریافتنی',
            'cash'        => 'بانک و صندوق',
            'current'     => 'دارایی‌های جاری',
            'non-current' => 'دارایی‌های غیرجاری',
            'prepayments' => 'پیش‌پرداخت‌ها',
            'fixed'       => 'دارایی‌های ثابت',
        ],
    ],

    'liabilities' => [
        'label'   => 'بدهی‌ها',
        'options' => [
            'payable'     => 'پرداختنی',
            'credit-card' => 'کارت اعتباری',
            'current'     => 'بدهی‌های جاری',
            'non-current' => 'بدهی‌های غیرجاری',
        ],
    ],

    'equity' => [
        'label'   => 'حقوق صاحبان سهام',
        'options' => [
            'equity'     => 'حقوق صاحبان سهام',
            'unaffected' => 'سود سال جاری',
        ],
    ],

    'income' => [
        'label'   => 'درآمد',
        'options' => [
            'income' => 'درآمد',
            'other'  => 'سایر درآمدها',
        ],
    ],

    'expenses' => [
        'label'   => 'هزینه‌ها',
        'options' => [
            'expense'      => 'هزینه‌ها',
            'depreciation' => 'استهلاک',
            'direct-cost'  => 'بهای تمام‌شده درآمد',
        ],
    ],

    'off-balance' => [
        'label'   => 'خارج از ترازنامه',
        'options' => [
            'off-balance' => 'خارج از ترازنامه',
        ],
    ],
];
