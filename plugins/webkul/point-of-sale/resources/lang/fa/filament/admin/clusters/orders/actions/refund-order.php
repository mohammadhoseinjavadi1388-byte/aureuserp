<?php

return [
    'label'          => 'مرجوع کردن محصولات',
    'refunded-label' => 'مرجوع‌شده',

    'form' => [
        'fields' => [
            'payment-method' => 'روش پرداخت استرداد وجه',
            'lines'          => 'ردیف‌های قابل استرداد',
            'selected'       => 'استرداد',
            'product'        => 'محصول',
            'refundable'     => 'قابل استرداد',
            'quantity'       => 'تعداد',
        ],
    ],

    'notification' => [
        'success' => [
            'title' => 'استرداد وجه ایجاد شد',
            'body'  => 'برای ردیف‌های انتخاب‌شده یک سفارش استرداد ایجاد شد.',
        ],
    ],
];
