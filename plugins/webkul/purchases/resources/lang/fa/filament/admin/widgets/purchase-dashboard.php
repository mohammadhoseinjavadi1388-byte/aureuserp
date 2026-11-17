<?php

return [
    'unknown'       => 'نامشخص',
    'other'         => 'سایر',
    'share'         => 'سهم',
    'status'        => 'وضعیت',
    'receipt-status'=> 'وضعیت رسید کالا',
    'stats'         => [
        'heading'              => 'شاخص‌های کلیدی',
        'draft-rfqs'           => 'استعلام‌های پیش‌نویس',
        'sent-rfqs'            => 'استعلام‌های ارسال‌شده',
        'confirmed-orders'     => 'سفارش‌های تأییدشده',
        'total-purchase-value' => 'ارزش کل خرید',
        'increase'             => ':percent% افزایش',
        'decrease'             => ':percent% کاهش',
        'no-change'            => 'بدون تغییر',
    ],

    'trend'        => [
        'heading' => 'روند سفارش‌های خرید بر اساس وضعیت',
        'states'  => [
            'draft'    => 'پیش‌نویس',
            'sent'     => 'ارسال‌شده',
            'purchase' => 'سفارش خرید',
            'done'     => 'انجام‌شده',
            'canceled' => 'لغوشده',
        ],
    ],

    'vendor-spend' => [
        'heading'         => 'سهم خرید از تأمین‌کنندگان',
        'total-purchased' => 'جمع کل خرید',
    ],

    'top-orders'   => [
        'heading' => 'بزرگ‌ترین سفارش‌ها',
        'columns' => [
            'reference'      => 'شماره سفارش',
            'vendor'         => 'تأمین‌کننده',
            'billing-status' => 'وضعیت صورت‌حساب',
            'amount'         => 'مبلغ کل',
        ],
    ],

    'top-products' => [
        'heading' => 'پرخریدترین محصولات',
        'columns' => [
            'name'     => 'محصول',
            'quantity' => 'تعداد کل',
            'value'    => 'ارزش کل',
        ],
    ],
    'top-rfqs'     => [
        'heading' => 'بزرگ‌ترین استعلام‌ها',
        'columns' => [
            'reference' => 'شماره استعلام',
            'status'    => 'وضعیت',
            'amount'    => 'مبلغ کل',
        ],
    ],

    'top-vendors'  => [
        'heading' => 'تأمین‌کنندگان برتر',
        'columns' => [
            'vendor' => 'تأمین‌کننده',
            'orders' => 'سفارش‌ها',
            'amount' => 'جمع کل خرید',
        ],
    ],
];
