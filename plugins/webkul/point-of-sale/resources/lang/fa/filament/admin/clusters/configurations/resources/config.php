<?php

return [
    'navigation' => [
        'title' => 'پایانه فروش',
        'group' => 'پایانه فروش',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'fields' => [
                    'name'             => 'پایانه فروش',
                    'name-placeholder' => 'مثلاً فروشگاه تهران',
                    'code'             => 'کد کوتاه',
                    'code-helper-text' => 'به‌عنوان پیشوند شماره سفارش‌ها و نوبت‌های کاری صندوق استفاده می‌شود.',
                    'is-active'        => 'فعال',
                ],
            ],

            'configurations' => [
                'title' => 'پیکربندی',

                'tabs' => [
                    'restaurant' => [
                        'title' => 'حالت رستوران',

                        'fields' => [
                            'is-restaurant'                 => 'کافه/رستوران است',
                            'is-restaurant-helper-text'     => 'مدیریت میزها، تقسیم صورت‌حساب و برگه‌های آماده‌سازی را فعال می‌کند.',
                            'enable-split-bill'             => 'امکان تقسیم صورت‌حساب',
                            'enable-split-bill-helper-text' => 'تقسیم جمع کل یا ردیف‌های سفارش.',
                            'enable-print-bill'             => 'چاپ رسید پیش از پرداخت',
                            'enable-print-bill-helper-text' => 'امکان چاپ رسید پیش از پرداخت را فراهم می‌کند.',
                            'enable-takeaway'               => 'سرو در محل / بیرون‌بر',
                            'enable-takeaway-helper-text'   => 'نرخ مالیات را بر اساس سرو در محل یا بیرون‌بر بودن سفارش تنظیم می‌کند.',
                            'takeaway-fiscal-position'      => 'وضعیت مالیاتی جایگزین',
                            'floors'                        => 'نقشه سالن‌ها و میزها',
                            'floors-helper-text'            => 'سالن‌ها را طراحی کنید و سفارش‌ها را به میزها اختصاص دهید.',
                        ],
                    ],

                    'payment' => [
                        'title' => 'پرداخت',

                        'fields' => [
                            'payment-methods'                        => 'روش‌های پرداخت',
                            'enable-maximum-difference'              => 'تعیین حداکثر مغایرت',
                            'enable-maximum-difference-helper-text'  => 'حداکثر مغایرت مجاز بین وجه مورد انتظار و وجه شمارش‌شده هنگام بستن نوبت کاری صندوق را تعیین کنید.',
                            'amount-authorized-diff'                 => 'حداکثر مغایرت',
                            'enable-cash-rounding'                   => 'گرد کردن وجه نقد',
                            'enable-cash-rounding-helper-text'       => 'کوچک‌ترین واحد پول رایج برای پرداخت نقدی را مشخص کنید.',
                            'cash-rounding'                          => 'روش گرد کردن',
                            'enable-only-round-cash-method'          => 'گرد کردن فقط برای پرداخت نقدی',
                            'enable-tip'                             => 'انعام',
                            'enable-tip-helper-text'                 => 'انعام مشتری را بپذیرید یا باقی‌مانده پول او را به انعام تبدیل کنید.',
                            'tip-product'                            => 'محصول انعام',
                        ],
                    ],

                    'interface' => [
                        'title' => 'رابط کاربری پایانه فروش',

                        'fields' => [
                            'enable-customer-required'              => 'انتخاب مشتری الزامی است',
                            'show-product-images'                   => 'نمایش تصویر محصولات',
                            'show-category-images'                  => 'نمایش تصویر دسته‌بندی‌ها',
                            'limited-products-amount'               => 'تعداد محصولات بارگذاری‌شده',
                            'limited-products-amount-helper-text'   => 'تعداد محصولاتی که هنگام باز شدن نوبت کاری صندوق در پایانه بارگذاری می‌شوند.',
                        ],
                    ],

                    'products' => [
                        'title' => 'محصول و دسته‌بندی‌های پایانه فروش',

                        'fields' => [
                            'show-margins-and-costs'             => 'نمایش حاشیه سود و بهای تمام‌شده',
                            'show-margins-and-costs-helper-text' => 'حاشیه سود و بهای تمام‌شده را در اطلاعات محصول نمایش می‌دهد.',
                            'limit-categories'                   => 'محدودسازی دسته‌بندی‌ها',
                            'limit-categories-helper-text'       => 'دسته‌بندی‌های محصول پایانه فروش را که در دسترس هستند انتخاب کنید.',
                            'locked-by-session'                  => 'تا زمانی که نوبت کاری صندوق باز است قفل است',
                            'categories'                         => 'دسته‌بندی‌های محصول در دسترس پایانه فروش',
                        ],
                    ],

                    'accounting' => [
                        'title' => 'حسابداری',

                        'fields' => [
                            'journal'                                  => 'دفتر روزنامه سفارش‌ها',
                            'journal-helper-text'                      => 'دفتر روزنامه‌ای که برای سند بستن نوبت کاری صندوق استفاده می‌شود.',
                            'invoice-journal'                          => 'دفتر روزنامه فاکتورها',
                            'is-closing-entry-by-product'              => 'سند بستن به تفکیک محصول',
                            'is-closing-entry-by-product-helper-text'  => 'ردیف‌های فروش را در سند بستنی که به‌صورت خودکار ایجاد می‌شود به تفکیک محصول نمایش می‌دهد.',
                            'enable-fiscal-position'                   => 'مالیات انعطاف‌پذیر',
                            'enable-fiscal-position-helper-text'       => 'با استفاده از وضعیت‌های مالیاتی، برای هر سفارش مالیات متفاوتی اعمال کنید.',
                            'fiscal-position'                          => 'وضعیت مالیاتی پیش‌فرض',
                            'fiscal-positions'                         => 'وضعیت‌های مالیاتی',
                            'receivable-account'                       => 'حساب واسط',
                            'receivable-account-helper-text'           => 'برای استفاده از حساب دریافتنی پیش‌فرض در تنظیمات پایانه فروش، خالی بگذارید.',
                            'cash-movement-account'                    => 'حساب واریز/برداشت صندوق',
                            'balancing-account'                        => 'حساب تراز کننده',
                            'enable-cogs'                              => 'بهای تمام‌شده کالای فروش‌رفته',
                            'enable-cogs-helper-text'                  => 'بهای تمام‌شده محصولات فروش‌رفته را هنگام بستن نوبت کاری صندوق ثبت می‌کند.',
                            'cogs-journal'                             => 'دفتر روزنامه بهای تمام‌شده کالای فروش‌رفته',
                            'stock-output-account'                     => 'حساب خروج موجودی',
                        ],
                    ],

                    'pricing' => [
                        'title' => 'قیمت‌گذاری',

                        'fields' => [
                            'tax-display'                            => 'قیمت محصولات',
                            'tax-display-helper-text'                => 'قیمت محصولات که در پایانه و روی رسیدها نمایش داده می‌شود.',
                            'enable-price-control'                   => 'کنترل قیمت',
                            'enable-price-control-helper-text'       => 'تغییر قیمت را فقط برای مدیران مجاز می‌کند.',
                            'enable-price-list'                      => 'لیست قیمت انعطاف‌پذیر',
                            'enable-price-list-helper-text'          => 'تعریف چند قیمت برای هر محصول، تخفیف‌های خودکار و موارد دیگر.',
                            'price-list'                             => 'لیست قیمت پیش‌فرض',
                            'price-list-helper-text'                 => 'روی همه سفارش‌های این صندوق اعمال می‌شود. صندوق‌دارها فقط زمانی می‌توانند لیست را تغییر دهند که لیست قیمت انعطاف‌پذیر فعال باشد.',
                            'price-lists'                            => 'لیست‌های قیمت در دسترس',
                            'enable-line-discount'                   => 'تخفیف ردیفی',
                            'enable-line-discount-helper-text'       => 'به صندوق‌دارها اجازه می‌دهد برای هر ردیف تخفیف تعیین کنند.',
                            'enable-global-discount'                 => 'تخفیف کلی',
                            'enable-global-discount-helper-text'     => 'دکمه‌ای برای اعمال تخفیف کلی اضافه می‌کند.',
                            'discount-product'                       => 'محصول تخفیف',
                            'global-discount-percentage'             => 'درصد تخفیف',
                            'global-discount-percentage-helper-text' => 'درصد پیش‌فرضی که هنگام اعمال تخفیف کلی توسط صندوق‌دار پیشنهاد می‌شود.',
                        ],
                    ],

                    'receipts' => [
                        'title' => 'صورت‌حساب‌ها و رسیدها',

                        'fields' => [
                            'enable-receipt-print'                   => 'چاپ رسید',
                            'enable-receipt-print-helper-text'       => 'پس از پرداخت، دکمه «چاپ» را در صفحه رسید نمایش می‌دهد.',
                            'enable-receipt-auto-print'              => 'چاپ خودکار رسید',
                            'enable-receipt-auto-print-helper-text'  => 'رسیدها پس از ثبت پرداخت به‌صورت خودکار چاپ می‌شوند.',
                            'receipt-header'                         => 'سربرگ رسید',
                            'receipt-footer'                         => 'پانویس رسید',
                            'bills'                                  => 'سکه‌ها/اسکناس‌ها',
                            'bills-helper-text'                      => 'سکه‌ها و اسکناس‌هایی که هنگام شمارش وجه نقد در ابتدا و پایان نوبت کاری ارائه می‌شوند.',
                        ],
                    ],

                    'preparation' => [
                        'title' => 'آماده‌سازی',

                        'fields' => [
                            'printers'             => 'چاپگرهای آماده‌سازی',
                            'printers-helper-text' => 'چاپ سفارش‌ها در آشپزخانه، بار و غیره.',
                        ],
                    ],

                    'inventory' => [
                        'title' => 'انبارداری',

                        'fields' => [
                            'operation-type'                => 'نوع عملیات',
                            'operation-type-helper-text'    => 'برای ثبت برداشت محصولات از انبار استفاده می‌شود. محصولات از مکان انبار مبدأ پیش‌فرض آن مصرف می‌شوند.',
                            'return-operation-type'         => 'نوع عملیات مرجوعی',
                            'warehouse'                     => 'انبار',
                            'enable-ship-later'             => 'امکان ارسال در آینده',
                            'enable-ship-later-helper-text' => 'محصولات را بفروشید و بعداً تحویل دهید.',
                            'ship-later-route'              => 'مسیر مشخص',
                            'picking-policy'                => 'سیاست ارسال',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عمومی',

                'entries' => [
                    'name'           => 'پایانه فروش',
                    'code'           => 'کد کوتاه',
                    'company-name'   => 'شرکت',
                    'warehouse-name' => 'انبار',
                    'journal-name'   => 'دفتر روزنامه سفارش‌ها',
                    'is-restaurant'  => 'کافه/رستوران است',
                    'is-active'      => 'فعال',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'           => 'نام',
            'closing'        => 'بستن',
            'balance'        => 'مانده',
            'code'           => 'کد',
            'warehouse'      => 'انبار',
            'operation-type' => 'نوع عملیات',
            'journal'        => 'دفتر روزنامه فروش',
            'is-restaurant'  => 'رستوران',
            'is-active'      => 'فعال',
            'company'        => 'شرکت',
        ],

        'groups' => [
            'warehouse' => 'انبار',
            'company'   => 'شرکت',
        ],

        'record-actions' => [
            'restore' => [
                'notification' => [
                    'success' => [
                        'title' => 'پایانه فروش بازیابی شد',
                        'body'  => 'پایانه فروش با موفقیت بازیابی شد.',
                    ],
                ],
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'پایانه فروش حذف شد',
                        'body'  => 'پایانه فروش با موفقیت حذف شد.',
                    ],
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'پایانه فروش به‌صورت دائمی حذف شد',
                        'body'  => 'پایانه فروش با موفقیت به‌صورت دائمی حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف پایانه فروش ممکن نیست',
                        'body'  => 'این پایانه فروش را نمی‌توان به‌صورت دائمی حذف کرد، زیرا نوبت کاری صندوق یا سفارش دارد. به‌جای آن، بایگانی‌اش کنید.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'پایانه‌های فروش به‌صورت دائمی حذف شدند',
                        'body'  => 'پایانه‌های فروش انتخاب‌شده با موفقیت به‌صورت دائمی حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف پایانه‌های فروش ممکن نیست',
                        'body'  => 'یک یا چند پایانه فروش را نمی‌توان به‌صورت دائمی حذف کرد، زیرا نوبت کاری صندوق یا سفارش دارند. به‌جای آن، بایگانی‌شان کنید.',
                    ],
                ],
            ],
        ],
    ],
];
