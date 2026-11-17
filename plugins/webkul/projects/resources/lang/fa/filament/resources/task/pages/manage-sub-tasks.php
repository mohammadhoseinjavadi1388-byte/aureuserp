<?php

return [
    'title' => 'زیروظیفه‌ها',

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'افزودن زیروظیفه',

                'notification' => [
                    'title' => 'وظیفه ایجاد شد',
                    'body'  => 'وظیفه با موفقیت ایجاد شد.',
                ],
            ],
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'وظیفه بازیابی شد',
                    'body'  => 'وظیفه با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'وظیفه حذف شد',
                    'body'  => 'وظیفه با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'وظیفه برای همیشه حذف شد',
                    'body'  => 'وظیفه با موفقیت برای همیشه حذف شد.',
                ],
            ],
        ],
    ],
];
