<?php

return [
    'title'         => 'بازنشانی رمز عبور',
    'heading'       => 'بازنشانی رمز عبور',
    'notifications' => [
        'throttled' => [
            'title' => 'تعداد تلاش‌ها بیش از حد مجاز است. :seconds ثانیه دیگر دوباره تلاش کنید.',
            'body'  => 'لطفاً پیش از تلاش دوباره :seconds ثانیه (:minutes دقیقه) صبر کنید.',
        ],
    ],
    'form' => [
        'email' => [
            'label' => 'نشانی ایمیل',
        ],
        'password' => [
            'label'                => 'رمز عبور جدید',
            'validation_attribute' => 'رمز عبور',
        ],
        'password_confirmation' => [
            'label' => 'تکرار رمز عبور جدید',
        ],
        'actions' => [
            'reset' => [
                'label' => 'بازنشانی رمز عبور',
            ],
        ],
    ],
];
