<?php

return [
    'navigation' => [
        'title' => 'قواعد',
        'group' => 'مدیریت انبار',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عمومی',

                'fields' => [
                    'name'                        => 'نام',
                    'action'                      => 'اقدام',
                    'operation-type'              => 'نوع عملیات',
                    'source-location'             => 'مکان مبدأ',
                    'destination-location'        => 'مکان مقصد',
                    'supply-method'               => 'روش تأمین',
                    'supply-method-hint-tooltip'  => 'برداشت از موجودی: محصولات مستقیماً از موجودی در دسترس مکان مبدأ تأمین می‌شوند.<br/>اجرای قاعده دیگر: سیستم موجودی در دسترس را نادیده می‌گیرد و برای تأمین مجدد مکان مبدأ به‌دنبال یک قاعده موجودی می‌گردد.<br/>برداشت از موجودی و در صورت نبود موجودی، اجرای قاعده دیگر: محصولات ابتدا از موجودی در دسترس برداشته می‌شوند. اگر موجودی وجود نداشته باشد، سیستم یک قاعده موجودی را برای آوردن محصولات به مکان مبدأ اعمال می‌کند.',
                    'automatic-move'              => 'جابه‌جایی خودکار',
                    'automatic-move-hint-tooltip' => 'عملیات دستی: پس از جابه‌جایی فعلی، یک جابه‌جایی موجودی جداگانه ایجاد می‌کند.<br/>خودکار بدون افزودن مرحله: بدون افزودن مرحله اضافی، مکان را مستقیماً در جابه‌جایی اصلی جایگزین می‌کند.',

                    'action-information' => [
                        'pull'        => 'هنگامی که محصولات در <b>:sourceLocation</b> مورد نیاز باشند، برای پاسخ به تقاضا :operation از <b>:destinationLocation</b> ایجاد می‌شود.',
                        'push'        => 'هنگامی که محصولات به <b>:sourceLocation</b> برسند،</br><b>:operation</b> برای انتقال آن‌ها به <b>:destinationLocation</b> ایجاد می‌شود.',
                        'buy'         => 'هنگامی که محصولات در <b>:destinationLocation</b> مورد نیاز باشند، برای رفع این نیاز یک درخواست استعلام قیمت ایجاد می‌شود.',
                        'manufacture' => 'هنگامی که محصولات در <b>:destinationLocation</b> مورد نیاز باشند، برای رفع این نیاز یک دستور تولید ایجاد می‌شود.',
                    ],
                ],
            ],

            'settings' => [
                'title'  => 'تنظیمات',

                'fields' => [
                    'partner-address'              => 'نشانی طرف حساب',
                    'partner-address-hint-tooltip' => 'نشانی محل تحویل کالا. اختیاری.',
                    'lead-time'                    => 'زمان تأمین (روز)',
                    'lead-time-hint-tooltip'       => 'تاریخ مورد انتظار انتقال بر اساس این زمان تأمین محاسبه می‌شود.',
                ],

                'fieldsets' => [
                    'applicability' => [
                        'title'  => 'دامنه اعمال',

                        'fields' => [
                            'route'   => 'مسیر',
                            'company' => 'شرکت',
                        ],
                    ],

                    'propagation' => [
                        'title'  => 'انتشار',

                        'fields' => [
                            'propagation-procurement-group'              => 'انتشار گروه تدارکات',
                            'propagation-procurement-group-hint-tooltip' => 'در صورت انتخاب، با لغو جابه‌جایی ایجادشده توسط این قاعده، جابه‌جایی بعدی نیز لغو می‌شود.',
                            'cancel-next-move'                           => 'لغو جابه‌جایی بعدی',
                            'warehouse-to-propagate'                     => 'انبار مورد انتشار',
                            'warehouse-to-propagate-hint-tooltip'        => 'انباری که به جابه‌جایی یا تدارکات ایجادشده اختصاص می‌یابد و ممکن است با انباری که این قاعده روی آن اعمال می‌شود متفاوت باشد (مثلاً برای قواعد تأمین مجدد از انبار دیگر).',
                        ],
                    ],
                ],

            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'نام',
            'action'               => 'اقدام',
            'source-location'      => 'مکان مبدأ',
            'destination-location' => 'مکان مقصد',
            'route'                => 'مسیر',
            'deleted-at'           => 'تاریخ حذف',
            'created-at'           => 'تاریخ ایجاد',
            'updated-at'           => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'action'               => 'اقدام',
            'source-location'      => 'مکان مبدأ',
            'destination-location' => 'مکان مقصد',
            'route'                => 'مسیر',
            'created-at'           => 'تاریخ ایجاد',
            'updated-at'           => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'action'               => 'اقدام',
            'source-location'      => 'مکان مبدأ',
            'destination-location' => 'مکان مقصد',
            'route'                => 'مسیر',
            'company'              => 'شرکت',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'قاعده به‌روزرسانی شد',
                    'body'  => 'قاعده با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'قاعده بازیابی شد',
                    'body'  => 'قاعده با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'قاعده حذف شد',
                    'body'  => 'قاعده با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'قاعده برای همیشه حذف شد',
                        'body'  => 'قاعده با موفقیت برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف قاعده ممکن نیست',
                        'body'  => 'قاعده در حال استفاده است و نمی‌توان آن را حذف کرد.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'قواعد بازیابی شد',
                    'body'  => 'قواعد با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'قواعد حذف شد',
                    'body'  => 'قواعد با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'قواعد برای همیشه حذف شد',
                        'body'  => 'قواعد با موفقیت برای همیشه حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف قواعد ممکن نیست',
                        'body'  => 'قواعد در حال استفاده هستند و نمی‌توان آن‌ها را حذف کرد.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'جزئیات قاعده',

                'description' => [
                    'pull'        => 'هنگامی که محصولات در <b>:sourceLocation</b> مورد نیاز باشند، برای پاسخ به تقاضا <b>:operation</b> از <b>:destinationLocation</b> ایجاد می‌شود.',
                    'push'        => 'هنگامی که محصولات به <b>:sourceLocation</b> برسند، <b>:operation</b> برای انتقال آن‌ها به <b>:destinationLocation</b> ایجاد می‌شود.',
                    'buy'         => 'هنگامی که محصولات در <b>:destinationLocation</b> مورد نیاز باشند، برای پاسخ به تقاضا یک سفارش خرید جهت خرید آن‌ها ایجاد می‌شود.',
                    'manufacture' => 'هنگامی که محصولات در <b>:destinationLocation</b> مورد نیاز باشند، برای پاسخ به تقاضا یک دستور تولید جهت تولید آن‌ها ایجاد می‌شود.',
                ],

                'entries' => [
                    'name'                 => 'نام قاعده',
                    'action'               => 'اقدام',
                    'operation-type'       => 'نوع عملیات',
                    'source-location'      => 'مکان مبدأ',
                    'destination-location' => 'مکان مقصد',
                    'route'                => 'مسیر',
                    'company'              => 'شرکت',
                    'partner-address'      => 'نشانی طرف حساب',
                    'lead-time'            => 'زمان تأمین',
                    'action-information'   => 'اطلاعات اقدام',
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
    ],
];
