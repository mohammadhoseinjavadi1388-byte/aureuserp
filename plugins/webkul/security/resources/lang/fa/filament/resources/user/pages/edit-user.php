<?php

return [
    'notification' => [
        'title' => 'کاربر به‌روزرسانی شد',
        'body'  => 'کاربر با موفقیت به‌روزرسانی شد.',
    ],

    'header-actions' => [
        'change-password' => [
            'label' => 'تغییر رمز عبور',

            'notification' => [
                'title' => 'رمز عبور تغییر کرد',
                'body'  => 'رمز عبور با موفقیت تغییر کرد.',
            ],

            'form' => [
                'new-password'         => 'رمز عبور جدید',
                'confirm-new-password' => 'تکرار رمز عبور جدید',
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'کاربر حذف شد',
                'body'  => 'کاربر با موفقیت حذف شد.',
                'error' => [
                    'title' => 'کاربر قابل حذف نیست',
                    'body'  => 'این کاربر پیش‌فرض است یا شما نمی‌توانید حساب خودتان را حذف کنید.',
                ],
            ],
        ],
    ],
];
