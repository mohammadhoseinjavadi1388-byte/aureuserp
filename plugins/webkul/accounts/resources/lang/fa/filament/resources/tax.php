<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'name'                         => 'نام',
                'tax-type'                     => 'نوع مالیات',
                'tax-computation'              => 'روش محاسبه مالیات',
                'tax-scope'                    => 'دامنه مالیات',
                'status'                       => 'وضعیت',
                'amount'                       => 'مقدار',
                'formula'                      => 'فرمول',
                'formula-helper-text'          => 'فقط عملیات حسابی: اعداد، + - * / ( )، توابع :functions و این متغیرها: :variables',
                'children-taxes'               => 'مالیات‌های زیرمجموعه',
                'children-taxes-helper-text'   => 'مقدار این مالیات برابر با مجموع مالیات‌های زیرمجموعه آن است.',
                'children-taxes-type-mismatch' => 'مالیات‌های زیرمجموعه باید از نوع مالیات :type باشند یا نوع مالیات نداشته باشند. این موارد چنین نیستند: :taxes',
            ],

            'repeater' => [
                'invoice-repartition-lines' => [
                    'label' => 'سطرهای تسهیم فاکتور',
                ],

                'refund-repartition-lines' => [
                    'label' => 'سطرهای تسهیم استرداد وجه',
                ],

                'fields' => [
                    'type'           => 'نوع',
                    'factor-percent' => 'ضریب %',
                    'account'        => 'حساب',
                ],
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'گزینه‌های پیشرفته',

                    'fields' => [
                        'invoice-label'       => 'عنوان در فاکتور',
                        'tax-group'           => 'گروه مالیاتی',
                        'country'             => 'کشور',
                        'include-in-price'    => 'لحاظ‌شده در قیمت',
                        'include-base-amount' => 'تأثیر بر مبنای مالیات‌های بعدی',
                        'is-base-affected'    => 'تأثیرپذیری مبنا از مالیات‌های قبلی',
                    ],
                ],

                'fields' => [
                    'description' => 'توضیحات',
                    'legal-notes' => 'یادداشت‌های قانونی',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                   => 'نام',
            'amount-type'            => 'نوع مقدار',
            'company'                => 'شرکت',
            'tax-group'              => 'گروه مالیاتی',
            'country'                => 'کشور',
            'tax-type'               => 'نوع مالیات',
            'tax-scope'              => 'دامنه مالیات',
            'amount-type'            => 'نوع مقدار',
            'invoice-label'          => 'عنوان در فاکتور',
            'tax-exigibility'        => 'زمان تعلق مالیات',
            'price-include-override' => 'تغییر پیش‌فرض لحاظ در قیمت',
            'amount'                 => 'مقدار',
            'status'                 => 'وضعیت',
            'include-base-amount'    => 'لحاظ در مبلغ مبنا',
            'is-base-affected'       => 'تأثیرپذیری مبنا',
        ],

        'groups' => [
            'name'         => 'نام',
            'company'      => 'شرکت',
            'tax-group'    => 'گروه مالیاتی',
            'country'      => 'کشور',
            'created-by'   => 'ایجادکننده',
            'type-tax-use' => 'نوع کاربرد مالیات',
            'tax-scope'    => 'دامنه مالیات',
            'amount-type'  => 'نوع مقدار',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'مالیات حذف شد',
                        'body'  => 'مالیات با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف مالیات ممکن نیست',
                        'body'  => 'این مالیات قابل حذف نیست، زیرا در حال استفاده است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'مالیات‌ها حذف شدند',
                        'body'  => 'مالیات‌ها با موفقیت حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف مالیات‌ها ممکن نیست',
                        'body'  => 'این مالیات‌ها قابل حذف نیستند، زیرا در حال استفاده هستند.',
                    ],
                ],
            ],
        ],

        'pages' => [
            'create' => [
                'notifications' => [
                    'invalid-repartition-lines' => [
                        'title' => 'سطرهای تسهیم نامعتبر است',
                    ],
                ],
            ],

            'edit' => [
                'notifications' => [
                    'invalid-repartition-lines' => [
                        'title' => 'سطرهای تسهیم نامعتبر است',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'            => 'نام',
                'tax-type'        => 'نوع مالیات',
                'tax-computation' => 'روش محاسبه مالیات',
                'tax-scope'       => 'دامنه مالیات',
                'status'          => 'وضعیت',
                'amount'          => 'مقدار',
                'formula'         => 'فرمول',
                'children-taxes'  => 'مالیات‌های زیرمجموعه',
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'گزینه‌های پیشرفته',

                    'entries' => [
                        'invoice-label'       => 'عنوان در فاکتور',
                        'tax-group'           => 'گروه مالیاتی',
                        'country'             => 'کشور',
                        'include-in-price'    => 'لحاظ‌شده در قیمت',
                        'include-base-amount' => 'لحاظ در مبلغ مبنا',
                        'is-base-affected'    => 'تأثیرپذیری مبنا',
                    ],
                ],

                'description-and-legal-notes' => [
                    'title'   => 'توضیحات و یادداشت‌های قانونی فاکتور',
                    'entries' => [
                        'description' => 'توضیحات',
                        'legal-notes' => 'یادداشت‌های قانونی',
                    ],
                ],
            ],
        ],
    ],

];
