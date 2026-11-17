<?php

return [
    'manufacturing-manager' => [
        'unplan-order' => [
            'work-orders-already-done'    => "برخی دستورهای کار قبلاً انجام شده‌اند؛ بنابراین نمی‌توانید برنامه‌ریزی این دستور تولید را لغو کنید.\n\nحیف است این‌همه پیشرفت هدر برود، این‌طور نیست؟",
            'work-orders-already-started' => "برخی دستورهای کار قبلاً شروع شده‌اند؛ بنابراین نمی‌توانید برنامه‌ریزی این دستور تولید را لغو کنید.\n\nحیف است این‌همه پیشرفت هدر برود، این‌طور نیست؟",
        ],
    ],

    'work-center-productivity-log' => [
        'time-tracking'                    => 'ثبت زمان: :name',
        'no-performance-productivity-loss' => 'باید دست‌کم یک اتلاف بهره‌وری بایگانی‌نشده در دسته‌بندی «Performance» تعریف کنید. آن را از تنظیمات پیکربندی ایجاد کنید.',
    ],

    'work-center' => [
        'already-unblocked' => 'انسداد آن قبلاً رفع شده است.',
    ],

    'work-order' => [
        'unblock-work-center'        => 'لطفاً برای شروع دستور کار، انسداد مرکز کاری را رفع کنید.',
        'already-done-or-cancelled'  => 'نمی‌توانید دستور کاری را که قبلاً انجام یا لغو شده است شروع کنید',
        'no-calendar-on-work-center' => 'برای مرکز کاری :name تقویمی تعریف نشده است.',
        'no-productivity-loss'       => 'باید دست‌کم یک اتلاف بهره‌وری در دسته‌بندی «Productivity» تعریف کنید. آن را از تنظیمات پیکربندی ایجاد کنید.',
        'no-performance-loss'        => 'باید دست‌کم یک اتلاف بهره‌وری در دسته‌بندی «Performance» تعریف کنید. آن را از تنظیمات پیکربندی ایجاد کنید.',
        'impossible-to-plan'         => 'برنامه‌ریزی دستور کار ممکن نیست. لطفاً ظرفیت در دسترس مرکز کاری را بررسی کنید.',
    ],

    'order' => [
        'product-in-byproducts'                    => 'نمی‌توانید :product را هم‌زمان به‌عنوان محصول نهایی و در محصولات جانبی داشته باشید',
        'missing-lot-serial-number'                => 'باید برای محصولات سری ساخت/شماره سریال وارد و آن‌ها را «مصرف» کنید: :missing_products',
        'serial-number-already-produced'           => 'این شماره سریال برای محصول :product قبلاً تولید شده است',
        'byproduct-serial-number-already-produced' => 'شماره سریال :number که برای محصول جانبی :product استفاده شده، قبلاً تولید شده است',
        'component-serial-number-consumed'         => 'شماره سریال :number که برای جزء :component استفاده شده، قبلاً مصرف شده است',
        'components-availability'                  => [
            'available'     => 'در دسترس',
            'not-available' => 'ناموجود',
            'expected'      => 'مورد انتظار در :date',
        ],
    ],
];
