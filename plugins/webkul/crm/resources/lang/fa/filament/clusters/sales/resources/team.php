<?php

return [
    'model-label'        => 'تیم فروش',
    'plural-model-label' => 'تیم‌های فروش',

    'navigation' => [
        'title' => 'تیم‌ها',
    ],

    'table' => [
        'columns' => [
            'name'    => 'تیم فروش',
            'members' => 'اعضا',
            'company' => 'شرکت',
        ],

        'filters' => [
            'team-leader' => 'سرپرست تیم',
            'created-at'  => 'تاریخ ایجاد',
        ],

        'actions' => [
            'pipeline' => [
                'label' => 'کاریز فروش',
            ],
        ],
    ],

    'grid' => [
        'quotations'         => '{1} :count پیش‌فاکتور|[0,*] :count پیش‌فاکتور',
        'configuration'      => 'پیکربندی',
        'menu'               => 'منوی تیم',
        'open-opportunities' => '{1} :count فرصت باز|[0,*] :count فرصت باز',
        'orders-to-invoice'  => '{1} :count سفارش آماده صدور فاکتور|[0,*] :count سفارش آماده صدور فاکتور',
        'chart'              => 'فرصت‌های جدید در هر هفته',
        'sample-data'        => 'داده نمونه',
        'new'                => 'جدید',
        'invoiced-month'     => 'فاکتورشده در این ماه',
        'of-target'          => ':invoiced از :target',
    ],

    'grid-menu' => [
        'leads'         => 'سرنخ‌ها',
        'opportunities' => 'فرصت‌ها',
        'quotations'    => 'پیش‌فاکتورها',
        'sales-orders'  => 'سفارش‌های فروش',
        'color'         => 'رنگ',
    ],
];
