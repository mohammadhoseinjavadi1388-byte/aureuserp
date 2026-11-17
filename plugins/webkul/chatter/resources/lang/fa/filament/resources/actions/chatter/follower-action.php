    <?php

    return [
        'setup' => [
            'title'               => 'دنبال‌کننده‌ها',
            'submit-action-title' => 'افزودن دنبال‌کننده',
            'tooltip'             => 'افزودن دنبال‌کننده',

            'form' => [
                'fields' => [
                    'recipients'  => 'گیرندگان',
                    'notify-user' => 'اطلاع‌رسانی به کاربر',
                    'add-a-note'  => 'افزودن یادداشت',
                ],
            ],

            'actions' => [
                'notification' => [
                    'success' => [
                        'title' => 'دنبال‌کننده افزوده شد',
                        'body'  => 'دنبال‌کننده با موفقیت افزوده شد.',
                    ],

                    'partial_message' => [
                        'title'    => 'پیام با یک هشدار ارسال شد',
                        'single'   => 'به :count دنبال‌کننده به دلیل نداشتن ایمیل اطلاع‌رسانی نشد: :names',
                        'multiple' => 'به :count دنبال‌کننده به دلیل نداشتن ایمیل اطلاع‌رسانی نشد: :names',
                    ],

                    'error' => [
                        'title' => 'خطا در افزودن دنبال‌کننده',
                        'body'  => 'افزودن «:partner» به‌عنوان دنبال‌کننده انجام نشد',
                    ],
                ],

                'mail' => [
                    'subject' => 'دعوت به دنبال کردن :model: :department',
                ],
            ],
        ],
    ];
