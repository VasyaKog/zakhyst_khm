<!doctype html>
<html lang="uk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ВЕТЕРАНСЬКИЙ ПРОСТІР')</title>
    @vite(['resources/js/web.js'])
</head>

<body class="bg-veteran-blue flex flex-col min-h-screen">
    <!-- Content wrapper for saturation filter (fixed elements outside this div) -->
    <div id="page-content" class="flex flex-col min-h-screen">
        @include('partials.header-blue')

        <main class="flex-grow flex flex-col">
            <div class="w-full flex-grow flex flex-col px-4 min-[1250px]:px-[50px]">
                @yield('content')
            </div>
        </main>

        @include('partials.footer-blue')
    </div>

    <!-- Fixed elements outside page-content (not affected by saturation filter) -->
    <!-- Donation Modal -->
    @include('components.donation-modal')
    @include('components.contact-modal')

    <!-- Accessibility Panel (Desktop floating) -->
    @include('partials.accessibility-panel')

    <script>
        // Toggle mobile accessibility panel visibility
        function toggleMobileAccessibility() {
            const panel = document.getElementById('mobile-accessibility-panel');
            if (panel) {
                panel.classList.toggle('hidden');
                if (!panel.classList.contains('hidden')) {
                    syncMobileAccessibilityUI();
                }
            }
        }

        // Sync mobile UI controls with current accessibility settings
        function syncMobileAccessibilityUI() {
            if (typeof accessibility === 'undefined') return;
            const settings = accessibility.getSettings();

            const fontSlider = document.getElementById('mobile-a11y-font-slider');
            const fontValue = document.getElementById('mobile-a11y-font-value');
            const satSlider = document.getElementById('mobile-a11y-saturation-slider');
            const satValue = document.getElementById('mobile-a11y-saturation-value');

            if (fontSlider) fontSlider.value = settings.fontScale;
            if (fontValue) fontValue.textContent = settings.fontScale + '%';
            if (satSlider) satSlider.value = settings.saturation;
            if (satValue) satValue.textContent = settings.saturation + '%';

            const motionCb = document.getElementById('mobile-a11y-motion');
            const contrastCb = document.getElementById('mobile-a11y-contrast');
            const cursorCb = document.getElementById('mobile-a11y-cursor');
            const linksCb = document.getElementById('mobile-a11y-links');

            if (motionCb) motionCb.checked = settings.reduceMotion;
            if (contrastCb) contrastCb.checked = settings.highContrast;
            if (cursorCb) cursorCb.checked = settings.largeCursor;
            if (linksCb) linksCb.checked = settings.highlightLinks;
        }
    </script>
</body>

</html>