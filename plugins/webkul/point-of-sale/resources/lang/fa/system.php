<?php

return [
    'unexpected-error' => 'خطایی در سرور رخ داد. دوباره تلاش کنید و در صورت تکرار، موضوع را به مدیر اطلاع دهید.',

    'products' => [
        'tip'      => 'انعام',
        'discount' => 'تخفیف',
    ],

    'picking' => [
        'operation-type-missing' => 'برای سفارش :order نوع عملیات انبار پیکربندی نشده است؛ بنابراین هیچ کالایی جابه‌جا نشد.',
    ],

    'config' => [
        'terminal-journal' => 'پایانه فروش',
    ],

    'order-workflow' => [
        'customer' => [
            'required-by-terminal'       => 'در این پایانه فروش، انتخاب مشتری برای هر سفارش الزامی است.',
            'required-to-invoice'        => 'پیش از صدور فاکتور برای این سفارش، یک مشتری انتخاب کنید.',
            'required-to-ship'           => 'برای ارسال این سفارش در آینده، ابتدا یک مشتری انتخاب کنید.',
            'shipping-address-required'  => 'برای ارسال این سفارش در آینده، مشتری انتخاب‌شده باید نشانی تحویل داشته باشد.',
            'required-by-payment-method' => 'روش پرداخت انتخاب‌شده به مشتری نیاز دارد.',
        ],

        'mark-paid' => [
            'already-settled'          => 'سفارش :order قبلاً تسویه شده است.',
            'insufficient-payment'     => 'سفارش :order به‌طور کامل پرداخت نشده است.',
            'cash-method-required'     => 'برای سفارش :order نمی‌توان مبلغی بیش از بدهی دریافت کرد، زیرا برای این پایانه روش پرداخت نقدی پیکربندی نشده است.',
        ],

        'cancel' => [
            'not-draft' => 'سفارش :order دیگر قابل لغو نیست.',
        ],

        'split' => [
            'not-draft' => 'سفارش :order دیگر قابل تقسیم نیست.',
        ],

        'tip' => [
            'not-enabled' => 'ابتدا انعام را فعال کرده و یک محصول انعام برای پایانه فروش تعیین کنید.',
        ],

        'refund' => [
            'not-refundable'    => 'سفارش :order قابل استرداد نیست.',
            'exceeds-sold'      => 'تعداد مرجوعی :product از تعداد فروخته‌شده بیشتر است.',
            'no-payment-method' => 'پایانه :order روش پرداختی برای استرداد وجه ندارد.',
            'nothing-to-refund' => 'حداقل یک ردیف برای استرداد انتخاب کنید.',
        ],
    ],

    'global-discount' => [
        'not-enabled' => 'ابتدا تخفیف کلی را فعال کرده و یک محصول تخفیف برای پایانه فروش تعیین کنید.',
        'not-draft'   => 'برای سفارش :order دیگر نمی‌توان تخفیف اعمال کرد.',
    ],

    'terminal-product-creator' => [
        'name-required'    => 'برای محصول یک نام وارد کنید.',
        'defaults-missing' => 'پیش از ایجاد محصول در صندوق، یک واحد اندازه‌گیری و یک دسته‌بندی محصول تعریف کنید.',
    ],

    'payment-method' => [
        'in-open-session' => 'پیش از حذف این روش پرداخت، نوبت‌های کاری باز :sessions را ببندید.',
    ],

    'payment-method-provisioner' => [
        'cash'         => 'نقد',
        'cash-journal' => 'صندوق',
    ],

    'order-sync' => [
        'product-missing'         => 'یکی از محصولات این سفارش دیگر وجود ندارد. آن را حذف کرده و دوباره تلاش کنید.',
        'customer-missing'        => 'مشتری این سفارش دیگر وجود ندارد. مشتری دیگری انتخاب کنید.',
        'table-missing'           => 'میز این سفارش دیگر وجود ندارد. سفارش را به میز دیگری منتقل کنید.',
        'price-list-missing'      => 'لیست قیمت این سفارش دیگر وجود ندارد.',
        'fiscal-position-missing' => 'وضعیت مالیاتی این سفارش دیگر وجود ندارد.',
        'payment-method-missing'  => 'یکی از روش‌های پرداخت این سفارش دیگر وجود ندارد.',
        'refunded-order-missing'  => 'سفارشی که استرداد می‌شود دیگر پیدا نمی‌شود.',
        'customer-email-invalid'  => 'نشانی ایمیل مشتری معتبر نیست.',
        'discount-invalid'        => 'تخفیف ردیف باید بین 0 تا 100% باشد.',
    ],

    'order-processor' => [
        'price-locked'           => 'تغییر قیمت :product به تأیید مدیر نیاز دارد.',
        'line-discount-disabled' => 'تخفیف ردیف در این پایانه فروش غیرفعال است.',
        'foreign-order'          => 'این سفارش متعلق به صندوق دیگری است و در اینجا قابل تغییر نیست.',
        'foreign-line'           => 'یکی از اقلام این سفارش متعلق به سفارش دیگری است. صندوق را دوباره بارگذاری کرده و مجدداً تلاش کنید.',
    ],

    'floor-plan' => [
        'tables-in-use' => 'میزهای :tables هنوز سفارش باز دارند. ابتدا آن‌ها را پرداخت، آزاد یا منتقل کنید.',
    ],

    'session-preflight' => [
        'draft-orders' => 'پیش از بستن نوبت کاری، این سفارش‌ها را پرداخت یا لغو کنید: :orders.',

        'journal' => [
            'missing'      => 'برای پایانه فروش یک دفتر روزنامه فروش تعیین کنید.',
            'invalid-type' => 'دفتر روزنامه پایانه فروش باید از نوع فروش باشد.',
        ],

        'invoice-journal' => [
            'missing'      => 'برای پایانه فروش یک دفتر روزنامه فاکتور تعیین کنید.',
            'invalid-type' => 'دفتر روزنامه فاکتور باید از نوع فروش باشد.',
        ],

        'receivable-account' => [
            'missing'          => 'برای پایانه فروش یک حساب دریافتنی تعیین کنید.',
            'invalid-type'     => 'حساب دریافتنی پایانه فروش باید از نوع دریافتنی باشد.',
            'not-reconcilable' => 'حساب دریافتنی پایانه فروش باید قابلیت تطبیق داشته باشد.',
            'deprecated'       => 'حساب دریافتنی پایانه فروش منسوخ شده است.',
        ],

        'payment-methods' => [
            'missing'               => 'حداقل یک روش پرداخت به پایانه فروش اضافه کنید.',
            'pay-later-unsupported' => 'روش پرداخت :method دفتر روزنامه ندارد و حساب مشتری هنوز پشتیبانی نمی‌شود.',
            'journal-missing'       => 'برای روش پرداخت :method یک دفتر روزنامه تعیین کنید.',
            'journal-company'       => 'دفتر روزنامه :method متعلق به شرکت دیگری است.',
            'receivable-missing'    => 'برای :method یک حساب دریافتنی تعیین کنید.',
        ],

        'cash-journal' => [
            'multiple'             => 'برای هر پایانه فروش فقط یک روش پرداخت نقدی پشتیبانی می‌شود.',
            'profit-loss-missing'  => 'برای دفتر روزنامه صندوق :journal حساب‌های سود و زیان را تعیین کنید.',
        ],

        'taxes' => [
            'account-missing' => 'مالیات :tax یک ردیف توزیع بدون حساب دارد.',
        ],

        'global-discount' => [
            'product-missing' => 'برای استفاده از تخفیف کلی، یک محصول تخفیف برای پایانه فروش تعیین کنید.',
        ],

        'cogs' => [
            'stock-output-missing' => 'پیش از فعال‌سازی بهای تمام‌شده کالای فروش‌رفته، یک حساب خروج موجودی تعیین کنید.',
        ],
    ],

    'invoice-payer' => [
        'entry-reference' => 'پرداخت فاکتور سفارش :order (:invoice) با :method',
    ],

    'session-closer' => [
        'entry-reference'                 => 'نوبت کاری صندوق :session',
        'payment-difference-reference'    => 'مغایرت :method در :session',
        'cogs-reference'                  => 'بهای تمام‌شده کالای فروش‌رفته :session',
        'sales-line'                      => 'فروش پایانه فروش',
        'tax-line'                        => 'مالیات پایانه فروش',
        'receivable-line'                 => 'دریافتنی پایانه فروش',
        'invoice-receivable-line'         => 'دریافتنی فاکتور پایانه فروش',
        'cash-line'                       => 'وجه نقد پایانه فروش',
        'cash-difference-line'            => 'مغایرت وجه نقد هنگام بستن',
        'cogs-line'                       => 'بهای تمام‌شده کالای فروش‌رفته',
        'stock-output-line'               => 'خروج موجودی',
        'balancing-line'                  => 'مغایرت هنگام بستن',
        'rounding-line'                   => 'گرد کردن وجه نقد',
        'unbalanced'                      => 'سند بستن به مبلغ :delta تراز نیست. برای ثبت آن یک حساب تراز انتخاب کنید.',
        'income-account-missing'          => 'حساب درآمدی برای :product پیدا نشد.',
        'expense-account-missing'         => 'حساب هزینه‌ای برای :product پیدا نشد.',
        'cash-account-missing'            => 'دفتر روزنامه صندوق حساب پیش‌فرض ندارد.',
        'cash-difference-account-missing' => 'دفتر روزنامه صندوق حساب سود یا زیان ندارد.',
        'stock-output-missing'            => 'برای پایانه فروش یک حساب خروج موجودی تعیین کنید.',
        'line-account-missing'            => 'یکی از ردیف‌های سند بستن حساب ندارد.',
        'rounding-account-missing'        => 'گرد کردن وجه نقد حساب سود یا زیان ندارد.',
        'difference-exceeded'             => 'حداکثر مغایرت مجاز :amount است. برای پذیرش مغایرت بستن با مدیر خود تماس بگیرید.',
    ],

    'invoicer' => [
        'customer-required' => 'برای صدور فاکتور سفارش :order ابتدا باید مشتری مشخص شود.',
        'journal-missing'   => 'برای پایانه فروش یک دفتر روزنامه فاکتور تعیین کنید.',
        'session-closed'    => 'سفارش :order متعلق به یک نوبت کاری بسته‌شده است و قبلاً در سند بستن لحاظ شده است.',
    ],

    'session-workflow' => [
        'open' => [
            'already-open' => 'برای :config از قبل یک نوبت کاری باز است.',
            'inactive'     => 'صندوق :config غیرفعال است و نمی‌توان آن را باز کرد.',
        ],

        'assert-open' => [
            'not-open' => 'نوبت کاری :session باز نیست.',
        ],

        'assert-state' => [
            'invalid' => 'نوبت کاری :session نمی‌تواند از وضعیت :state تغییر کند.',
        ],

        'discard' => [
            'not-discardable' => 'برای نوبت کاری :name فعالیت ثبت شده است و باید بسته شود، نه حذف.',
        ],

        'cash-movement' => [
            'invalid-amount' => 'مبلغ گردش وجه نقد باید بزرگ‌تر از صفر باشد.',
        ],
    ],
];
