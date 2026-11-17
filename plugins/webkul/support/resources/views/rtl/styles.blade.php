@if (in_array(app()->getLocale(), $rtlLocales))
    @if (app()->getLocale() === 'fa')
        {{-- Persian: Vazirmatn is served from this app (public/fonts), so it also works where foreign font CDNs are slow or blocked. --}}
        <link rel="preload" href="{{ asset('fonts/vazirmatn/Vazirmatn-Variable.woff2') }}" as="font" type="font/woff2" crossorigin>

        <style>
            @font-face {
                font-family: 'Vazirmatn';
                src: url('{{ asset('fonts/vazirmatn/Vazirmatn-Variable.woff2') }}') format('woff2');
                font-weight: 100 900;
                font-style: normal;
                font-display: swap;
            }

            body, .fi-body {
                font-family: 'Vazirmatn', 'Noto Sans Arabic', Tahoma, sans-serif !important;
            }
        </style>
    @else
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">

        <style>
            body, .fi-body {
                font-family: 'Cairo', 'Noto Sans Arabic', sans-serif !important;
            }
        </style>
    @endif

    <style>
        [dir="rtl"] .fi-topbar { direction: rtl; }
        [dir="rtl"] .fi-sidebar { direction: rtl; }
        [dir="rtl"] .fi-main { direction: rtl; }
        [dir="rtl"] .fi-header { direction: rtl; }
        [dir="rtl"] .fi-simple-main { direction: rtl; }

        [dir="rtl"] .fi-fo-field-wrp { text-align: right; }
        [dir="rtl"] .fi-fo-field-wrp label { text-align: right; }
        [dir="rtl"] .fi-input-wrp { direction: rtl; }
        [dir="rtl"] input:not([type="email"]):not([type="url"]):not([type="tel"]),
        [dir="rtl"] textarea {
            text-align: right;
            direction: rtl;
        }
        [dir="rtl"] input[type="email"],
        [dir="rtl"] input[type="url"],
        [dir="rtl"] input[type="tel"] {
            direction: ltr;
            text-align: left;
        }

        [dir="rtl"] .fi-btn { flex-direction: row-reverse; }
        [dir="rtl"] .fi-btn > span + svg,
        [dir="rtl"] .fi-btn > svg + span { margin-left: 0; margin-right: 0.5rem; }

        [dir="rtl"] .fi-simple-page { direction: rtl; text-align: right; }
        [dir="rtl"] .fi-simple-header { text-align: center; }
        [dir="rtl"] .fi-simple-main form { direction: rtl; }

        [dir="rtl"] .fi-link { direction: rtl; }
        [dir="rtl"] .fi-ac { direction: rtl; }

        [dir="rtl"] .fi-dropdown-list { text-align: right; }

        [dir="rtl"] .fi-topbar-nav { direction: rtl; }
        [dir="rtl"] nav { direction: rtl; }

        [dir="rtl"] .fi-section { direction: rtl; }
        [dir="rtl"] .fi-section-header { text-align: right; }

        [dir="rtl"] .fi-ta { direction: rtl; }
        [dir="rtl"] .fi-ta-header-cell { text-align: right; }
        [dir="rtl"] .fi-ta-cell { text-align: right; }
    </style>
@endif
