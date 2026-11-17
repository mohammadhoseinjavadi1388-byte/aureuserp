<?php

return [
    'create-employee' => 'ایجاد کارمند',
    'goto-employee'   => 'رفتن به کارمند',

    'notification' => [
        'title' => 'متقاضی به‌روزرسانی شد',
        'body'  => 'متقاضی با موفقیت به‌روزرسانی شد.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'متقاضی حذف شد',
                'body'  => 'متقاضی با موفقیت حذف شد.',
            ],
        ],
        'force-delete' => [
            'notification' => [
                'title' => 'متقاضی حذف شد',
                'body'  => 'متقاضی با موفقیت برای همیشه حذف شد.',
            ],
        ],

        'restore' => [
            'notification' => [
                'title' => 'متقاضی بازیابی شد',
                'body'  => 'متقاضی با موفقیت بازیابی شد.',
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
            'title'        => 'بازگشایی درخواست متقاضی',
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

        'application-confirm' => [
            'subject' => 'درخواست شغلی شما: :job_position',
        ],
        'interviewer-assigned' => [
            'subject' => 'متقاضی :applicant به شما واگذار شد.',
        ],
    ],
];
