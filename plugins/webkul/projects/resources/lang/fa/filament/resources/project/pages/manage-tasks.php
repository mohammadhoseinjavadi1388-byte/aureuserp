<?php

return [
    'title' => 'وظایف',

    'header-actions' => [
        'create' => [
            'label' => 'وظیفه جدید',
        ],
    ],

    'table' => [
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

    'tabs' => [
        'open-tasks'       => 'وظایف باز',
        'my-tasks'         => 'وظایف من',
        'unassigned-tasks' => 'وظایف واگذارنشده',
        'closed-tasks'     => 'وظایف بسته‌شده',
        'starred-tasks'    => 'وظایف ستاره‌دار',
        'archived-tasks'   => 'وظایف بایگانی‌شده',
    ],
];
