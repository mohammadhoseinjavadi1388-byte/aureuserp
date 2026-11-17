<?php

return [
    'title'         => 'ثبت‌نام',
    'heading'       => 'ثبت‌نام',
    'notifications' => [
        'throttled' => [
            'title' => 'تعداد تلاش‌ها بیش از حد مجاز است. :seconds ثانیه دیگر دوباره تلاش کنید.',
            'body'  => 'لطفاً پیش از تلاش دوباره :seconds ثانیه (:minutes دقیقه) صبر کنید.',
        ],
    ],
    'form' => [
        'name' => [
            'label' => 'نام',
        ],
        'email' => [
            'label' => 'نشانی ایمیل',
        ],
        'password' => [
            'label'                => 'رمز عبور',
            'validation_attribute' => 'رمز عبور',
        ],
        'password_confirmation' => [
            'label' => 'تکرار رمز عبور',
        ],
        'actions' => [
            'register' => [
                'label' => 'ایجاد حساب کاربری',
            ],
        ],
    ],
    'actions' => [
        'login' => [
            'before' => 'قبلاً حساب کاربری ساخته‌اید؟',
            'label'  => 'ورود',
        ],
    ],
];
