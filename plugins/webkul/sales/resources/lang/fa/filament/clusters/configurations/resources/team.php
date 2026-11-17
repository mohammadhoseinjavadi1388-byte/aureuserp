<?php

return [
    'title' => 'تیم‌های فروش',

    'navigation' => [
        'title' => 'تیم‌های فروش',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'     => 'تیم فروش',
                'status'   => 'وضعیت',
                'fieldset' => [
                    'team-details' => [
                        'title'  => 'جزئیات تیم',
                        'fields' => [
                            'team-leader'            => 'سرپرست تیم',
                            'company'                => 'شرکت',
                            'invoiced-target'        => 'هدف فروش فاکتورشده',
                            'invoiced-target-suffix' => '/ ماه',
                            'color'                  => 'رنگ',
                            'members'                => 'اعضا',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => 'شناسه',
            'company'         => 'شرکت',
            'team-leader'     => 'سرپرست تیم',
            'name'            => 'نام',
            'status'          => 'وضعیت',
            'invoiced-target' => 'هدف فروش فاکتورشده',
            'color'           => 'رنگ',
            'created-by'      => 'ایجادکننده',
            'created-at'      => 'تاریخ ایجاد',
            'updated-at'      => 'تاریخ به‌روزرسانی',
        ],

        'filters' => [
            'name'        => 'نام',
            'team-leader' => 'سرپرست تیم',
            'company'     => 'شرکت',
            'created-by'  => 'ایجادکننده',
            'updated-at'  => 'تاریخ به‌روزرسانی',
            'created-at'  => 'تاریخ ایجاد',
        ],

        'groups' => [
            'name'        => 'نام',
            'company'     => 'شرکت',
            'team-leader' => 'سرپرست تیم',
            'created-at'  => 'تاریخ ایجاد',
            'updated-at'  => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تیم فروش بازیابی شد',
                    'body'  => 'تیم فروش با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تیم فروش حذف شد',
                    'body'  => 'تیم فروش با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تیم فروش به‌طور دائمی حذف شد',
                    'body'  => 'تیم فروش با موفقیت به‌طور دائمی حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تیم‌های فروش بازیابی شدند',
                    'body'  => 'تیم‌های فروش با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تیم‌های فروش حذف شدند',
                    'body'  => 'تیم‌های فروش با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تیم‌های فروش به‌طور دائمی حذف شدند',
                    'body'  => 'تیم‌های فروش با موفقیت به‌طور دائمی حذف شدند.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'تیم فروش ایجاد شد',
                    'body'  => 'تیم فروش با موفقیت ایجاد شد.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'     => 'تیم فروش',
                'status'   => 'وضعیت',
                'fieldset' => [
                    'team-details' => [
                        'title'   => 'جزئیات تیم',
                        'entries' => [
                            'team-leader'            => 'سرپرست تیم',
                            'company'                => 'شرکت',
                            'invoiced-target'        => 'هدف فروش فاکتورشده',
                            'invoiced-target-suffix' => '/ ماه',
                            'color'                  => 'رنگ',
                            'members'                => 'اعضا',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
