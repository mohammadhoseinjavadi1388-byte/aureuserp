<?php

return [
    'columns' => [
        'number'          => 'شماره',
        'state'           => 'وضعیت',
        'customer'        => 'مشتری',
        'bill-date'       => 'تاریخ صورت‌حساب خرید',
        'due-date'        => 'تاریخ سررسید',
        'tax-excluded'    => 'بدون مالیات',
        'tax'             => 'مالیات',
        'total'           => 'جمع کل',
        'amount-due'      => 'مبلغ قابل پرداخت',
        'payment-state'   => 'وضعیت پرداخت',
        'checked'         => 'بررسی‌شده',
        'accounting-date' => 'تاریخ حسابداری',
        'source-document' => 'سند مبدأ',
        'reference'       => 'مرجع',
        'sales-person'    => 'کارشناس فروش',
        'bill-currency'   => 'ارز صورت‌حساب خرید',
    ],

    'values' => [
        'yes' => 'بله',
        'no'  => 'خیر',
    ],

    'notification' => [
        'completed' => 'برون‌بری صورت‌حساب‌های خرید شما کامل شد و :count ردیف برون‌بری شد.',
        'failed'    => 'برون‌بری :count ردیف ناموفق بود.',
    ],
];
