<?php

return [
    'title' => 'پرداخت',

    'form' => [
        'fields' => [
            'journal'                => 'دفتر روزنامه',
            'amount'                 => 'مبلغ',
            'currency'               => 'ارز',
            'payment-method-line'    => 'ردیف روش پرداخت',
            'payment-date'           => 'تاریخ پرداخت',
            'recipient-bank-account' => 'حساب بانکی گیرنده',
            'communication'          => 'شرح پرداخت',
        ],
    ],

    'notifications' => [
        'payment-failed' => [
            'title' => 'پرداخت ناموفق بود',
        ],
    ],
];
