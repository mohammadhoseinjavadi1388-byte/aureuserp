<?php

return [
    'model-label'        => 'دلیل از دست رفتن',
    'plural-model-label' => 'دلایل از دست رفتن',

    'navigation' => [
        'title' => 'دلایل از دست رفتن',
        'group' => 'کاریز فروش',
    ],

    'form' => [
        'fields' => [
            'name' => 'توضیحات',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'توضیحات',
            'created-by' => 'ایجادکننده',
            'created-at' => 'تاریخ ایجاد',
            'updated-at' => 'تاریخ به‌روزرسانی',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'دلیل از دست رفتن به‌روزرسانی شد',
                    'body'  => 'دلیل از دست رفتن با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'دلیل از دست رفتن بازیابی شد',
                    'body'  => 'دلیل از دست رفتن با موفقیت بازیابی شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'دلیل از دست رفتن حذف شد',
                    'body'  => 'دلیل از دست رفتن برای همیشه حذف شد.',
                ],
            ],
        ],
    ],
];
