<?php

return [
    'navigation' => [
        'title' => 'فیلدهای سفارشی',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'name'              => 'نام',
                    'code'              => 'کد',
                    'code-helper-text'  => 'کد باید با یک حرف یا زیرخط شروع شود و فقط می‌تواند شامل حروف، اعداد و زیرخط باشد.',
                ],
            ],

            'options' => [
                'title' => 'گزینه‌ها',

                'fields' => [
                    'add-option' => 'افزودن گزینه',
                ],
            ],

            'form-settings' => [
                'title' => 'تنظیمات فرم',

                'field-sets' => [
                    'validations' => [
                        'title' => 'اعتبارسنجی‌ها',

                        'fields' => [
                            'validation'     => 'اعتبارسنجی',
                            'field'          => 'فیلد',
                            'value'          => 'مقدار',
                            'add-validation' => 'افزودن اعتبارسنجی',
                        ],
                    ],

                    'additional-settings' => [
                        'title' => 'تنظیمات تکمیلی',

                        'fields' => [
                            'setting'     => 'تنظیم',
                            'value'       => 'مقدار',
                            'color'       => 'رنگ',
                            'add-setting' => 'افزودن تنظیم',

                            'color-options' => [
                                'danger'    => 'خطر',
                                'info'      => 'اطلاعات',
                                'primary'   => 'اصلی',
                                'secondary' => 'ثانویه',
                                'warning'   => 'هشدار',
                                'success'   => 'موفقیت',
                            ],

                            'grid-options' => [
                                'row'    => 'سطر',
                                'column' => 'ستون',
                            ],

                            'input-modes' => [
                                'text'     => 'متن',
                                'email'    => 'ایمیل',
                                'numeric'  => 'عددی',
                                'integer'  => 'عدد صحیح',
                                'password' => 'رمز عبور',
                                'tel'      => 'تلفن',
                                'url'      => 'URL',
                                'color'    => 'رنگ',
                                'none'     => 'هیچ‌کدام',
                                'decimal'  => 'اعشاری',
                                'search'   => 'جستجو',
                                'url'      => 'URL',
                            ],
                        ],
                    ],
                ],

                'validations' => [
                    'common' => [
                        'gt'                   => 'بزرگ‌تر از',
                        'gte'                  => 'بزرگ‌تر یا مساوی',
                        'lt'                   => 'کوچک‌تر از',
                        'lte'                  => 'کوچک‌تر یا مساوی',
                        'max-size'             => 'حداکثر اندازه',
                        'min-size'             => 'حداقل اندازه',
                        'multiple-of'          => 'مضربی از',
                        'nullable'             => 'قابل خالی بودن',
                        'prohibited'           => 'ممنوع',
                        'prohibited-if'        => 'ممنوع اگر',
                        'prohibited-unless'    => 'ممنوع مگر اینکه',
                        'prohibits'            => 'مانع می‌شود',
                        'required'             => 'الزامی',
                        'required-if'          => 'الزامی اگر',
                        'required-if-accepted' => 'الزامی در صورت پذیرش',
                        'required-unless'      => 'الزامی مگر اینکه',
                        'required-with'        => 'الزامی همراه با',
                        'required-with-all'    => 'الزامی همراه با همه',
                        'required-without'     => 'الزامی بدون',
                        'required-without-all' => 'الزامی بدون همه',
                        'rules'                => 'قواعد سفارشی',
                        'unique'               => 'یکتا',
                    ],

                    'text' => [
                        'alpha-dash'        => 'حروف، اعداد و خط تیره',
                        'alpha-num'         => 'حروف و اعداد',
                        'ascii'             => 'ASCII',
                        'doesnt-end-with'   => 'پایان نیابد با',
                        'doesnt-start-with' => 'شروع نشود با',
                        'ends-with'         => 'پایان یابد با',
                        'filled'            => 'پرشده',
                        'ip'                => 'IP',
                        'ipv4'              => 'IPv4',
                        'ipv6'              => 'IPv6',
                        'length'            => 'طول',
                        'mac-address'       => 'نشانی MAC',
                        'max-length'        => 'حداکثر طول',
                        'min-length'        => 'حداقل طول',
                        'regex'             => 'عبارت باقاعده',
                        'starts-with'       => 'شروع شود با',
                        'ulid'              => 'ULID',
                        'uuid'              => 'UUID',
                    ],

                    'textarea' => [
                        'filled'     => 'پرشده',
                        'max-length' => 'حداکثر طول',
                        'min-length' => 'حداقل طول',
                    ],

                    'select' => [
                        'different'  => 'متفاوت',
                        'exists'     => 'موجود باشد',
                        'in'         => 'در میان',
                        'not-in'     => 'خارج از',
                        'same'       => 'یکسان',
                    ],

                    'radio' => [],

                    'checkbox' => [
                        'accepted' => 'پذیرفته‌شده',
                        'declined' => 'ردشده',
                    ],

                    'toggle' => [
                        'accepted' => 'پذیرفته‌شده',
                        'declined' => 'ردشده',
                    ],

                    'checkbox-list' => [
                        'in'        => 'در میان',
                        'max-items' => 'حداکثر تعداد موارد',
                        'min-items' => 'حداقل تعداد موارد',
                    ],

                    'datetime' => [
                        'after'           => 'بعد از',
                        'after-or-equal'  => 'بعد از یا برابر با',
                        'before'          => 'قبل از',
                        'before-or-equal' => 'قبل از یا برابر با',
                    ],

                    'editor' => [
                        'filled'     => 'پرشده',
                        'max-length' => 'حداکثر طول',
                        'min-length' => 'حداقل طول',
                    ],

                    'markdown' => [
                        'filled'     => 'پرشده',
                        'max-length' => 'حداکثر طول',
                        'min-length' => 'حداقل طول',
                    ],

                    'color' => [
                        'hex-color' => 'رنگ هگز',
                    ],
                ],

                'settings' => [
                    'text' => [
                        'autocapitalize'    => 'بزرگ‌نویسی خودکار',
                        'autocomplete'      => 'تکمیل خودکار',
                        'autofocus'         => 'فوکوس خودکار',
                        'default'           => 'مقدار پیش‌فرض',
                        'disabled'          => 'غیرفعال',
                        'helper-text'       => 'متن راهنما',
                        'hint'              => 'نکته',
                        'hint-color'        => 'رنگ نکته',
                        'hint-icon'         => 'آیکون نکته',
                        'id'                => 'شناسه',
                        'input-mode'        => 'حالت ورودی',
                        'mask'              => 'الگوی ورودی',
                        'placeholder'       => 'متن نگهدارنده',
                        'prefix'            => 'پیشوند',
                        'prefix-icon'       => 'آیکون پیشوند',
                        'prefix-icon-color' => 'رنگ آیکون پیشوند',
                        'read-only'         => 'فقط خواندنی',
                        'step'              => 'گام',
                        'suffix'            => 'پسوند',
                        'suffix-icon'       => 'آیکون پسوند',
                        'suffix-icon-color' => 'رنگ آیکون پسوند',
                    ],

                    'textarea' => [
                        'autofocus'     => 'فوکوس خودکار',
                        'autosize'      => 'تنظیم خودکار اندازه',
                        'cols'          => 'ستون‌ها',
                        'default'       => 'مقدار پیش‌فرض',
                        'disabled'      => 'غیرفعال',
                        'helper-text'   => 'متن راهنما',
                        'hint'          => 'نکته',
                        'hint-color'    => 'رنگ نکته',
                        'hint-icon'     => 'آیکون نکته',
                        'id'            => 'شناسه',
                        'placeholder'   => 'متن نگهدارنده',
                        'read-only'     => 'فقط خواندنی',
                        'rows'          => 'سطرها',
                    ],

                    'select' => [
                        'default'                   => 'مقدار پیش‌فرض',
                        'disabled'                  => 'غیرفعال',
                        'helper-text'               => 'متن راهنما',
                        'hint'                      => 'نکته',
                        'hint-color'                => 'رنگ نکته',
                        'hint-icon'                 => 'آیکون نکته',
                        'id'                        => 'شناسه',
                        'loading-message'           => 'پیام بارگذاری',
                        'no-search-results-message' => 'پیام نبود نتیجه جستجو',
                        'options-limit'             => 'حداکثر تعداد گزینه‌ها',
                        'preload'                   => 'پیش‌بارگذاری',
                        'searchable'                => 'قابل جستجو',
                        'search-debounce'           => 'تأخیر جستجو',
                        'searching-message'         => 'پیام در حال جستجو',
                        'search-prompt'             => 'متن راهنمای جستجو',
                    ],

                    'radio' => [
                        'default'     => 'مقدار پیش‌فرض',
                        'disabled'    => 'غیرفعال',
                        'helper-text' => 'متن راهنما',
                        'hint'        => 'نکته',
                        'hint-color'  => 'رنگ نکته',
                        'hint-icon'   => 'آیکون نکته',
                        'id'          => 'شناسه',
                    ],

                    'checkbox' => [
                        'default'     => 'مقدار پیش‌فرض',
                        'disabled'    => 'غیرفعال',
                        'helper-text' => 'متن راهنما',
                        'hint'        => 'نکته',
                        'hint-color'  => 'رنگ نکته',
                        'hint-icon'   => 'آیکون نکته',
                        'id'          => 'شناسه',
                        'inline'      => 'درون‌خطی',
                    ],

                    'toggle' => [
                        'default'     => 'مقدار پیش‌فرض',
                        'disabled'    => 'غیرفعال',
                        'helper-text' => 'متن راهنما',
                        'hint'        => 'نکته',
                        'hint-color'  => 'رنگ نکته',
                        'hint-icon'   => 'آیکون نکته',
                        'id'          => 'شناسه',
                        'off-color'   => 'رنگ حالت خاموش',
                        'off-icon'    => 'آیکون حالت خاموش',
                        'on-color'    => 'رنگ حالت روشن',
                        'on-icon'     => 'آیکون حالت روشن',
                    ],

                    'checkbox-list' => [
                        'bulk-toggleable'           => 'قابل انتخاب گروهی',
                        'columns'                   => 'ستون‌ها',
                        'default'                   => 'مقدار پیش‌فرض',
                        'disabled'                  => 'غیرفعال',
                        'grid-direction'            => 'جهت چیدمان',
                        'helper-text'               => 'متن راهنما',
                        'hint'                      => 'نکته',
                        'hint-color'                => 'رنگ نکته',
                        'hint-icon'                 => 'آیکون نکته',
                        'id'                        => 'شناسه',
                        'max-items'                 => 'حداکثر تعداد موارد',
                        'min-items'                 => 'حداقل تعداد موارد',
                        'no-search-results-message' => 'پیام نبود نتیجه جستجو',
                        'searchable'                => 'قابل جستجو',
                    ],

                    'datetime' => [
                        'close-on-date-selection' => 'بستن پس از انتخاب تاریخ',
                        'default'                 => 'مقدار پیش‌فرض',
                        'disabled'                => 'غیرفعال',
                        'disabled-dates'          => 'تاریخ‌های غیرفعال',
                        'display-format'          => 'قالب نمایش',
                        'first-day-of-week'       => 'اولین روز هفته',
                        'format'                  => 'قالب',
                        'helper-text'             => 'متن راهنما',
                        'hint'                    => 'نکته',
                        'hint-color'              => 'رنگ نکته',
                        'hint-icon'               => 'آیکون نکته',
                        'hours-step'              => 'گام ساعت',
                        'id'                      => 'شناسه',
                        'locale'                  => 'زبان و منطقه',
                        'minutes-step'            => 'گام دقیقه',
                        'seconds'                 => 'ثانیه',
                        'seconds-step'            => 'گام ثانیه',
                        'timezone'                => 'منطقه زمانی',
                        'week-starts-on-monday'   => 'شروع هفته از دوشنبه',
                        'week-starts-on-sunday'   => 'شروع هفته از یکشنبه',
                    ],

                    'editor' => [
                        'default'      => 'مقدار پیش‌فرض',
                        'disabled'     => 'غیرفعال',
                        'helper-text'  => 'متن راهنما',
                        'hint'         => 'نکته',
                        'hint-color'   => 'رنگ نکته',
                        'hint-icon'    => 'آیکون نکته',
                        'id'           => 'شناسه',
                        'placeholder'  => 'متن نگهدارنده',
                        'read-only'    => 'فقط خواندنی',
                    ],

                    'markdown' => [
                        'default'      => 'مقدار پیش‌فرض',
                        'disabled'     => 'غیرفعال',
                        'helper-text'  => 'متن راهنما',
                        'hint'         => 'نکته',
                        'hint-color'   => 'رنگ نکته',
                        'hint-icon'    => 'آیکون نکته',
                        'id'           => 'شناسه',
                        'placeholder'  => 'متن نگهدارنده',
                        'read-only'    => 'فقط خواندنی',
                    ],

                    'color' => [
                        'default'     => 'مقدار پیش‌فرض',
                        'disabled'    => 'غیرفعال',
                        'helper-text' => 'متن راهنما',
                        'hint'        => 'نکته',
                        'hint-color'  => 'رنگ نکته',
                        'hint-icon'   => 'آیکون نکته',
                        'hsl'         => 'HSL',
                        'id'          => 'شناسه',
                        'rgb'         => 'RGB',
                        'rgba'        => 'RGBA',
                    ],

                    'file' => [
                        'accepted-file-types'                   => 'انواع فایل مجاز',
                        'append-files'                          => 'افزودن به فایل‌های موجود',
                        'deletable'                             => 'قابل حذف',
                        'directory'                             => 'پوشه',
                        'downloadable'                          => 'قابل دانلود',
                        'fetch-file-information'                => 'دریافت اطلاعات فایل',
                        'file-attachments-directory'            => 'پوشه پیوست‌ها',
                        'file-attachments-visibility'           => 'سطح دسترسی پیوست‌ها',
                        'image'                                 => 'تصویر',
                        'image-crop-aspect-ratio'               => 'نسبت ابعاد برش تصویر',
                        'image-editor'                          => 'ویرایشگر تصویر',
                        'image-editor-aspect-ratios'            => 'نسبت‌های ابعاد ویرایشگر تصویر',
                        'image-editor-empty-fill-color'         => 'رنگ پرکننده فضای خالی ویرایشگر تصویر',
                        'image-editor-mode'                     => 'حالت ویرایشگر تصویر',
                        'image-preview-height'                  => 'ارتفاع پیش‌نمایش تصویر',
                        'image-resize-mode'                     => 'حالت تغییر اندازه تصویر',
                        'image-resize-target-height'            => 'ارتفاع هدف تغییر اندازه تصویر',
                        'image-resize-target-width'             => 'عرض هدف تغییر اندازه تصویر',
                        'loading-indicator-position'            => 'موقعیت نشانگر بارگذاری',
                        'move-files'                            => 'انتقال فایل‌ها',
                        'openable'                              => 'قابل باز کردن',
                        'orient-images-from-exif'               => 'چرخش تصاویر بر اساس EXIF',
                        'panel-aspect-ratio'                    => 'نسبت ابعاد پنل',
                        'panel-layout'                          => 'چیدمان پنل',
                        'previewable'                           => 'قابل پیش‌نمایش',
                        'remove-uploaded-file-button-position'  => 'موقعیت دکمه حذف فایل بارگذاری‌شده',
                        'reorderable'                           => 'قابل مرتب‌سازی مجدد',
                        'store-files'                           => 'ذخیره فایل‌ها',
                        'upload-button-position'                => 'موقعیت دکمه بارگذاری',
                        'uploading-message'                     => 'پیام در حال بارگذاری',
                        'upload-progress-indicator-position'    => 'موقعیت نشانگر پیشرفت بارگذاری',
                        'visibility'                            => 'سطح دسترسی',
                    ],
                ],
            ],

            'table-settings' => [
                'title' => 'تنظیمات جدول',

                'fields' => [
                    'use-in-table'  => 'استفاده در جدول',
                    'setting'       => 'تنظیم',
                    'value'         => 'مقدار',
                    'color'         => 'رنگ',
                    'alignment'     => 'تراز',
                    'font-weight'   => 'ضخامت قلم',
                    'icon-position' => 'موقعیت آیکون',
                    'size'          => 'اندازه',
                    'add-setting'   => 'افزودن تنظیم',

                    'color-options' => [
                        'danger'    => 'خطر',
                        'info'      => 'اطلاعات',
                        'primary'   => 'اصلی',
                        'secondary' => 'ثانویه',
                        'warning'   => 'هشدار',
                        'success'   => 'موفقیت',
                    ],

                    'alignment-options' => [
                        'start'   => 'ابتدا',
                        'left'    => 'چپ',
                        'center'  => 'وسط',
                        'end'     => 'انتها',
                        'right'   => 'راست',
                        'justify' => 'تراز دوطرفه',
                        'between' => 'فاصله در میان',
                    ],

                    'font-weight-options' => [
                        'thin'        => 'بسیار نازک',
                        'extra-light' => 'خیلی نازک',
                        'light'       => 'نازک',
                        'normal'      => 'معمولی',
                        'medium'      => 'متوسط',
                        'semi-bold'   => 'نیمه‌ضخیم',
                        'bold'        => 'ضخیم',
                        'extra-bold'  => 'خیلی ضخیم',
                        'black'       => 'فوق ضخیم',
                    ],

                    'icon-position-options' => [
                        'before'  => 'قبل از',
                        'after'   => 'بعد از',
                    ],

                    'size-options' => [
                        'extra-small' => 'خیلی کوچک',
                        'small'       => 'کوچک',
                        'medium'      => 'متوسط',
                        'large'       => 'بزرگ',
                    ],
                ],

                'settings' => [
                    'common' => [
                        'align-end'              => 'تراز از انتها',
                        'alignment'              => 'تراز',
                        'align-start'            => 'تراز از ابتدا',
                        'badge'                  => 'نشان',
                        'boolean'                => 'بولی',
                        'color'                  => 'رنگ',
                        'copyable'               => 'قابل کپی',
                        'copy-message'           => 'پیام کپی',
                        'copy-message-duration'  => 'مدت نمایش پیام کپی',
                        'default'                => 'پیش‌فرض',
                        'filterable'             => 'قابل فیلتر',
                        'groupable'              => 'قابل گروه‌بندی',
                        'grow'                   => 'پر کردن فضای خالی',
                        'icon'                   => 'آیکون',
                        'icon-color'             => 'رنگ آیکون',
                        'icon-position'          => 'موقعیت آیکون',
                        'label'                  => 'برچسب',
                        'limit'                  => 'محدودیت',
                        'line-clamp'             => 'محدودیت تعداد خطوط',
                        'money'                  => 'مبلغ',
                        'placeholder'            => 'متن نگهدارنده',
                        'prefix'                 => 'پیشوند',
                        'searchable'             => 'قابل جستجو',
                        'size'                   => 'اندازه',
                        'sortable'               => 'قابل مرتب‌سازی',
                        'suffix'                 => 'پسوند',
                        'toggleable'             => 'قابل نمایش/پنهان‌سازی',
                        'tooltip'                => 'راهنمای ابزار',
                        'vertical-alignment'     => 'تراز عمودی',
                        'vertically-align-start' => 'تراز عمودی از ابتدا',
                        'weight'                 => 'ضخامت',
                        'width'                  => 'عرض',
                        'words'                  => 'کلمات',
                        'wrap-header'            => 'شکستن متن سرستون',
                        'column-span'            => 'تعداد ستون اشغالی',
                        'helper-text'            => 'متن راهنما',
                        'hint'                   => 'نکته',
                        'hint-color'             => 'رنگ نکته',
                        'hint-icon'              => 'آیکون نکته',
                    ],

                    'datetime' => [
                        'date'              => 'تاریخ',
                        'date-time'         => 'تاریخ و زمان',
                        'date-time-tooltip' => 'راهنمای ابزار تاریخ و زمان',
                        'since'             => 'زمان سپری‌شده',
                    ],
                ],
            ],

            'infolist-settings' => [
                'title' => 'تنظیمات نمای جزئیات',

                'fields' => [
                    'setting'       => 'تنظیم',
                    'value'         => 'مقدار',
                    'color'         => 'رنگ',
                    'font-weight'   => 'ضخامت قلم',
                    'icon-position' => 'موقعیت آیکون',
                    'size'          => 'اندازه',
                    'add-setting'   => 'افزودن تنظیم',

                    'color-options' => [
                        'danger'    => 'خطر',
                        'info'      => 'اطلاعات',
                        'primary'   => 'اصلی',
                        'secondary' => 'ثانویه',
                        'warning'   => 'هشدار',
                        'success'   => 'موفقیت',
                    ],

                    'font-weight-options' => [
                        'thin'        => 'بسیار نازک',
                        'extra-light' => 'خیلی نازک',
                        'light'       => 'نازک',
                        'normal'      => 'معمولی',
                        'medium'      => 'متوسط',
                        'semi-bold'   => 'نیمه‌ضخیم',
                        'bold'        => 'ضخیم',
                        'extra-bold'  => 'خیلی ضخیم',
                        'black'       => 'فوق ضخیم',
                    ],

                    'icon-position-options' => [
                        'before'  => 'قبل از',
                        'after'   => 'بعد از',
                    ],

                    'size-options' => [
                        'extra-small' => 'خیلی کوچک',
                        'small'       => 'کوچک',
                        'medium'      => 'متوسط',
                        'large'       => 'بزرگ',
                    ],
                ],

                'settings' => [
                    'common' => [
                        'align-end'              => 'تراز از انتها',
                        'alignment'              => 'تراز',
                        'align-start'            => 'تراز از ابتدا',
                        'badge'                  => 'نشان',
                        'boolean'                => 'بولی',
                        'color'                  => 'رنگ',
                        'copyable'               => 'قابل کپی',
                        'copy-message'           => 'پیام کپی',
                        'copy-message-duration'  => 'مدت نمایش پیام کپی',
                        'default'                => 'پیش‌فرض',
                        'filterable'             => 'قابل فیلتر',
                        'groupable'              => 'قابل گروه‌بندی',
                        'grow'                   => 'پر کردن فضای خالی',
                        'icon'                   => 'آیکون',
                        'icon-color'             => 'رنگ آیکون',
                        'icon-position'          => 'موقعیت آیکون',
                        'label'                  => 'برچسب',
                        'limit'                  => 'محدودیت',
                        'line-clamp'             => 'محدودیت تعداد خطوط',
                        'money'                  => 'مبلغ',
                        'placeholder'            => 'متن نگهدارنده',
                        'prefix'                 => 'پیشوند',
                        'searchable'             => 'قابل جستجو',
                        'size'                   => 'اندازه',
                        'sortable'               => 'قابل مرتب‌سازی',
                        'suffix'                 => 'پسوند',
                        'toggleable'             => 'قابل نمایش/پنهان‌سازی',
                        'tooltip'                => 'راهنمای ابزار',
                        'vertical-alignment'     => 'تراز عمودی',
                        'vertically-align-start' => 'تراز عمودی از ابتدا',
                        'weight'                 => 'ضخامت',
                        'width'                  => 'عرض',
                        'words'                  => 'کلمات',
                        'wrap-header'            => 'شکستن متن سرستون',
                        'column-span'            => 'تعداد ستون اشغالی',
                        'helper-text'            => 'متن راهنما',
                        'hint'                   => 'نکته',
                        'hint-color'             => 'رنگ نکته',
                        'hint-icon'              => 'آیکون نکته',
                    ],

                    'datetime' => [
                        'date'              => 'تاریخ',
                        'date-time'         => 'تاریخ و زمان',
                        'date-time-tooltip' => 'راهنمای ابزار تاریخ و زمان',
                        'since'             => 'زمان سپری‌شده',
                    ],

                    'checkbox-list' => [
                        'separator'                => 'جداکننده',
                        'list-with-line-breaks'    => 'فهرست با شکست خط',
                        'bulleted'                 => 'نشانه‌دار',
                        'limit-list'               => 'محدودیت فهرست',
                        'expandable-limited-list'  => 'فهرست محدود قابل گسترش',
                    ],

                    'select' => [
                        'separator'                => 'جداکننده',
                        'list-with-line-breaks'    => 'فهرست با شکست خط',
                        'bulleted'                 => 'نشانه‌دار',
                        'limit-list'               => 'محدودیت فهرست',
                        'expandable-limited-list'  => 'فهرست محدود قابل گسترش',
                    ],

                    'checkbox' => [
                        'boolean'     => 'بولی',
                        'false-icon'  => 'آیکون حالت نادرست',
                        'true-icon'   => 'آیکون حالت درست',
                        'true-color'  => 'رنگ حالت درست',
                        'false-color' => 'رنگ حالت نادرست',
                    ],

                    'toggle' => [
                        'boolean'     => 'بولی',
                        'false-icon'  => 'آیکون حالت نادرست',
                        'true-icon'   => 'آیکون حالت درست',
                        'true-color'  => 'رنگ حالت درست',
                        'false-color' => 'رنگ حالت نادرست',
                    ],
                ],
            ],

            'settings' => [
                'title' => 'تنظیمات',

                'fields' => [
                    'type'           => 'نوع',
                    'input-type'     => 'نوع ورودی',
                    'is-multiselect' => 'چندانتخابی',
                    'sort-order'     => 'ترتیب نمایش',

                    'type-options' => [
                        'text'          => 'ورودی متنی',
                        'textarea'      => 'متن چندخطی',
                        'select'        => 'فهرست انتخابی',
                        'checkbox'      => 'چک‌باکس',
                        'radio'         => 'دکمه رادیویی',
                        'toggle'        => 'کلید دوحالته',
                        'checkbox-list' => 'فهرست چک‌باکس',
                        'datetime'      => 'انتخابگر تاریخ و زمان',
                        'editor'        => 'ویرایشگر متن غنی',
                        'markdown'      => 'ویرایشگر Markdown',
                        'color'         => 'انتخابگر رنگ',
                    ],

                    'input-type-options' => [
                        'text'     => 'متن',
                        'email'    => 'ایمیل',
                        'numeric'  => 'عددی',
                        'integer'  => 'عدد صحیح',
                        'password' => 'رمز عبور',
                        'tel'      => 'تلفن',
                        'url'      => 'URL',
                        'color'    => 'رنگ',
                    ],
                ],
            ],

            'resource' => [
                'title' => 'منبع',

                'fields' => [
                    'plugin'   => 'افزونه',
                    'resource' => 'منبع',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'       => 'کد',
            'name'       => 'نام',
            'type'       => 'نوع',
            'resource'   => 'منبع',
            'created-at' => 'تاریخ ایجاد',
        ],

        'groups' => [
        ],

        'filters' => [
            'type'     => 'نوع',
            'resource' => 'منبع',

            'type-options' => [
                'text'          => 'ورودی متنی',
                'textarea'      => 'متن چندخطی',
                'select'        => 'فهرست انتخابی',
                'checkbox'      => 'چک‌باکس',
                'radio'         => 'دکمه رادیویی',
                'toggle'        => 'کلید دوحالته',
                'checkbox-list' => 'فهرست چک‌باکس',
                'datetime'      => 'انتخابگر تاریخ و زمان',
                'editor'        => 'ویرایشگر متن غنی',
                'markdown'      => 'ویرایشگر Markdown',
                'color'         => 'انتخابگر رنگ',
            ],
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'فیلد بازیابی شد',
                    'body'  => 'فیلد با موفقیت بازیابی شد.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'فیلد حذف شد',
                    'body'  => 'فیلد با موفقیت حذف شد.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'فیلد برای همیشه حذف شد',
                    'body'  => 'فیلد با موفقیت برای همیشه حذف شد.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'فیلدها بازیابی شدند',
                    'body'  => 'فیلدها با موفقیت بازیابی شدند.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'فیلدها حذف شدند',
                    'body'  => 'فیلدها با موفقیت حذف شدند.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'فیلدها برای همیشه حذف شدند',
                    'body'  => 'فیلدها با موفقیت برای همیشه حذف شدند.',
                ],
            ],
        ],
    ],
];
