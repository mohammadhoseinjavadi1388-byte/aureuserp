<?php

return [
    'navigation' => [
        'title' => 'انواع عملیات',
        'group' => 'مدیریت انبار',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'operator-type'             => 'نوع عملیات',
                    'operator-type-placeholder' => 'مثلاً رسیدهای کالا',
                ],
            ],

            'applicable-on' => [
                'title'       => 'قابل اعمال بر',
                'description' => 'محل‌هایی را انتخاب کنید که این مسیر در آن‌ها قابل انتخاب باشد.',

                'fields' => [
                ],
            ],
        ],

        'tabs' => [
            'general' => [
                'title'  => 'عمومی',

                'fields' => [
                    'operator-type'                      => 'نوع عملیات',
                    'sequence-prefix'                    => 'پیشوند شماره‌گذاری',
                    'generate-shipping-labels'           => 'تولید برچسب‌های حمل',
                    'warehouse'                          => 'انبار',
                    'show-reception-report'              => 'نمایش گزارش دریافت هنگام تأیید',
                    'show-reception-report-hint-tooltip' => 'در صورت انتخاب، سیستم هنگام تأیید به‌طور خودکار گزارش دریافت را نمایش می‌دهد، به شرط آنکه جابه‌جایی‌هایی برای تخصیص وجود داشته باشد.',
                    'company'                            => 'شرکت',
                    'return-type'                        => 'نوع عملیات مرجوعی',
                    'create-backorder'                   => 'ایجاد سفارش معوق',
                    'move-type'                          => 'نوع جابه‌جایی',
                    'move-type-hint-tooltip'             => 'اگر در سند مبدأ تعیین نشده باشد، این گزینه سیاست پیش‌فرض برداشت برای این نوع عملیات خواهد بود.',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title'  => 'سری‌های ساخت/شماره‌های سریال',

                        'fields' => [
                            'create-new'                => 'ایجاد جدید',
                            'create-new-hint-tooltip'   => 'در صورت انتخاب، سیستم فرض می‌کند قصد ایجاد سری ساخت/شماره سریال جدید دارید و می‌توانید آن‌ها را در یک فیلد متنی وارد کنید.',
                            'use-existing'              => 'استفاده از موارد موجود',
                            'use-existing-hint-tooltip' => 'در صورت انتخاب، می‌توانید سری ساخت/شماره سریال را انتخاب کنید یا هیچ موردی اختصاص ندهید. به این ترتیب می‌توان موجودی را بدون سری ساخت یا بدون محدودیت در سری ساخت مورد استفاده ایجاد کرد.',
                        ],
                    ],

                    'locations' => [
                        'title'  => 'مکان‌های انبار',

                        'fields' => [
                            'source-location'                   => 'مکان مبدأ',
                            'source-location-hint-tooltip'      => 'هنگام ایجاد دستی این عملیات، این مکان به‌عنوان مکان مبدأ پیش‌فرض استفاده می‌شود. البته بعداً قابل تغییر است و مسیرها ممکن است مکان پیش‌فرض دیگری تعیین کنند.',
                            'destination-location'              => 'مکان مقصد',
                            'destination-location-hint-tooltip' => 'این مکان، مکان مقصد پیش‌فرض برای عملیاتی است که به‌صورت دستی ایجاد می‌شوند. البته بعداً قابل تغییر است و مسیرها ممکن است مکان پیش‌فرض دیگری تعیین کنند.',
                        ],
                    ],

                    'packages' => [
                        'title'  => 'بسته‌ها',

                        'fields' => [
                            'show-entire-package'              => 'جابه‌جایی کل بسته',
                            'show-entire-package-hint-tooltip' => 'در صورت انتخاب، می‌توانید بسته‌ها را به‌طور کامل جابه‌جا کنید.',
                        ],
                    ],
                ],
            ],

            'hardware' => [
                'title'  => 'سخت‌افزار',

                'fieldsets' => [
                    'print-on-validation' => [
                        'title'  => 'چاپ هنگام تأیید',

                        'fields' => [
                            'delivery-slip'              => 'برگه تحویل',
                            'delivery-slip-hint-tooltip' => 'در صورت انتخاب، سیستم هنگام تأیید انتقال به‌طور خودکار برگه تحویل را چاپ می‌کند.',

                            'return-slip'              => 'برگه مرجوعی',
                            'return-slip-hint-tooltip' => 'در صورت انتخاب، سیستم هنگام تأیید انتقال به‌طور خودکار برگه مرجوعی را چاپ می‌کند.',

                            'product-labels'              => 'برچسب‌های محصول',
                            'product-labels-hint-tooltip' => 'در صورت انتخاب، سیستم هنگام تأیید انتقال به‌طور خودکار برچسب‌های محصول را چاپ می‌کند.',

                            'lots-labels'              => 'برچسب‌های سری ساخت/شماره سریال',
                            'lots-labels-hint-tooltip' => 'در صورت انتخاب، سیستم هنگام تأیید انتقال به‌طور خودکار برچسب‌های سری ساخت/شماره سریال را چاپ می‌کند.',

                            'reception-report'              => 'گزارش دریافت',
                            'reception-report-hint-tooltip' => 'در صورت انتخاب، سیستم هنگام تأیید انتقال، اگر جابه‌جایی تخصیص‌یافته‌ای داشته باشد، به‌طور خودکار گزارش دریافت را چاپ می‌کند.',

                            'reception-report-labels'              => 'برچسب‌های گزارش دریافت',
                            'reception-report-labels-hint-tooltip' => 'در صورت انتخاب، سیستم هنگام تأیید انتقال به‌طور خودکار برچسب‌های گزارش دریافت را چاپ می‌کند.',

                            'package-content'              => 'محتویات بسته',
                            'package-content-hint-tooltip' => 'در صورت انتخاب، سیستم هنگام تأیید انتقال به‌طور خودکار مشخصات بسته‌ها و محتویات آن‌ها را چاپ می‌کند.',
                        ],
                    ],

                    'print-on-pack' => [
                        'title'  => 'چاپ هنگام «قرار دادن در بسته»',

                        'fields' => [
                            'package-label'              => 'برچسب بسته',
                            'package-label-hint-tooltip' => 'در صورت انتخاب، سیستم با استفاده از دکمه «قرار دادن در بسته» به‌طور خودکار برچسب بسته را چاپ می‌کند.',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نام',
            'warehouse'  => 'انبار',
            'company'    => 'شرکت',
            'deleted-at' => 'تاریخ حذف',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'type'       => 'نوع',
            'warehouse'  => 'انبار',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'type'      => 'نوع',
            'warehouse' => 'انبار',
            'company'   => 'شرکت',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'نوع عملیات بازیابی شد',
                    'body'  => 'نوع عملیات با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'نوع عملیات حذف شد',
                    'body'  => 'نوع عملیات با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'نوع عملیات برای همیشه حذف شد',
                        'body'  => 'نوع عملیات با موفقیت برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف نوع عملیات ممکن نیست',
                        'body'  => 'نوع عملیات در حال استفاده است و نمی‌توان آن را حذف کرد.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'انواع عملیات بازیابی شد',
                    'body'  => 'انواع عملیات با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'انواع عملیات حذف شد',
                    'body'  => 'انواع عملیات با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'انواع عملیات برای همیشه حذف شد',
                        'body'  => 'انواع عملیات با موفقیت برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف انواع عملیات ممکن نیست',
                        'body'  => 'انواع عملیات در حال استفاده هستند و نمی‌توان آن‌ها را حذف کرد.',
                    ],
                ],
            ],
        ],

        'empty-actions' => [
            'create' => [
                'label' => 'ایجاد نوع عملیات',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'اطلاعات عمومی',

                'entries' => [
                    'name' => 'نام',
                ],
            ],

            'record-information' => [
                'title' => 'اطلاعات رکورد',

                'entries' => [
                    'created-by'   => 'ایجادکننده',
                    'created-at'   => 'تاریخ ایجاد',
                    'last-updated' => 'آخرین به‌روزرسانی',
                ],
            ],
        ],

        'tabs' => [
            'general' => [
                'title' => 'عمومی',

                'entries' => [
                    'type'                       => 'نوع عملیات',
                    'sequence_code'              => 'کد شماره‌گذاری',
                    'print_label'                => 'چاپ برچسب',
                    'warehouse'                  => 'انبار',
                    'reservation_method'         => 'روش رزرو',
                    'auto_show_reception_report' => 'نمایش خودکار گزارش دریافت',
                    'company'                    => 'شرکت',
                    'return_operation_type'      => 'نوع عملیات مرجوعی',
                    'create_backorder'           => 'ایجاد سفارش معوق',
                    'move_type'                  => 'نوع جابه‌جایی',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title' => 'سری‌های ساخت',

                        'entries' => [
                            'use_create_lots'   => 'ایجاد سری ساخت جدید',
                            'use_existing_lots' => 'استفاده از سری‌های ساخت موجود',
                        ],
                    ],

                    'locations' => [
                        'title' => 'مکان‌های انبار',

                        'entries' => [
                            'source_location'      => 'مکان مبدأ',
                            'destination_location' => 'مکان مقصد',
                        ],
                    ],
                ],
            ],
            'hardware' => [
                'title' => 'سخت‌افزار',

                'fieldsets' => [
                    'print_on_validation' => [
                        'title' => 'چاپ هنگام تأیید',

                        'entries' => [
                            'auto_print_delivery_slip'           => 'چاپ خودکار برگه تحویل',
                            'auto_print_return_slip'             => 'چاپ خودکار برگه مرجوعی',
                            'auto_print_product_labels'          => 'چاپ خودکار برچسب‌های محصول',
                            'auto_print_lot_labels'              => 'چاپ خودکار برچسب‌های سری ساخت',
                            'auto_print_reception_report'        => 'چاپ خودکار گزارش دریافت',
                            'auto_print_reception_report_labels' => 'چاپ خودکار برچسب‌های گزارش دریافت',
                            'auto_print_packages'                => 'چاپ خودکار بسته‌ها',
                        ],
                    ],

                    'print_on_pack' => [
                        'title' => 'چاپ هنگام بسته‌بندی',

                        'entries' => [
                            'auto_print_package_label' => 'چاپ خودکار برچسب بسته',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
