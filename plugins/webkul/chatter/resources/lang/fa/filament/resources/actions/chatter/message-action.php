<?php

return [
    'setup' => [
        'title'        => 'ارسال پیام',
        'submit-title' => 'ارسال',

        'form' => [
            'fields' => [
                'hide-subject'            => 'پنهان کردن موضوع',
                'add-subject'             => 'افزودن موضوع',
                'subject'                 => 'موضوع',
                'write-message-here'      => 'پیام خود را اینجا بنویسید',
                'attachments-helper-text' => 'حداکثر حجم فایل: 10MB. انواع مجاز: تصویر، PDF، Word، Excel، متن',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'پیام ارسال شد',
                    'body'  => 'پیام شما با موفقیت ارسال شد.',
                ],

                'error' => [
                    'title' => 'خطا در ارسال پیام',
                    'body'  => 'ارسال پیام شما انجام نشد',
                ],
            ],

            'mail' => [
                'subject' => ':record_name',
            ],
        ],
    ],
];
