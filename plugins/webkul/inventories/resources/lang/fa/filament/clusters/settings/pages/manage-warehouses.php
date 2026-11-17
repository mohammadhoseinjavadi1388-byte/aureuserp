<?php

return [
    'title' => 'مدیریت انبارها',

    'form' => [
        'enable-locations'                      => 'مکان‌های انبار',
        'enable-locations-helper-text'          => 'مکان محصول را در انبار خود ردیابی کنید',
        'configure-locations'                   => 'پیکربندی مکان‌های انبار',
        'enable-multi-steps-routes'             => 'مسیرهای چندمرحله‌ای',
        'enable-multi-steps-routes-helper-text' => 'برای مدیریت انتقال محصولات بین انبارها از مسیرهای دلخواه خود استفاده کنید',
        'configure-routes'                      => 'پیکربندی مسیرهای انبار',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => 'چند انبار وجود دارد',
                'body'  => 'وقتی بیش از یک انبار دارید، نمی‌توانید قابلیت چندمکانی را غیرفعال کنید.',
            ],
        ],
    ],
];
