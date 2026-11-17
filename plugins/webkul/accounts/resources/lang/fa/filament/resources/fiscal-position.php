<?php

return [
    'global-search' => [
        'zip-from' => 'کد پستی از',
        'zip-to'   => 'کد پستی تا',
        'name'     => 'نام',
    ],

    'form' => [
        'fields' => [
            'name'                   => 'نام',
            'foreign-vat'            => 'شناسه مالیاتی خارجی',
            'country'                => 'کشور',
            'country-group'          => 'گروه کشورها',
            'zip-from'               => 'کد پستی از',
            'zip-to'                 => 'کد پستی تا',
            'detect-automatically'   => 'تشخیص خودکار',
            'notes'                  => 'یادداشت‌ها',
            'company'                => 'شرکت',
        ],
        'tabs' => [
            'account-mapping' => [
                'table' => [
                    'columns' => [
                        'source-account'      => 'حساب مبدأ',
                        'destination-account' => 'حساب مقصد',
                    ],
                ],

            ],
            'tax-mapping' => [
                'table' => [
                    'columns' => [
                        'tax-source'      => 'مالیات مبدأ',
                        'tax-destination' => 'مالیات مقصد',
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'نام',
            'company'              => 'شرکت',
            'country'              => 'کشور',
            'country-group'        => 'گروه کشورها',
            'created-by'           => 'ایجادکننده',
            'zip-from'             => 'کد پستی از',
            'zip-to'               => 'کد پستی تا',
            'status'               => 'وضعیت',
            'detect-automatically' => 'تشخیص خودکار',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'وضعیت مالیاتی حذف شد',
                    'body'  => 'وضعیت مالیاتی با موفقیت حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'وضعیت مالیاتی حذف شد',
                    'body'  => 'وضعیت مالیاتی با موفقیت حذف شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'                 => 'نام',
            'foreign-vat'          => 'شناسه مالیاتی خارجی',
            'country'              => 'کشور',
            'country-group'        => 'گروه کشورها',
            'zip-from'             => 'کد پستی از',
            'zip-to'               => 'کد پستی تا',
            'detect-automatically' => 'تشخیص خودکار',
            'notes'                => 'یادداشت‌ها',
        ],
    ],
];
