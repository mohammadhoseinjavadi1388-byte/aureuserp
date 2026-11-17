<?php

return [
    'navigation' => [
        'title' => 'گزارش‌ها',
    ],
    'common' => [
        'from-to'                  => ':report - از :from تا :to',
        'expand-all'               => 'باز کردن همه',
        'collapse-all'             => 'بستن همه',
        'account'                  => 'حساب',
        'date'                     => 'تاریخ',
        'communication'            => 'شرح',
        'partner'                  => 'طرف حساب',
        'journal'                  => 'دفتر روزنامه',
        'invoice-date'             => 'تاریخ فاکتور',
        'due-date'                 => 'تاریخ سررسید',
        'debit'                    => 'بدهکار',
        'credit'                   => 'بستانکار',
        'balance'                  => 'مانده',
        'total'                    => 'جمع کل',
        'opening-balance'          => 'مانده ابتدای دوره',
        'initial-balance'          => 'مانده اولیه',
        'end-balance'              => 'مانده پایان دوره',
        'not-due'                  => 'سررسید نشده',
        'no-data'                  => 'داده‌ای موجود نیست',
        'no-accounts-transactions' => 'در این دوره حسابی دارای گردش وجود ندارد',
    ],
    'pages' => [
        'balance-sheet' => [
            'navigation' => [
                'title' => 'ترازنامه',
                'group' => 'صورت‌های مالی',
            ],
            'actions' => [
                'export-excel' => 'برون‌بری به Excel',
                'export-pdf'   => 'برون‌بری به PDF',
            ],
            'filters' => [
                'date-range' => 'بازه تاریخ',
                'journals'   => 'دفاتر روزنامه',
            ],
            'content' => [
                'sections' => [
                    'assets' => [
                        'title'       => 'دارایی‌ها',
                        'total-label' => 'جمع دارایی‌ها',
                        'subsections' => [
                            'current-assets' => [
                                'title'       => 'دارایی‌های جاری',
                                'total-label' => 'جمع دارایی‌های جاری',
                            ],
                            'fixed-assets' => [
                                'title'       => 'دارایی‌های ثابت',
                                'total-label' => 'جمع دارایی‌های ثابت',
                            ],
                            'non-current-assets' => [
                                'title'       => 'دارایی‌های غیرجاری',
                                'total-label' => 'جمع دارایی‌های غیرجاری',
                            ],
                        ],
                    ],
                    'liabilities' => [
                        'title'       => 'بدهی‌ها',
                        'total-label' => 'جمع بدهی‌ها',
                        'subsections' => [
                            'current-liabilities' => [
                                'title'       => 'بدهی‌های جاری',
                                'total-label' => 'جمع بدهی‌های جاری',
                            ],
                            'non-current-liabilities' => [
                                'title'       => 'بدهی‌های غیرجاری',
                                'total-label' => 'جمع بدهی‌های غیرجاری',
                            ],
                        ],
                    ],
                    'equity' => [
                        'title'       => 'حقوق صاحبان سهام',
                        'total-label' => 'جمع حقوق صاحبان سهام',
                        'subsections' => [
                            'unallocated-earnings' => [
                                'title'          => 'سود تخصیص‌نیافته',
                                'current-year'   => 'سود تخصیص‌نیافته سال جاری',
                                'previous-years' => 'سود تخصیص‌نیافته سال‌های قبل',
                                'total-label'    => 'جمع سود تخصیص‌نیافته',
                            ],
                            'retained-earnings' => [
                                'title'       => 'سود انباشته',
                                'total-label' => 'جمع سود انباشته',
                            ],
                        ],
                    ],
                ],
                'grand-total-label' => 'بدهی‌ها + حقوق صاحبان سهام',
            ],
        ],
        'profit-loss' => [
            'navigation' => [
                'title' => 'سود و زیان',
                'group' => 'صورت‌های مالی',
            ],
            'actions' => [
                'export-excel' => 'برون‌بری به Excel',
                'export-pdf'   => 'برون‌بری به PDF',
            ],
            'filters' => [
                'date-range' => 'بازه تاریخ',
                'journals'   => 'دفاتر روزنامه',
            ],
            'content' => [
                'sections' => [
                    'revenue' => [
                        'title'         => 'درآمد',
                        'total-label'   => 'جمع درآمد',
                        'empty-message' => 'در این دوره حساب درآمدی دارای گردش وجود ندارد',
                    ],
                    'expenses' => [
                        'title'         => 'هزینه‌ها',
                        'total-label'   => 'جمع هزینه‌ها',
                        'empty-message' => 'در این دوره حساب هزینه‌ای دارای گردش وجود ندارد',
                    ],
                ],
            ],
        ],
        'general-ledger' => [
            'navigation' => [
                'title' => 'دفتر کل',
                'group' => 'گزارش‌های حسابرسی',
            ],
            'actions' => [
                'export-excel' => 'برون‌بری به Excel',
                'export-pdf'   => 'برون‌بری به PDF',
            ],
            'filters' => [
                'date-range' => 'بازه تاریخ',
                'journals'   => 'دفاتر روزنامه',
            ],
        ],
        'trial-balance' => [
            'navigation' => [
                'title' => 'تراز آزمایشی',
                'group' => 'گزارش‌های حسابرسی',
            ],
            'actions' => [
                'export-excel' => 'برون‌بری به Excel',
                'export-pdf'   => 'برون‌بری به PDF',
            ],
            'filters' => [
                'date-range' => 'بازه تاریخ',
                'journals'   => 'دفاتر روزنامه',
            ],
        ],
        'partner-ledger' => [
            'navigation' => [
                'title' => 'دفتر معین طرف حساب‌ها',
                'group' => 'گزارش‌های طرف حساب',
            ],
            'actions' => [
                'export-excel' => 'برون‌بری Excel',
                'export-pdf'   => 'برون‌بری PDF',
            ],
            'filters' => [
                'date-range' => 'بازه تاریخ',
                'partners'   => 'طرف حساب‌ها',
                'journals'   => 'دفاتر روزنامه',
            ],
        ],
        'aged-receivable' => [
            'navigation' => [
                'title' => 'تحلیل سنی حساب‌های دریافتنی',
                'group' => 'گزارش‌های طرف حساب',
            ],
            'actions' => [
                'export-excel' => 'برون‌بری Excel',
                'export-pdf'   => 'برون‌بری PDF',
            ],
            'filters' => [
                'as-of'         => 'تا تاریخ',
                'based-on'      => 'بر اساس',
                'period-length' => 'طول دوره (روز)',
                'journals'      => 'دفاتر روزنامه',
                'partners'      => 'طرف حساب‌ها',
                'entries'       => 'اسناد',
                'options'       => [
                    'due-date'       => 'تاریخ سررسید',
                    'invoice-date'   => 'تاریخ فاکتور',
                    'days-30'        => '30 روز',
                    'days-60'        => '60 روز',
                    'days-90'        => '90 روز',
                    'posted-entries' => 'اسناد ثبت‌شده',
                    'all-entries'    => 'همه اسناد',
                ],
            ],
        ],
        'aged-payable' => [
            'navigation' => [
                'title' => 'تحلیل سنی حساب‌های پرداختنی',
                'group' => 'گزارش‌های طرف حساب',
            ],
            'actions' => [
                'export-excel' => 'برون‌بری Excel',
                'export-pdf'   => 'برون‌بری PDF',
            ],
            'filters' => [
                'as-of'         => 'تا تاریخ',
                'based-on'      => 'بر اساس',
                'period-length' => 'طول دوره (روز)',
                'journals'      => 'دفاتر روزنامه',
                'partners'      => 'طرف حساب‌ها',
                'entries'       => 'اسناد',
                'options'       => [
                    'due-date'       => 'تاریخ سررسید',
                    'invoice-date'   => 'تاریخ فاکتور',
                    'days-30'        => '30 روز',
                    'days-60'        => '60 روز',
                    'days-90'        => '90 روز',
                    'posted-entries' => 'اسناد ثبت‌شده',
                    'all-entries'    => 'همه اسناد',
                ],
            ],
        ],
    ],
];
