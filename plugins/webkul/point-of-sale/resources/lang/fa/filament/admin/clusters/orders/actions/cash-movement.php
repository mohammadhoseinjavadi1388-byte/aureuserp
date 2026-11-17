<?php

return [
    'label' => 'واریز/برداشت صندوق',

    'form' => [
        'fields' => [
            'type'   => 'نوع',
            'amount' => 'مبلغ',
            'reason' => 'علت',
        ],
    ],

    'notification' => [
        'success' => [
            'title' => 'گردش وجه نقد ثبت شد',
            'body'  => 'مانده کشوی پول به‌روزرسانی شد.',
        ],
    ],
];
