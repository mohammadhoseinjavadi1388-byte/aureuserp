<?php

return [
    'actions' => [
        'export' => [
            'label' => 'برون‌بری',
        ],

        'import' => [
            'label' => 'درون‌ریزی',
        ],
    ],

    'columns' => [
        'id'                 => 'ID',
        'name'               => 'نام',
        'contact-name'       => 'نام مخاطب',
        'company-name'       => 'نام شرکت',
        'job-title'          => 'سمت شغلی',
        'email'              => 'ایمیل',
        'phone'              => 'تلفن',
        'mobile'             => 'موبایل',
        'website'            => 'وب‌سایت',
        'street1'            => 'خیابان',
        'street2'            => 'خیابان 2',
        'city'               => 'شهر',
        'zip'                => 'کد پستی',
        'country'            => 'کشور',
        'stage'              => 'مرحله',
        'salesperson'        => 'کارشناس فروش',
        'team'               => 'تیم فروش',
        'priority'           => 'اولویت',
        'probability'        => 'احتمال',
        'tags'               => 'برچسب‌ها',
        'source'             => 'منبع',
        'medium'             => 'رسانه',
        'campaign'           => 'کمپین',
        'notes'              => 'یادداشت‌ها',
        'lost-reason'        => 'دلیل از دست رفتن',
        'created-at'         => 'تاریخ ایجاد',
        'customer'           => 'مشتری',
        'expected-revenue'   => 'درآمد مورد انتظار',
        'prorated-revenue'   => 'درآمد وزنی',
        'expected-closing'   => 'تاریخ بسته‌شدن مورد انتظار',
        'number'             => 'شماره',
        'order-date'         => 'تاریخ سفارش',
        'expiration'         => 'تاریخ انقضا',
        'delivery-date'      => 'تاریخ تحویل',
        'customer-reference' => 'مرجع مشتری',
        'source-document'    => 'سند مبدأ',
        'untaxed-amount'     => 'مبلغ بدون مالیات',
        'taxes'              => 'مالیات',
        'total'              => 'جمع کل',
        'currency'           => 'ارز',
        'status'             => 'وضعیت',
        'invoice-status'     => 'وضعیت فاکتور',
    ],

    'notifications' => [
        'export' => [
            'completed' => 'برون‌بری شما آماده است: :count ردیف برون‌بری شد.',
            'failed'    => 'برون‌بری :count ردیف ناموفق بود.',
        ],

        'import' => [
            'completed' => 'درون‌ریزی شما پایان یافت: :count ردیف درون‌ریزی شد.',
            'failed'    => ':count ردیف ناموفق بود؛ برای مشاهده علت، آن‌ها را از همین اعلان دانلود کنید.',
        ],
    ],

    'errors' => [
        'record-not-found' => 'رکوردی با شناسه :id در شرکت‌های شما یافت نشد.',
        'cannot-update'    => 'شما مجاز به به‌روزرسانی رکورد :id نیستید.',
        'cannot-create'    => 'شما مجاز به ایجاد رکورد نیستید.',
        'not-found'        => ':field «:value» یافت نشد.',
    ],
];
