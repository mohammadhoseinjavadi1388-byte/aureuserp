<?php

return [
    'navigation' => [
        'title' => 'فهرست‌های مواد (BOM)',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',
                'fields' => [
                    'reference'             => 'مرجع',
                    'reference-placeholder' => 'مثلاً BOM-001',
                    'product'               => 'محصول',
                    'product-variant'       => 'تنوع محصول',
                    'quantity'              => 'تعداد',
                    'uom'                   => 'واحد اندازه‌گیری',
                    'operation-type'        => 'نوع عملیات',
                    'company'               => 'شرکت',
                    'type'                  => 'نوع فهرست مواد (BOM)',
                ],
            ],
            'miscellaneous' => [
                'title'  => 'متفرقه',
                'fields' => [
                    'kit-information'                         => 'اطلاعات کیت',
                    'kit-information-content'                 => 'فهرست مواد از نوع کیت، به‌جای تولید از طریق دستور تولید، برای گروه‌بندی اجزا در انتقال‌ها یا فروش به کار می‌رود.',
                    'manufacturing-lead-time'                 => 'زمان تحویل تولید',
                    'days-to-prepare-manufacturing-order'     => 'تعداد روز برای آماده‌سازی دستور تولید',
                    'days-suffix'                             => 'روز',
                ],
            ],
        ],
        'tabs' => [
            'components' => [
                'title'      => 'اجزا',
                'add-action' => 'افزودن سطر',
                'columns'    => [
                    'component'              => 'جزء',
                    'apply-on-variants'      => 'اعمال روی تنوع‌های محصول',
                    'consumed-in-operation'  => 'مصرف در عملیات',
                    'highlight-consumption'  => 'برجسته‌سازی مصرف',
                    'quantity'               => 'تعداد',
                    'uom'                    => 'واحد اندازه‌گیری محصول',
                ],
                'validation' => [
                    'component-different-from-product' => 'جزء باید با محصول در حال تولید متفاوت باشد.',
                ],
                'create-form' => [
                    'fields' => [
                        'name'            => 'نام',
                        'type'            => 'نوع',
                        'category'        => 'دسته‌بندی',
                        'company'         => 'شرکت',
                        'uom'             => 'واحد اندازه‌گیری',
                        'uom-placeholder' => 'واحد اندازه‌گیری',
                    ],
                ],
            ],
            'operations' => [
                'title'      => 'عملیات',
                'add-action' => 'افزودن سطر',
                'actions'    => [
                    'edit'                 => 'ویرایش عملیات',
                    'copy-existing'        => 'کپی از عملیات موجود',
                    'copy-existing-fields' => [
                        'operation' => 'عملیات',
                    ],
                ],
                'columns'    => [
                    'operation'        => 'عملیات',
                    'work-center'      => 'مرکز کاری',
                    'time-mode'        => 'محاسبه مدت',
                    'time-mode-batch'  => 'محاسبه بر اساس آخرین',
                    'company'          => 'شرکت',
                    'apply-on-variants'=> 'اعمال روی تنوع‌های محصول',
                    'duration'         => 'مدت (دقیقه)',
                ],
            ],
            'by-products' => [
                'title'      => 'محصولات جانبی',
                'add-action' => 'افزودن سطر',
                'columns'    => [
                    'product'   => 'محصول جانبی',
                    'quantity'  => 'تعداد',
                    'uom'       => 'واحد اندازه‌گیری',
                    'operation' => 'تولید در عملیات',
                ],
            ],
            'miscellaneous' => [
                'title'  => 'متفرقه',
                'fields' => [
                    'ready-to-produce'       => 'آمادگی تولید',
                    'routing'                => 'مسیر تولید',
                    'consumption'            => 'مصرف انعطاف‌پذیر',
                    'operation-dependencies' => 'وابستگی‌های عملیات',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'reference'  => 'مرجع',
            'product'    => 'محصول',
            'quantity'   => 'تعداد',
            'uom'        => 'واحد اندازه‌گیری',
            'type'       => 'نوع فهرست مواد (BOM)',
            'company'    => 'شرکت',
            'deleted-at' => 'تاریخ حذف',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],
        'filters' => [
            'product' => 'محصول',
            'type'    => 'نوع فهرست مواد (BOM)',
            'company' => 'شرکت',
        ],
        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'فهرست مواد بازیابی شد',
                    'body'  => 'فهرست مواد با موفقیت بازیابی شد.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'فهرست مواد بایگانی شد',
                    'body'  => 'فهرست مواد با موفقیت بایگانی شد.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'فهرست مواد حذف شد',
                        'body'  => 'فهرست مواد برای همیشه حذف شد.',
                    ],
                    'error' => [
                        'title' => 'حذف فهرست مواد ممکن نشد',
                        'body'  => 'این فهرست مواد قابل حذف نیست، زیرا در حال حاضر در حال استفاده است.',
                    ],
                ],
            ],
        ],
        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'فهرست‌های مواد بازیابی شدند',
                    'body'  => 'فهرست‌های مواد انتخاب‌شده با موفقیت بازیابی شدند.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'فهرست‌های مواد بایگانی شدند',
                    'body'  => 'فهرست‌های مواد انتخاب‌شده با موفقیت بایگانی شدند.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'فهرست‌های مواد حذف شدند',
                        'body'  => 'فهرست‌های مواد انتخاب‌شده برای همیشه حذف شدند.',
                    ],
                    'error' => [
                        'title' => 'حذف فهرست‌های مواد ممکن نشد',
                        'body'  => 'یک یا چند مورد از فهرست‌های مواد انتخاب‌شده در حال حاضر در حال استفاده است.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'اطلاعات عمومی',
                'entries' => [
                    'reference'      => 'مرجع',
                    'product'        => 'محصول',
                    'product-variant'=> 'تنوع محصول',
                    'quantity'       => 'تعداد',
                    'uom'            => 'واحد اندازه‌گیری',
                    'operation-type' => 'نوع عملیات',
                    'company'        => 'شرکت',
                    'type'           => 'نوع فهرست مواد (BOM)',
                ],
            ],
            'record-information' => [
                'title'   => 'اطلاعات رکورد',
                'entries' => [
                    'created-by'   => 'ایجادکننده',
                    'created-at'   => 'تاریخ ایجاد',
                    'last-updated' => 'آخرین به‌روزرسانی',
                ],
            ],
        ],
        'tabs' => [
            'components' => [
                'title'   => 'اجزا',
                'entries' => [
                    'component' => 'جزء',
                    'operation' => 'عملیات',
                    'quantity'  => 'تعداد',
                    'uom'       => 'واحد اندازه‌گیری محصول',
                ],
            ],
            'operations' => [
                'title'   => 'عملیات',
                'entries' => [
                    'operation'   => 'عملیات',
                    'work-center' => 'مرکز کاری',
                    'time-mode'   => 'محاسبه مدت',
                    'duration'    => 'مدت (دقیقه)',
                ],
            ],
            'by-products' => [
                'title'   => 'محصولات جانبی',
                'entries' => [
                    'product'   => 'محصول جانبی',
                    'quantity'  => 'تعداد',
                    'uom'       => 'واحد اندازه‌گیری',
                    'operation' => 'تولید در عملیات',
                ],
            ],
            'miscellaneous' => [
                'title'   => 'متفرقه',
                'entries' => [
                    'kit-information'                         => 'اطلاعات کیت',
                    'kit-information-content'                 => 'فهرست مواد از نوع کیت، به‌جای تولید از طریق دستور تولید، برای گروه‌بندی اجزا در انتقال‌ها یا فروش به کار می‌رود.',
                    'ready-to-produce'                        => 'آمادگی تولید',
                    'routing'                                 => 'مسیر تولید',
                    'consumption'                             => 'مصرف انعطاف‌پذیر',
                    'operation-dependencies'                  => 'وابستگی‌های عملیات',
                    'manufacturing-lead-time'                 => 'زمان تحویل تولید',
                    'days-to-prepare-manufacturing-order'     => 'تعداد روز برای آماده‌سازی دستور تولید',
                    'days-suffix'                             => 'روز',
                ],
            ],
        ],
    ],
];
