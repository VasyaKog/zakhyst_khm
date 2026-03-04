<!doctype html>
<html lang="uk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    <x-seo-meta :title="View::getSection('seo_title', View::getSection('title', ''))"
        :description="View::getSection('seo_description', '')" :image="View::getSection('seo_image')" />


    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    @vite(['resources/js/web.js'])

    <script>
        // Check for saved theme preference or system preference
        try {
            const settings = JSON.parse(localStorage.getItem('accessibility_settings'));
            if (settings && settings.theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else if (settings && settings.theme === 'light') {
                document.documentElement.classList.remove('dark');
            } else if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            }
        } catch (e) {
            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            }
        }
    </script>
</head>

<body class="bg-white dark:bg-zinc-900">
    <!-- Content wrapper for saturation filter (fixed elements outside this div) -->
    <div id="page-content">
        @include('partials.header')

        <main class="min-h-screen">
            <div class="px-4 md:px-[50px]">
                @yield('content')
            </div>
        </main>

        @hasSection('footer')
            @yield('footer')
        @else
            @include('partials.footer-basic')
        @endif
    </div>

    <!-- Fixed Support/Contact Button -->
    <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
        class="fixed bottom-4 right-4 lg:bottom-6 lg:right-6 w-20 h-20 pt-3 cursor-pointer hover:scale-110 transition-all duration-200 z-50"
        onclick="openContactModal()">

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

            // Sync sliders
            const fontSlider = document.getElementById('mobile-a11y-font-slider');
            const fontValue = document.getElementById('mobile-a11y-font-value');
            const satSlider = document.getElementById('mobile-a11y-saturation-slider');
            const satValue = document.getElementById('mobile-a11y-saturation-value');

            if (fontSlider) fontSlider.value = settings.fontScale;
            if (fontValue) fontValue.textContent = settings.fontScale + '%';
            if (satSlider) satSlider.value = settings.saturation;
            if (satValue) satValue.textContent = settings.saturation + '%';

            // Sync checkboxes
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