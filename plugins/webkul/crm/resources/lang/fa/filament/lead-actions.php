<?php

return [
    'mark-lost' => [
        'label'        => 'علامت‌گذاری به‌عنوان ازدست‌رفته',
        'notification' => ':count رکورد به‌عنوان ازدست‌رفته علامت‌گذاری شد.',
    ],

    'send-email' => [
        'label'        => 'ارسال ایمیل',
        'short-label'  => 'ایمیل',
        'submit'       => 'ارسال',

        'form' => [
            'recipient' => 'گیرنده',
            'subject'   => 'موضوع',
            'body'      => 'پیام',
        ],

        'sent'         => 'ایمیل به :email ارسال شد.',
        'failed'       => 'ارسال ایمیل ناموفق بود.',
        'notification' => ':sent ایمیل ارسال شد و :skipped رکورد نادیده گرفته شد (بدون نشانی ایمیل یا عدم دسترسی).',
    ],

    'send-sms' => [
        'label'        => 'ارسال پیامک',
        'short-label'  => 'پیامک',
        'submit'       => 'ارسال پیامک',

        'form' => [
            'recipient' => 'گیرنده',
            'message'   => 'پیام',
        ],

        'log-subject'  => 'پیامک به :number',
        'sent'         => 'پیامک به :number ارسال شد.',
        'failed'       => 'ارسال پیامک ناموفق بود.',
        'notification' => ':sent پیامک ارسال شد و :skipped رکورد نادیده گرفته شد (بدون شماره معتبر یا عدم دسترسی).',
    ],
];
