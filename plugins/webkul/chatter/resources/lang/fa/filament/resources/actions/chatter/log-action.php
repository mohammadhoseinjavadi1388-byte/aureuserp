<?php

return [
    'setup' => [
        'title'        => 'یادداشت داخلی',
        'submit-title' => 'ثبت',

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
                    'title' => 'یادداشت داخلی افزوده شد',
                    'body'  => 'یادداشت داخلی شما با موفقیت افزوده شد.',
                ],

                'error' => [
                    'title' => 'خطا در افزودن یادداشت',
                    'body'  => 'افزودن یادداشت داخلی شما انجام نشد',
                ],
            ],
        ],
    ],
];
