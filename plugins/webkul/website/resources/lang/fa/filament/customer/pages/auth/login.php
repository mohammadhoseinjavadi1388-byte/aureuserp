<?php

return [
    'title'    => 'ورود',
    'heading'  => 'ورود',
    'messages' => [
        'failed' => 'اطلاعات واردشده با سوابق ما مطابقت ندارد.',
    ],
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
            'label' => 'رمز عبور',
        ],
        'remember' => [
            'label' => 'مرا به خاطر بسپار',
        ],
        'actions' => [
            'authenticate' => [
                'label' => 'ورود',
            ],
        ],
    ],
    'actions' => [
        'register' => [
            'before' => 'حساب کاربری ندارید؟',
            'label'  => 'ایجاد حساب کاربری',
        ],
        'request_password_reset' => [
            'label' => 'رمز عبور را فراموش کرده‌اید؟',
        ],
    ],
];
