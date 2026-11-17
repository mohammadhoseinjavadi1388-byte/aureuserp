<?php

return [
    'title' => 'محصولات الگوی سفارش',

    'navigation' => [
        'title' => 'محصولات الگوی سفارش',
        'group' => 'سفارش‌های فروش',
    ],

    'global-search' => [
        'name'    => 'نام',
    ],

    'form' => [
        'fields' => [
            'sort'           => 'ترتیب',
            'order-template' => 'الگوی سفارش',
            'company'        => 'شرکت',
            'product'        => 'محصول',
            'product-uom'    => 'واحد اندازه‌گیری محصول',
            'creator'        => 'ایجادکننده',
            'display-type'   => 'نوع نمایش',
            'name'           => 'نام',
            'quantity'       => 'تعداد',
        ],
    ],

    'table' => [
        'columns' => [
            'sort'           => 'ترتیب',
            'order-template' => 'الگوی سفارش',
            'company'        => 'شرکت',
            'product'        => 'محصول',
            'product-uom'    => 'واحد اندازه‌گیری محصول',
            'created-by'     => 'ایجادکننده',
            'display-type'   => 'نوع نمایش',
            'name'           => 'نام',
            'quantity'       => 'تعداد',
            'created-at'     => 'تاریخ ایجاد',
            'updated-at'     => 'تاریخ به‌روزرسانی',

        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'محصولات الگوی سفارش به‌روزرسانی شدند',
                    'body'  => 'محصولات الگوی سفارش با موفقیت به‌روزرسانی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'محصولات الگوی سفارش حذف شدند',
                    'body'  => 'محصولات الگوی سفارش با موفقیت حذف شدند.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'محصولات الگوی سفارش حذف شدند',
                    'body'  => 'محصولات الگوی سفارش با موفقیت حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'sort'           => 'ترتیب نمایش',
            'order-template' => 'الگوی سفارش',
            'company'        => 'شرکت',
            'product'        => 'محصول',
            'product-uom'    => 'واحد اندازه‌گیری محصول',
            'display-type'   => 'نوع نمایش',
            'name'           => 'نام',
            'quantity'       => 'تعداد',
        ],
    ],
];
