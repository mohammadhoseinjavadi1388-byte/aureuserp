<?php

return [
    'header' => [
        'sub-heading' => [
            'accept-invitation' => 'پذیرش دعوت',
        ],
    ],

    'title' => 'ثبت‌نام',

    'heading' => 'ثبت‌نام',

    'actions' => [

        'login' => [
            'before' => 'یا',
            'label'  => 'وارد حساب کاربری خود شوید',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'نشانی ایمیل',
        ],

        'name' => [
            'label' => 'نام',
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
                'label' => 'ثبت‌نام',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'تعداد تلاش‌های ثبت‌نام بیش از حد مجاز است',
            'body'  => 'لطفاً :seconds ثانیه دیگر دوباره تلاش کنید.',
        ],

    ],

];
