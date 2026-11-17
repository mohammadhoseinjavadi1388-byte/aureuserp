<?php

return [
    'title' => 'مدیریت ردیابی',

    'form' => [
        'enable-lots-serial-numbers'                             => 'سری ساخت و شماره سریال',
        'enable-lots-serial-numbers-helper-text'                 => 'ردیابی کامل از تأمین‌کننده تا مشتری داشته باشید',
        'configure-lots'                                         => 'پیکربندی سری‌های ساخت',
        'enable-expiration-dates'                                => 'تاریخ‌های انقضا',
        'enable-expiration-dates-helper-text'                    => 'برای سری‌های ساخت و شماره‌های سریال تاریخ انقضا تعیین کنید',
        'display-on-delivery-slips'                              => 'نمایش در برگه‌های تحویل',
        'display-on-delivery-slips-helper-text'                  => 'سری ساخت و شماره سریال در برگه‌های تحویل نمایش داده می‌شود',
        'display-expiration-dates-on-delivery-slips'             => 'نمایش تاریخ انقضا در برگه‌های تحویل',
        'display-expiration-dates-on-delivery-slips-helper-text' => 'تاریخ‌های انقضا در برگه تحویل نمایش داده می‌شود',
        'enable-consignments'                                    => 'کالای امانی',
        'enable-consignments-helper-text'                        => 'برای محصولات انبارشده مالک تعیین کنید',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => 'محصولاتی در موجودی دارید که ردیابی سری ساخت/شماره سریال برای آن‌ها فعال است. ',
                'body'  => 'پیش از غیرفعال‌کردن این تنظیم، ابتدا ردیابی را برای همه محصولات غیرفعال کنید.',
            ],
        ],
    ],
];
