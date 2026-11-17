<?php

return [
    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'متقاضی حذف شد',
                'body'  => 'متقاضی با موفقیت حذف شد.',
            ],
        ],

        'refuse' => [
            'title'        => 'دلیل رد',
            'form'         => [
                'fields' => [
                    'notify'   => 'اطلاع‌رسانی',
                    'email-to' => 'ارسال ایمیل به',
                ],
            ],
            'notification' => [
                'title' => 'متقاضی رد شد',
                'body'  => 'متقاضی با موفقیت رد شد.',
            ],
        ],

        'reopen' => [
            'title'        => 'بازگرداندن متقاضی از وضعیت ردشده',
            'notification' => [
                'title' => 'درخواست متقاضی بازگشایی شد',
                'body'  => 'درخواست متقاضی با موفقیت بازگشایی شد.',
            ],
        ],

        'state' => [
            'notification' => [
                'title' => 'وضعیت متقاضی به‌روزرسانی شد',
                'body'  => 'وضعیت متقاضی با موفقیت به‌روزرسانی شد.',
            ],
        ],
    ],

    'mail' => [
        'application-refused' => [
            'subject' => 'درخواست شغلی شما: :application',
        ],
    ],
];
