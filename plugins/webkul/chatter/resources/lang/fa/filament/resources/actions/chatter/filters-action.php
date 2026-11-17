<?php

return [
    'tooltip' => 'فیلترها',

    'fields'  => [
        'search'             => 'جستجو',
        'search-placeholder' => 'جستجوی پیام‌ها...',
        'type'               => 'نوع',
        'date'               => 'تاریخ',
        'sort-by'            => 'مرتب‌سازی بر اساس',
        'pinned-only'        => 'فقط سنجاق‌شده‌ها',
    ],
    'type-options' => [
        'all'          => 'همه انواع',
        'note'         => 'یادداشت‌ها',
        'comment'      => 'نظرات',
        'notification' => 'اعلان‌ها',
        'activity'     => 'فعالیت‌ها',
    ],
    'date-options' => [
        ''          => 'هر زمان',
        'today'     => 'امروز',
        'yesterday' => 'دیروز',
        'week'      => '7 روز گذشته',
        'month'     => '30 روز گذشته',
        'quarter'   => '3 ماه گذشته',
        'year'      => 'سال گذشته',
    ],
    'sort-options' => [
        'created_at_desc' => 'جدیدترین‌ها',
        'created_at_asc'  => 'قدیمی‌ترین‌ها',
        'updated_at_desc' => 'به‌روزشده‌های اخیر',
        'priority'        => 'اولویت',
    ],
    'actions' => [
        'apply' => 'اعمال فیلترها',
    ],
];
