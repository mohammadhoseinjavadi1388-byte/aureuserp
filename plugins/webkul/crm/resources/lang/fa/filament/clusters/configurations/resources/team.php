<?php

return [
    'model-label'        => 'تیم فروش',
    'plural-model-label' => 'تیم‌های فروش',

    'navigation' => [
        'title' => 'تیم‌های فروش',
    ],

    'pages' => [
        'assignment' => [
            'navigation' => 'قواعد واگذاری',
            'title'      => ':team — قواعد واگذاری',
        ],

        'alias' => [
            'navigation' => 'نام مستعار ایمیل',
            'title'      => ':team — نام مستعار ایمیل',
        ],

        'members' => [
            'title'              => ':team — اعضا',
            'inactive'           => 'غیرفعال',
            'skipped'            => 'از واگذاری خودکار مستثناست',
            'rules'              => '{1} :count قاعده|[0,*] :count قاعده',
            'lead-limit'         => 'سقف سرنخ (30 روز): :assigned / :max',
            'lead-limit-tooltip' => ':assigned از :max سرنخ در 30 روز گذشته واگذار شده است',
        ],
    ],
];
