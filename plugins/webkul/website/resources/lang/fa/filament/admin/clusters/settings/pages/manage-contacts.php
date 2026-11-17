<?php

return [
    'title' => 'مدیریت اطلاعات تماس',

    'form' => [
        'sections' => [
            'contact-form' => [
                'title'       => 'تماس با ما',
                'description' => 'فرم «تماس با ما» در وب‌سایت و آنچه پس از ارسال آن توسط بازدیدکننده انجام می‌شود.',

                'fields' => [
                    'enabled'        => 'فعال‌سازی «تماس با ما»',
                    'enabled-helper' => 'صفحه «تماس با ما» و پیوند آن را در منوی وب‌سایت نمایش می‌دهد.',
                    'action'         => 'پس از ارسال',
                    'email-helper'   => 'پیام به :email ایمیل می‌شود.',
                    'crm-helper'     => 'پیام، رکوردی با مشخصات بازدیدکننده در CRM ایجاد می‌کند.',
                ],
            ],

            'contacts' => [
                'title' => 'اطلاعات تماس',

                'fields' => [
                    'email' => 'ایمیل',
                    'phone' => 'تلفن',
                ],
            ],

            'social-links' => [
                'title' => 'شبکه‌های اجتماعی',

                'fields' => [
                    'twitter'   => 'Twitter',
                    'facebook'  => 'Facebook',
                    'instagram' => 'Instagram',
                    'linkedin'  => 'LinkedIn',
                    'pinterest' => 'Pinterest',
                    'tiktok'    => 'TikTok',
                    'github'    => 'GitHub',
                    'slack'     => 'Slack',
                    'whatsapp'  => 'WhatsApp',
                    'youtube'   => 'YouTube',
                ],
            ],
        ],
    ],
];
