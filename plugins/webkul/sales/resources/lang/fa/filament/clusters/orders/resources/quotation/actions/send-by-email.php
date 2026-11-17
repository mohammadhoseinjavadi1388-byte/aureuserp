<?php

return [
    'title'        => 'ارسال با ایمیل',
    'resend-title' => 'ارسال مجدد با ایمیل',
    'quotation'    => 'پیش‌فاکتور',
    'quotations'   => 'پیش‌فاکتورها',

    'modal' => [
        'heading' => 'ارسال پیش‌فاکتور با ایمیل',
    ],

    'form' => [
        'fields' => [
            'partners'    => 'طرف حساب‌ها',
            'subject'     => 'موضوع',
            'description' => 'توضیحات',
            'attachment'  => 'پیوست',
        ],
    ],

    'actions' => [
        'notification' => [
            'email' => [
                'no_recipients' => [
                    'title' => 'گیرنده‌ای انتخاب نشده است',
                    'body'  => 'لطفاً برای ارسال پیش‌فاکتورها دست‌کم یک طرف حساب انتخاب کنید.',
                ],

                'all_success' => [
                    'title' => 'پیش‌فاکتورها ارسال شدند!',
                    'body'  => ':plural شما با موفقیت برای این گیرندگان ارسال شد: :recipients',
                ],

                'all_failed' => [
                    'title' => 'ارسال پیش‌فاکتورها ممکن نشد',
                    'body'  => 'هنگام ارسال پیش‌فاکتورهای شما مشکلاتی پیش آمد: :failures',
                ],

                'partial_success' => [
                    'title'       => 'برخی پیش‌فاکتورها ارسال شدند',
                    'sent_part'   => 'با موفقیت ارسال شد برای: :recipients',
                    'failed_part' => 'ارسال ناموفق برای: :failures',
                ],

                'failure_item' => ':partner (:reason)',
            ],
        ],
    ],

];
