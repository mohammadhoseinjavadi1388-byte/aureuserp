<?php

return [

    'title' => 'افزونه',

    'table' => [
        'version'             => 'نسخه',
        'dependencies'        => 'وابستگی‌ها',
        'dependencies_suffix' => ' وابستگی',
    ],

    'status' => [
        'installed'     => 'نصب‌شده',
        'not_installed' => 'نصب‌نشده',
    ],

    'filters' => [
        'installation_status' => 'وضعیت نصب',
        'all_plugins'         => 'همه افزونه‌ها',
        'installed'           => 'نصب‌شده',
        'not_installed'       => 'نصب‌نشده',
        'active_status'       => 'وضعیت فعال بودن',
        'author'              => 'سازنده',
        'webkul'              => 'Webkul',
        'third_party'         => 'شخص ثالث',
    ],

    'actions' => [
        'install' => [
            'title'       => 'نصب',
            'heading'     => 'نصب افزونه :name',
            'description' => "آیا مطمئن هستید که می‌خواهید افزونه «:name» را نصب کنید؟ با این کار مایگریشن‌ها و سیدرها اجرا می‌شوند.",
            'submit'      => 'نصب افزونه',
        ],
        'uninstall' => [
            'title'      => 'حذف نصب',
            'heading'    => 'حذف نصب افزونه',
            'submit'     => 'حذف نصب افزونه',
        ],
    ],

    'notifications' => [
        'installed' => [
            'title' => 'افزونه با موفقیت نصب شد',
            'body'  => "افزونه «:name» نصب شد.",
        ],
        'installed-failed' => [
            'title' => 'نصب ناموفق بود',
        ],
        'uninstalled' => [
            'title' => 'نصب افزونه با موفقیت حذف شد',
            'body'  => "نصب افزونه «:name» حذف شد.",
        ],
        'uninstalled-failed' => [
            'title' => 'حذف نصب ناموفق بود',
        ],
        'uninstalled-blocked' => [
            'title' => 'حذف نصب افزونه ممکن نیست',
            'body'  => "افزونه «:name» افزونه‌های وابسته نصب‌شده‌ای دارد که ابتدا باید نصب آن‌ها حذف شود: :dependents.",
        ],
    ],

    'infolist' => [
        'section'  => [
            'plugin'       => ' اطلاعات افزونه',
            'dependencies' => 'وابستگی‌ها',
        ],
        'name'         => 'نام افزونه',
        'author'       => 'سازنده',
        'version'      => 'نسخه',
        'dependencies' => 'افزونه‌های پیش‌نیاز',
        'dependents'   => 'افزونه‌های وابسته به این افزونه',
        'is_installed' => 'وضعیت نصب',
        'license'      => 'مجوز استفاده',
        'summary'      => 'توضیحات',

        'dependencies-repeater' => [
            'title'        => 'افزونه‌های پیش‌نیاز',
            'name'         => 'نام افزونه',
            'is_installed' => 'نصب‌شده',
            'placeholder'  => 'به هیچ افزونه‌ای وابسته نیست',
        ],

        'dependents-repeater' => [
            'title'        => 'افزونه‌های وابسته به این افزونه',
            'name'         => 'نام افزونه',
            'is_installed' => 'نصب‌شده',
            'placeholder'  => 'هیچ افزونه‌ای به این افزونه وابسته نیست',
        ],

    ],

    'names' => [
        'accounting'     => 'حسابداری',
        'accounts'       => 'حساب‌ها',
        'analytics'      => 'تحلیل‌ها',
        'barcode'        => 'بارکد',
        'blogs'          => 'وبلاگ‌ها',
        'chatter'        => 'گفت‌وگو',
        'contacts'       => 'مخاطبان',
        'employees'      => 'کارمندان',
        'fields'         => 'فیلدهای سفارشی',
        'full-calendar'  => 'تقویم',
        'inventories'    => 'انبارداری',
        'invoices'       => 'فاکتورها',
        'maintenance'    => 'نگهداری و تعمیرات',
        'manufacturing'  => 'تولید',
        'partners'       => 'طرف حساب‌ها',
        'payments'       => 'پرداخت‌ها',
        'plugin-manager' => 'مدیریت افزونه‌ها',
        'products'       => 'محصولات',
        'projects'       => 'پروژه‌ها',
        'purchases'      => 'خرید',
        'recruitments'   => 'استخدام',
        'sales'          => 'فروش',
        'security'       => 'امنیت',
        'support'        => 'پشتیبانی',
        'table-views'    => 'نماهای جدول',
        'time-off'       => 'مرخصی',
        'timesheets'     => 'برگه‌های ثبت ساعت کاری',
        'website'        => 'وب‌سایت',
    ],

    'summaries' => [
        'accounting'     => 'مدیریت سرفصل حساب‌ها، دفترهای روزنامه و اسناد مالی',
        'accounts'       => 'مدیریت پایه حساب‌ها و تنظیمات مالی',
        'analytics'      => 'گزارش‌ها و داشبوردها برای شناخت بهتر کسب‌وکار',
        'barcode'        => 'برنامه عملیات بارکد برای انبارداری و تولید',
        'blogs'          => 'مدیریت وبلاگ‌ها',
        'chatter'        => 'سابقه فعالیت‌ها، پیام‌رسانی و پیگیری روی رکوردها',
        'contacts'       => 'مدیریت مخاطبان برای مشتریان و تأمین‌کنندگان',
        'employees'      => 'مدیریت کارمندان',
        'fields'         => 'افزودن فیلدهای سفارشی به بخش‌های مختلف',
        'full-calendar'  => 'نماهای تقویم و زمان‌بندی رویدادها',
        'inventories'    => 'مدیریت موجودی و انبار',
        'invoices'       => 'صدور و مدیریت فاکتور',
        'maintenance'    => 'مدیریت نگهداری و تعمیرات',
        'manufacturing'  => 'مدیریت ساخت و تولید',
        'partners'       => 'مدیریت طرف حساب‌های تجاری',
        'payments'       => 'مدیریت پرداخت‌ها و تراکنش‌ها',
        'plugin-manager' => 'مدیریت افزونه‌های Aureus ERP',
        'products'       => 'مدیریت کاتالوگ محصولات و تنوع‌های محصول',
        'projects'       => 'برنامه‌ریزی و مدیریت پروژه',
        'purchases'      => 'مدیریت تدارکات و سفارش‌های خرید',
        'recruitments'   => 'پیگیری متقاضیان و جذب نیرو',
        'sales'          => 'مدیریت کاریز فروش و فرصت‌ها',
        'security'       => 'نقش‌ها، مجوزها و کنترل دسترسی',
        'support'        => 'پشتیبانی مشتریان و مدیریت تیکت‌ها',
        'table-views'    => 'نماهای جدول ذخیره‌شده و قابل سفارشی‌سازی',
        'time-off'       => 'مدیریت و پیگیری مرخصی‌ها',
        'timesheets'     => 'ثبت ساعات کاری کارمندان',
        'website'        => 'وب‌سایت برای مشتریان',
    ],

];
