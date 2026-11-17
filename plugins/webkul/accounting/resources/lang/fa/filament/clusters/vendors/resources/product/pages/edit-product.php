<?php

return [
    'notification' => [
        'title' => 'محصول به‌روزرسانی شد',
        'body'  => 'محصول با موفقیت به‌روزرسانی شد.',
    ],

    'header-actions' => [
        'update-quantity' => [
            'label'                     => 'به‌روزرسانی تعداد',
            'modal-heading'             => 'به‌روزرسانی تعداد محصول',
            'modal-submit-action-label' => 'به‌روزرسانی',

            'form' => [
                'fields' => [
                    'on-hand-qty' => 'موجودی در دسترس',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'محصول حذف شد',
                'body'  => 'محصول با موفقیت حذف شد.',
            ],
        ],
    ],
];
