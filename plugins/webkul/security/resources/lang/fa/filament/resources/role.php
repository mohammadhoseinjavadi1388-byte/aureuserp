<?php

return [
    'permission-descriptions' => [
        'view_any'         => 'فهرست‌کردن و مرور همه رکوردها.',
        'view'             => 'مشاهده جزئیات یک رکورد.',
        'create'           => 'ایجاد رکوردهای جدید.',
        'update'           => 'ویرایش و ذخیره رکوردهای موجود.',
        'delete'           => 'حذف یک رکورد.',
        'delete_any'       => 'حذف هم‌زمان چند رکورد.',
        'force_delete'     => 'حذف دائمی یک رکورد.',
        'force_delete_any' => 'حذف دائمی چند رکورد.',
        'restore'          => 'بازیابی یک رکورد بایگانی‌شده.',
        'restore_any'      => 'بازیابی چند رکورد بایگانی‌شده.',
        'reorder'          => 'تغییر ترتیب نمایش رکوردها.',
    ],

    'form' => [
        'fields' => [
            'web'     => 'وب',
            'sanctum' => 'Sanctum',
        ],
    ],

    'notification' => [
        'system-role-delete' => [
            'title' => 'نقش سیستمی قابل حذف نیست',
            'body'  => 'این یک نقش سیستمی است و نمی‌توان آن را حذف کرد.',
        ],
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'نقش حذف شد',
                    'body'  => 'نقش با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'نقش‌ها حذف شدند',
                    'body'  => 'نقش‌های انتخاب‌شده با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],
];
