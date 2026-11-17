<?php

return [
    'title' => 'مهارت‌ها',

    'navigation' => [
        'title' => 'مهارت‌ها',
    ],

    'form' => [
        'sections' => [
            'skill-details' => [
                'title' => 'جزئیات مهارت',

                'fields' => [
                    'employee'       => 'کارمند',
                    'skill'          => 'مهارت',
                    'skill-level'    => 'سطح',
                    'skill-type'     => 'نوع مهارت',
                ],
            ],
            'addition-information' => [
                'title' => 'اطلاعات تکمیلی',

                'fields' => [
                    'created-by' => 'ایجادکننده',
                    'updated-by' => 'به‌روزرسانی‌کننده',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => 'شناسه',
            'employee'        => 'کارمند',
            'skill'           => 'مهارت',
            'skill-level'     => 'سطح',
            'skill-type'      => 'نوع مهارت',
            'user'            => 'کاربر',
            'proficiency'     => 'میزان تسلط',
            'created-by'      => 'ایجادکننده',
            'created-at'      => 'تاریخ ایجاد',
        ],

        'filters' => [
            'employee'        => 'کارمند',
            'skill'           => 'مهارت',
            'skill-level'     => 'سطح',
            'skill-type'      => 'نوع مهارت',
            'user'            => 'کاربر',
            'created-by'      => 'ایجادکننده',
            'created-at'      => 'تاریخ ایجاد',
            'updated-at'      => 'تاریخ به‌روزرسانی',
        ],

        'groups' => [
            'employee'   => 'کارمند',
            'skill-type' => 'نوع مهارت',
        ],
    ],

    'infolist' => [
        'sections' => [
            'skill-details' => [
                'title' => 'جزئیات مهارت',

                'entries' => [
                    'employee'        => 'کارمند',
                    'skill'           => 'مهارت',
                    'skill-level'     => 'سطح',
                    'skill-type'      => 'نوع مهارت',
                ],
            ],

            'additional-information' => [
                'title' => 'اطلاعات تکمیلی',

                'entries' => [
                    'created-by' => 'ایجادکننده',
                    'updated-by' => 'به‌روزرسانی‌کننده',
                ],
            ],
        ],
    ],
];
