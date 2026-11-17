<?php

return [
    'label' => 'چاپ برچسب‌ها',

    'form' => [
        'fields' => [
            'quantity'      => 'تعداد',
            'format'        => 'قالب',
            'quantity-type' => 'تعداد برای چاپ',

            'quantity-type-options' => [
                'operation' => 'تعداد عملیات',
                'custom'    => 'تعداد دلخواه',
            ],

            'format-options' => [
                'dymo'       => 'Dymo',
                '2x7_price'  => '2x7 با قیمت',
                '4x7_price'  => '4x7 با قیمت',
                '4x12'       => '4x12',
                '4x12_price' => '4x12 با قیمت',
            ],
        ],
    ],
];
