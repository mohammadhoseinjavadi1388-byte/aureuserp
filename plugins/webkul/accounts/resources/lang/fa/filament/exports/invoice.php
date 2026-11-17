<?php

return [
    'columns' => [
        'number'           => 'شماره',
        'state'            => 'وضعیت',
        'customer'         => 'مشتری',
        'invoice-date'     => 'تاریخ فاکتور',
        'due-date'         => 'تاریخ سررسید',
        'tax-excluded'     => 'بدون مالیات',
        'tax'              => 'مالیات',
        'total'            => 'جمع کل',
        'amount-due'       => 'مبلغ قابل پرداخت',
        'payment-state'    => 'وضعیت پرداخت',
        'checked'          => 'بررسی‌شده',
        'accounting-date'  => 'تاریخ حسابداری',
        'source-document'  => 'سند مبدأ',
        'reference'        => 'مرجع',
        'sales-person'     => 'کارشناس فروش',
        'invoice-currency' => 'ارز فاکتور',
    ],

    'values' => [
        'yes' => 'بله',
        'no'  => 'خیر',
    ],

    'notification' => [
        'completed' => 'برون‌بری فاکتورهای شما کامل شد و :count ردیف برون‌بری شد.',
        'failed'    => 'برون‌بری :count ردیف ناموفق بود.',
    ],
];
