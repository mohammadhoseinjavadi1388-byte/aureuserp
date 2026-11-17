<?php

return [
    'notification' => [
        'title' => 'متقاضی ایجاد شد',
        'body'  => 'متقاضی با موفقیت ایجاد شد.',
    ],

    'tabs' => [
        'my-applicants'          => 'متقاضیان من',
        'un-assigned'            => 'واگذارنشده',
        'in-progress'            => 'در حال انجام',
        'hired'                  => 'استخدام‌شده',
        'refused'                => 'ردشده',
        'archived'               => 'بایگانی‌شده',
        'blocked'                => 'مسدودشده',
        'directly-available'     => 'آماده شروع به کار فوری',
        'created-recently'       => 'به‌تازگی ایجادشده',
        'stage-updated-recently' => 'مرحله به‌تازگی تغییرکرده',
    ],

    'header-actions' => [
        'create-applicant' => [
            'label' => 'متقاضی جدید',

            'modal-title' => 'ایجاد متقاضی',

            'form' => [
                'fields' => [
                    'candidate' => 'کاندیدا',
                ],
            ],
        ],
    ],
];
