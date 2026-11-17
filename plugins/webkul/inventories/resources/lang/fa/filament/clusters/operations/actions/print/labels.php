<?php

return [
    'label' => 'برچسب‌ها',

    'form' => [
        'fields' => [
            'type'          => 'نوع برچسب',
            'quantity'      => 'تعداد',
            'format'        => 'قالب',
            'layout'        => 'چیدمان برچسب‌ها',
            'quantity-type' => 'تعداد برای چاپ',
            'quantity'      => 'تعداد',

            'quantity-type-options' => [
                'operation' => 'تعداد عملیات',
                'custom'    => 'تعداد دلخواه',
                'per-slot'  => 'یک عدد به ازای هر سری ساخت/شماره سریال',
                'per-unit'  => 'یک عدد به ازای هر واحد',
            ],

            'type-options' => [
                'product' => 'برچسب‌های محصول',
                'lot'     => 'برچسب‌های سری ساخت/شماره سریال',
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
