<?php

return [
    'global-search' => [
        'code' => 'کد',
        'type' => 'نوع',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'code'                   => 'کد',
                'account-name'           => 'نام حساب',
                'accounting'             => 'حسابداری',
                'account-type'           => 'نوع حساب',
                'parent-account'         => 'حساب والد',
                'parent-account-helper'  => 'برای تبدیل این حساب به حساب فرعی، یکی از حساب‌های موجود را انتخاب کنید.',
                'default-taxes'          => 'مالیات‌های پیش‌فرض',
                'tags'                   => 'برچسب‌ها',
                'journals'               => 'دفاتر روزنامه',
                'journals-helper'        => 'بر اساس نوع حساب انتخاب‌شده به‌صورت خودکار پیشنهاد می‌شود. می‌توانید این انتخاب را تغییر دهید.',
                'currency'               => 'ارز',
                'deprecated'             => 'منسوخ‌شده',
                'reconcile'              => 'مجاز به تطبیق',
                'non-trade'              => 'غیرتجاری',
                'companies'              => 'شرکت‌ها',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'           => 'کد',
            'account-name'   => 'نام حساب',
            'account-type'   => 'نوع حساب',
            'parent-account' => 'حساب والد',
            'currency'       => 'ارز',
            'journals'       => 'دفاتر روزنامه',
            'reconcile'      => 'مجاز به تطبیق',
        ],

        'grouping' => [
            'account-type' => 'نوع حساب',
        ],

        'filters' => [
            'account-type'     => 'نوع حساب',
            'parent-account'   => 'حساب والد',
            'allow-reconcile'  => 'مجاز به تطبیق',
            'currency'         => 'ارز',
            'account-journals' => 'دفاتر روزنامه',
            'non-trade'        => 'غیرتجاری',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'حساب به‌روزرسانی شد',
                    'body'  => 'حساب با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'حساب حذف شد',
                        'body'  => 'حساب با موفقیت حذف شد.',
                    ],

                    'error' => [
                        'title' => 'حذف حساب ناموفق بود',
                        'body'  => 'این حساب قابل حذف نیست، زیرا آرتیکل‌های سند به آن مرتبط است.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'حساب‌ها حذف شدند',
                        'body'  => 'حساب‌ها با موفقیت حذف شدند.',
                    ],

                    'error' => [
                        'title' => 'حذف حساب‌ها ناموفق بود',
                        'body'  => 'این حساب‌ها قابل حذف نیستند، زیرا آرتیکل‌های سند به آن‌ها مرتبط است.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'code'           => 'کد',
                'account-name'   => 'نام حساب',
                'accounting'     => 'حسابداری',
                'account-type'   => 'نوع حساب',
                'parent-account' => 'حساب والد',
                'sub-accounts'   => 'حساب‌های فرعی',
                'default-taxes'  => 'مالیات‌های پیش‌فرض',
                'tags'           => 'برچسب‌ها',
                'journals'       => 'دفاتر روزنامه',
                'currency'       => 'ارز',
                'deprecated'     => 'منسوخ‌شده',
                'reconcile'      => 'تطبیق',
                'non-trade'      => 'غیرتجاری',
            ],
        ],
    ],
];
