<?php

return [
    'notification' => [
        'title' => 'مالیات به‌روزرسانی شد',
        'body'  => 'مالیات با موفقیت به‌روزرسانی شد.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'مالیات حذف شد',
                    'body'  => 'مالیات با موفقیت حذف شد.',
                ],

                'error' => [
                    'title' => 'حذف مالیات ممکن نیست',
                    'body'  => 'این مالیات قابل حذف نیست، زیرا در حال استفاده است.',
                ],

                'invalid-repartition-lines' => [
                    'title' => 'سطرهای تسهیم نامعتبر است',
                ],
            ],
        ],
    ],
];
