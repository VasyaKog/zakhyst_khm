{{-- Accessibility Panel - Desktop: Floating bottom-left --}}
<div id="accessibility-panel"
    class="fixed bottom-4 left-4 z-[100] w-[320px] bg-white dark:bg-zinc-900 rounded-2xl shadow-2xl border border-gray-200 dark:border-zinc-700 overflow-hidden hidden transition-colors"
    style="display: none;">
    {{-- Header --}}
    <div class="bg-veteran-blue text-white px-5 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <x-icons.accessibility class="w-6 h-6" />
            <span class="font-bold text-lg">{{__('Accessability')}}</span>
        </div>
        <button onclick="accessibility.toggleAccessibilityPanel()" class="hover:opacity-80 transition-opacity">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 6L6 18M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Content --}}
    <div class="p-5 space-y-5 max-h-[60vh] overflow-y-auto">
        {{-- Font Size --}}
        <div class="space-y-2">
            <div class="flex justify-between items-center">
                <label class="font-semibold text-sm text-black dark:text-white">{{__('Text Size')}}</label>
                <span id="a11y-font-value" class="text-sm font-bold text-veteran-blue">100%</span>
            </div>
            <input type="range" id="a11y-font-slider" min="100" max="120" value="100" step="5"
                class="w-full h-2 bg-gray-200 dark:bg-zinc-600 rounded-lg appearance-none cursor-pointer accent-veteran-blue"
                oninput="accessibility.setFontScale(this.value)">
            <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400">
                <span>100%</span>
                <span>120%</span>
            </div>
        </div>

        {{-- Saturation --}}
        <div class="space-y-2">
            <div class="flex justify-between items-center">
                <label class="font-semibold text-sm text-black dark:text-white">{{__('Saturation')}}</label>
                <span id="a11y-saturation-value" class="text-sm font-bold text-veteran-blue">100%</span>
            </div>
            <input type="range" id="a11y-saturation-slider" min="0" max="100" value="100" step="10"
                class="w-full h-2 bg-gray-200 dark:bg-zinc-600 rounded-lg appearance-none cursor-pointer accent-veteran-blue"
                oninput="accessibility.setSaturation(this.value)">
            <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400">
                <span>0%</span>
                <span>100%</span>
            </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-gray-200 dark:border-zinc-700"></div>

        {{-- Toggle Options --}}
        <div class="space-y-4">
            {{-- Reduce Motion --}}
            <label class="flex items-center justify-between cursor-pointer group">
                <span
                    class="font-semibold text-sm text-black dark:text-white group-hover:text-veteran-blue transition-colors">
                    {{__('Disable Animations')}}
                </span>
                <div class="relative">
                    <input type="checkbox" id="a11y-motion-toggle" class="sr-only peer"
                        onchange="accessibility.toggleReduceMotion()">
                    <div
                        class="w-11 h-6 bg-gray-200 dark:bg-zinc-600 rounded-full peer peer-checked:bg-veteran-blue transition-colors">
                    </div>
                    <div
                        class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform peer-checked:translate-x-5">
                    </div>
                </div>
            </label>

            {{-- High Contrast --}}
            <label class="flex items-center justify-between cursor-pointer group">
                <span
                    class="font-semibold text-sm text-black dark:text-white group-hover:text-veteran-blue transition-colors">
                    {{__('High Contrast')}}
                </span>
                <div class="relative">
                    <input type="checkbox" id="a11y-contrast-toggle" class="sr-only peer"
                        onchange="accessibility.toggleHighContrast()">
                    <div
                        class="w-11 h-6 bg-gray-200 dark:bg-zinc-600 rounded-full peer peer-checked:bg-veteran-blue transition-colors">
                    </div>
                    <div
                        class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform peer-checked:translate-x-5">
                    </div>
                </div>
            </label>

            {{-- Large Cursor --}}
            <label class="flex items-center justify-between cursor-pointer group">
                <span
                    class="font-semibold text-sm text-black dark:text-white group-hover:text-veteran-blue transition-colors">
                    {{__('Large Cursor')}}
                </span>
                <div class="relative">
                    <input type="checkbox" id="a11y-cursor-toggle" class="sr-only peer"
                        onchange="accessibility.toggleLargeCursor()">
                    <div
                        class="w-11 h-6 bg-gray-200 dark:bg-zinc-600 rounded-full peer peer-checked:bg-veteran-blue transition-colors">
                    </div>
                    <div
                        class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform peer-checked:translate-x-5">
                    </div>
                </div>
            </label>

            {{-- Highlight Links --}}
            <label class="flex items-center justify-between cursor-pointer group">
                <span
                    class="font-semibold text-sm text-black dark:text-white group-hover:text-veteran-blue transition-colors">
                    {{__('Highlight Links')}}
                </span>
                <div class="relative">
                    <input type="checkbox" id="a11y-links-toggle" class="sr-only peer"
                        onchange="accessibility.toggleHighlightLinks()">
                    <div
                        class="w-11 h-6 bg-gray-200 dark:bg-zinc-600 rounded-full peer peer-checked:bg-veteran-blue transition-colors">
                    </div>
                    <div
                        class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform peer-checked:translate-x-5">
                    </div>
                </div>
            </label>
        </div>

        {{-- Reset Button --}}
        <button onclick="accessibility.resetAccessibility()"
            class="w-full py-3 border-2 border-gray-300 dark:border-zinc-600 text-gray-700 dark:text-white font-bold text-sm rounded-full hover:border-veteran-blue hover:text-veteran-blue dark:hover:text-veteran-blue transition-colors">
            {{__('Reset')}}
        </button>
    </div>
</div>

{{-- Floating Trigger Button - Desktop only (>=1400px) --}}
<button id="accessibility-trigger" onclick="accessibility.toggleAccessibilityPanel()"
    class="fixed bottom-4 left-4 z-[99] w-14 h-14 bg-veteran-blue text-white rounded-full shadow-lg hover:bg-blue-700 transition-all items-center justify-center group hidden min-[1400px]:flex"
    title="{{__('Accessability')}}">
    <x-icons.accessibility class="w-7 h-7 group-hover:scale-110 transition-transform" />
</button>