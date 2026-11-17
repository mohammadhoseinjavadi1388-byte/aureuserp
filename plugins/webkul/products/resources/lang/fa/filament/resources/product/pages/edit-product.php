<?php

return [
    'notification' => [
        'title' => 'محصول به‌روزرسانی شد',
        'body'  => 'محصول با موفقیت به‌روزرسانی شد.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'چاپ برچسب‌ها',

            'form' => [
                'fields' => [
                    'quantity' => 'تعداد برچسب‌ها',
                    'format'   => 'قالب',

                    'format-options' => [
                        'dymo'       => 'Dymo',
                        '2x7_price'  => '2x7 با قیمت',
                        '4x7_price'  => '4x7 با قیمت',
                        '4x12'       => '4x12',
                        '4x12_price' => '4x12 با قیمت',
                    ],
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'محصول حذف شد',
                'body'  => 'محصول با موفقیت حذف شد.',
            ],
        ],
    ],
];
