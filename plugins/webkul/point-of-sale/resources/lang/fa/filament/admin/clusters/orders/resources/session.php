<?php

return [

    'navigation' => [
        'title' => 'نوبت‌های کاری صندوق',
        'group' => 'پایانه فروش',
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'نوبت کاری صندوق',
                'entries' => [
                    'session'          => 'نوبت کاری صندوق',
                    'opened-by'        => 'بازکننده',
                    'point-of-sale'    => 'پایانه فروش',
                    'opening-date'     => 'تاریخ افتتاح',
                    'starting-balance' => 'مانده ابتدایی',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                  => 'شناسه نوبت کاری',
            'config'                => 'پایانه فروش',
            'user'                  => 'بازکننده',
            'started-at'            => 'تاریخ افتتاح',
            'stopped-at'            => 'تاریخ بستن',
            'cash-balance-start'    => 'مانده ابتدایی',
            'cash-balance-end-real' => 'مانده پایانی',
            'cash-balance-end'      => 'مانده پایانی محاسباتی',
            'order-count'           => 'سفارش‌ها',
            'total-payments-amount' => 'پرداخت‌ها',
            'cash-difference'       => 'مغایرت',
            'is-rescue'             => 'اضطراری',
            'has-failed-operations' => 'عملیات ناموفق',
            'state'                 => 'وضعیت',
            'company'               => 'شرکت',
        ],

        'groups' => [
            'config'     => 'پایانه فروش',
            'state'      => 'وضعیت',
            'started-at' => 'تاریخ افتتاح',
        ],

        'filters' => [
            'state'  => 'وضعیت',
            'config' => 'پایانه فروش',
        ],
    ],
];
