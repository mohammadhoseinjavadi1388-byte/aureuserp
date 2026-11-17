<?php

return [
    'form' => [
        'fields' => [
            'code' => 'کد',
            'name' => 'نام',
        ],
    ],

    'table' => [
        'columns' => [
            'code'       => 'کد',
            'name'       => 'نام',
            'created-by' => 'ایجادکننده',
        ],

        'groups' => [
            'code' => 'کد',
            'name' => 'نام',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'اینکوترمز به‌روزرسانی شد',
                    'body'  => 'اینکوترمز با موفقیت به‌روزرسانی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'اینکوترمز حذف شد',
                    'body'  => 'اینکوترمز با موفقیت حذف شد.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'اینکوترمز بازیابی شد',
                    'body'  => 'اینکوترمز با موفقیت بازیابی شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'اینکوترمزها بازیابی شدند',
                    'body'  => 'اینکوترمزها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'اینکوترمزها حذف شدند',
                    'body'  => 'اینکوترمزها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'اینکوترمزها به‌طور دائمی حذف شدند',
                    'body'  => 'اینکوترمزها با موفقیت به‌طور دائمی حذف شدند.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => 'نام',
            'code' => 'کد',
        ],
    ],
];
