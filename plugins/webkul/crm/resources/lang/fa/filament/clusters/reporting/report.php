<?php

return [
    'none' => 'هیچ‌کدام',

    'chart' => [
        'heading' => ':measure بر اساس :group',
    ],

    'filters' => [
        'measure'        => 'شاخص',
        'split-by'       => 'تفکیک بر اساس',
        'no-split'       => 'بدون تفکیک',
        'salespeople'    => 'کارشناسان فروش',
        'teams'          => 'تیم‌های فروش',
    ],

    'dimensions' => [
        'salesperson'         => 'کارشناس فروش',
        'team'                => 'تیم فروش',
        'stage'               => 'مرحله',
        'type'                => 'نوع',
        'city'                => 'شهر',
        'country'             => 'کشور',
        'lost-reason'         => 'دلیل از دست رفتن',
        'company'             => 'شرکت',
        'campaign'            => 'کمپین',
        'medium'              => 'رسانه',
        'source'              => 'منبع',
        'expected-closing'    => 'تاریخ بسته‌شدن مورد انتظار',
        'created-at'          => 'تاریخ ایجاد',
        'converted-at'        => 'تاریخ تبدیل',
        'closed-at'           => 'تاریخ بسته‌شدن',
        'activity-type'       => 'نوع فعالیت',
        'assigned-to'         => 'واگذارشده به',
        'done-by'             => 'انجام‌دهنده',
        'done-at'             => 'تاریخ انجام',
        'activity-created-at' => 'تاریخ ایجاد فعالیت',
    ],

    'measures' => [
        'count'            => 'تعداد',
        'expected-revenue' => 'درآمد مورد انتظار',
        'prorated-revenue' => 'درآمد وزنی',
        'probability'      => 'احتمال (میانگین)',
        'days-to-assign'   => 'روز تا واگذاری',
        'days-to-close'    => 'روز تا بسته‌شدن',
    ],

    'presets' => [
        'ongoing'           => 'در جریان',
        'won'               => 'موفق',
        'lost'              => 'ازدست‌رفته',
    ],

    'table' => [
        'lost' => 'ازدست‌رفته',

        'columns' => [
            'name'             => 'نام',
            'type'             => 'نوع',
            'customer'         => 'مشتری',
            'stage'            => 'مرحله',
            'expected-revenue' => 'درآمد مورد انتظار',
            'probability'      => 'احتمال',
            'salesperson'      => 'کارشناس فروش',
            'team'             => 'تیم فروش',
            'expected-closing' => 'تاریخ بسته‌شدن مورد انتظار',
            'created-at'       => 'تاریخ ایجاد',
            'closed-at'        => 'تاریخ بسته‌شدن',
            'lost-reason'      => 'دلیل از دست رفتن',
            'country'          => 'کشور',
            'city'             => 'شهر',
            'done-at'          => 'تاریخ انجام',
            'activity-type'    => 'نوع فعالیت',
            'summary'          => 'خلاصه',
            'lead'             => 'سرنخ / فرصت',
            'assigned-to'      => 'واگذارشده به',
            'done-by'          => 'انجام‌دهنده',
            'due-date'         => 'سررسید',
        ],
    ],

    'rules' => [
        'active' => [
            'label'         => 'فعال',
            'is-active'     => 'فعال است',
            'is-not-active' => 'فعال نیست',
            'not-active'    => 'غیرفعال',
        ],

        'won' => [
            'label'      => 'موفق',
            'is-won'     => 'موفق است',
            'is-not-won' => 'موفق نیست',
            'not-won'    => 'ناموفق',
        ],

        'lost' => [
            'label'       => 'ازدست‌رفته',
            'is-lost'     => 'ازدست‌رفته است',
            'is-not-lost' => 'ازدست‌رفته نیست',
            'not-lost'    => 'ازدست‌نرفته',
        ],
    ],

    'tabs' => [
        'leads'         => 'سرنخ‌ها',
        'opportunities' => 'فرصت‌ها',
        'mine'          => 'موارد من',
        'won'           => 'موفق',
        'lost'          => 'ازدست‌رفته',
        'my-activities' => 'فعالیت‌های من',
        'this-month'    => 'این ماه',
    ],
];
