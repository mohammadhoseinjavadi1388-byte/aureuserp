<?php

return [
    'title'        => 'نوبت کاری صندوق',
    'plural-title' => 'نوبت‌های کاری صندوق',

    'log-attributes' => [
        'name'                  => 'نوبت کاری صندوق',
        'state'                 => 'وضعیت',
        'cash-balance-start'    => 'مانده ابتدایی',
        'cash-balance-end-real' => 'مانده شمارش‌شده',
        'cash-difference'       => 'مغایرت',
    ],

    'chatter' => [
        'opening' => [
            'difference' => 'مغایرت وجه نقد افتتاح: :amount',
            'expected'   => 'وجه نقد مورد انتظار افتتاح: :amount',
            'counted'    => 'وجه نقد شمارش‌شده افتتاح: :amount',
            'message'    => 'پیام کنترل افتتاح: :message',
        ],

        'closing' => [
            'difference' => 'مغایرت بستن: :amount',
            'expected'   => 'مبلغ مورد انتظار بستن: :amount',
            'counted'    => 'مبلغ شمارش‌شده بستن: :amount',
            'message'    => 'پیام کنترل بستن: :message',
        ],

        'cash-movement' => [
            'in'     => 'ورود وجه نقد: :amount',
            'out'    => 'خروج وجه نقد: :amount',
            'reason' => 'علت: :reason',
        ],
    ],
];
