<?php

return [
    'label' => 'بستن نوبت کاری صندوق',

    'form' => [
        'fields' => [
            'cash-balance-end-real'             => 'وجه نقد شمارش‌شده',
            'cash-balance-end-real-helper-text' => 'مانده مورد انتظار: :expected',
            'closing-notes'                     => 'یادداشت‌ها',
            'balancing-account'                 => 'حساب تراز کننده',
            'balancing-account-helper-text'     => 'فقط زمانی استفاده می‌شود که سند بستن تراز نباشد.',
        ],
    ],

    'notification' => [
        'unbalanced' => [
            'title' => 'سند بستن تراز نیست',
        ],

        'success' => [
            'title' => 'نوبت کاری صندوق بسته شد',
            'body'  => 'نوبت کاری صندوق با موفقیت بسته شد.',
        ],
    ],
];
