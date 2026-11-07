<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}">
    <link rel="mask-icon" href="{{ asset('/favicon.ico') }}" color="#ff2d20">
    {{--  Meta description  --}}
    <meta name="description" content="Gorgeous UI components for Livewire powered by daisyUI and Tailwind">

    {{-- Open Graph / Facebook --}}
    {{-- <meta property="og:type" content="website">
    <meta property="og:url" content="https://mary-ui.com/">
    <meta property="og:title" content="maryUI">
    <meta property="og:description" content="Gorgeous UI components for Livewire powered by daisyUI and Tailwind.">
    <meta property="og:image" content="https://mary-ui.com/mary-banner.png?new=2025-03-14"> --}}

    {{-- Twitter --}}
    {{-- <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mary-ui.com/">
    <meta property="twitter:title" content="maryUI">
    <meta property="twitter:description" content="Gorgeous UI components for Livewire powered by daisyUI and Tailwind.">
    <meta property="twitter:image" content="https://mary-ui.com/mary-banner.png?new=2025-03-14"> --}}

    {{-- Flatpickr --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://unpkg.com/flatpickr/dist/plugins/monthSelect/index.js"></script>
    <link href="https://unpkg.com/flatpickr/dist/plugins/monthSelect/style.css" rel="stylesheet">
    <script src="https://npmcdn.com/flatpickr/dist/l10n/pt.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script> --}}

    {{-- Vanilla Calendar --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro@3.1.0/index.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro@3.1.0/styles/index.min.css" rel="stylesheet"> --}}

    {{-- DIFF2HTML --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/xcode.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/diff2html@3.4.48/bundles/css/diff2html.min.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/diff2html@3.4.48/bundles/js/diff2html-ui.min.js"></script> --}}

    {{-- Chart.js  --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script> --}}

    {{-- Cropper.js --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css" /> --}}

    {{-- Sortable.js --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.1/Sortable.min.js"></script> --}}

    {{-- PhotoSwipe --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/photoswipe@5.4.3/dist/umd/photoswipe.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/photoswipe@5.4.3/dist/umd/photoswipe-lightbox.umd.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/photoswipe@5.4.3/dist/photoswipe.min.css" rel="stylesheet"> --}}

    {{-- TinyMCE --}}
    {{-- <script src="/tinymce/tinymce.min.js" referrerpolicy="origin"></script> --}}

    {{-- Markdown --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
    <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script> --}}

    {{--  Currency  --}}
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/robsontenorio/mary@2.7.0/libs/currency.js"></script> --}}

    {{-- Signature Pad  --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.2.0/dist/signature_pad.umd.min.js"></script> --}}

    {{-- Ace Editor --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.39.1/ace.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.39.1/ext-language_tools.min.js"></script> --}}

    {{-- Algolia docsearch --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <link rel="preconnect" href="https://0AWOCS02I6-dsn.algolia.net" crossorigin /> --}}

    {{-- Umami Analytics --}}
    {{-- @if (app()->isProduction())
        <script defer src="https://analytics.robsontenorio.com/script.js" data-website-id="9dac1324-beb1-49e3-8a3f-8528fdc91df3"></script>
    @endif --}}

    {{-- Google tag (gtag.js) --}}
    {{-- @if (app()->isProduction())
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-NDC4ZLZ6D2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'G-NDC4ZLZ6D2');
        </script>
    @endif --}}
    @vite(['resources/css/app.css', 'resources/js/app.ts'])
    @stack('bellis-head')
</head>

<body class="min-h-screen font-sans antialiased transition-colors bg-base-100 relative">
    <x-navbar />
    {{ $slot }}
    <x-scroll-to-top />
    {{-- Toast --}}
    <c-toast />
    @stack('bellis')
    @livewireScriptConfig
</body>

</html>
