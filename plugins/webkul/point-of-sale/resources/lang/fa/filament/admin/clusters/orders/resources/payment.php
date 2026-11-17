<?php

return [
    'navigation' => [
        'title' => 'پرداخت‌ها',
        'group' => 'پایانه فروش',
    ],

    'table' => [
        'columns' => [
            'order'           => 'سفارش',
            'session'         => 'نوبت کاری صندوق',
            'payment-method'  => 'روش پرداخت',
            'amount'          => 'مبلغ',
            'partner'         => 'مشتری',
            'is-change'       => 'باقی پول',
            'terminal-status' => 'وضعیت کارت‌خوان',
            'paid-at'         => 'تاریخ پرداخت',
        ],

        'groups' => [
            'payment-method' => 'روش پرداخت',
            'session'        => 'نوبت کاری صندوق',
        ],

        'filters' => [
            'payment-method' => 'روش پرداخت',
            'session'        => 'نوبت کاری صندوق',
        ],
    ],
];
