/**
 * Accessibility Module
 * Manages accessibility settings with localStorage persistence
 */

// Default settings
const defaultSettings = {
    fontScale: 100,        // 100-150%
    saturation: 100,       // 0-100%
    reduceMotion: false,
    highContrast: false,
    largeCursor: false,
    highlightLinks: false
};

// Storage key
const STORAGE_KEY = 'accessibility_settings';

/**
 * Get current settings from localStorage or defaults
 */
function getSettings() {
    try {
        const stored = localStorage.getItem(STORAGE_KEY);
        if (stored) {
            return { ...defaultSettings, ...JSON.parse(stored) };
        }
    } catch (e) {
        console.warn('Failed to read accessibility settings:', e);
    }
    return { ...defaultSettings };
}

/**
 * Save settings to localStorage
 */
function saveSettings(settings) {
    try {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(settings));
    } catch (e) {
        console.warn('Failed to save accessibility settings:', e);
    }
}

/**
 * Apply all settings to the DOM
 */
function applySettings(settings) {
    const html = document.documentElement;
    const body = document.body;

    // Theme (Light/Dark)
    if (settings.theme === 'dark') {
        html.classList.add('dark');
    } else {
        html.classList.remove('dark');
    }

    // Sync UI icons (if they exist)
    updateThemeIcons(settings.theme);

    // Font Scale (100-150%) - only affects text using rem/em units
    // Layout elements using px remain unchanged (intentional - per WCAG guidelines)
    // During adaptive layout phase, text will be converted to rem for proper scaling
    html.style.setProperty('--a11y-font-scale', settings.fontScale / 100);
    html.style.fontSize = `${settings.fontScale}%`;

    // Saturation (0-100%) - apply to page-content wrapper, not body
    // This preserves fixed elements like modals and accessibility panel
    const pageContent = document.getElementById('page-content');
    if (pageContent) {
        if (settings.saturation < 100) {
            pageContent.style.filter = `saturate(${settings.saturation}%)`;
        } else {
            pageContent.style.filter = '';
        }
    }

    // Reduce Motion
    if (settings.reduceMotion) {
        body.classList.add('reduce-motion');
    } else {
        body.classList.remove('reduce-motion');
    }

    // High Contrast
    if (settings.highContrast) {
        body.classList.add('high-contrast');
    } else {
        body.classList.remove('high-contrast');
    }

    // Large Cursor
    if (settings.largeCursor) {
        body.classList.add('large-cursor');
    } else {
        body.classList.remove('large-cursor');
    }

    // Highlight Links
    if (settings.highlightLinks) {
        body.classList.add('highlight-links');
    } else {
        body.classList.remove('highlight-links');
    }

    // Update UI controls if they exist
    updateControls(settings);
}

/**
 * Update UI control values to match settings
 */
function updateControls(settings) {
    const fontSlider = document.getElementById('a11y-font-slider');
    const fontValue = document.getElementById('a11y-font-value');
    const saturationSlider = document.getElementById('a11y-saturation-slider');
    const saturationValue = document.getElementById('a11y-saturation-value');
    const motionToggle = document.getElementById('a11y-motion-toggle');
    const contrastToggle = document.getElementById('a11y-contrast-toggle');
    const cursorToggle = document.getElementById('a11y-cursor-toggle');
    const linksToggle = document.getElementById('a11y-links-toggle');

    if (fontSlider) fontSlider.value = settings.fontScale;
    if (fontValue) fontValue.textContent = `${settings.fontScale}%`;
    if (saturationSlider) saturationSlider.value = settings.saturation;
    if (saturationValue) saturationValue.textContent = `${settings.saturation}%`;
    if (motionToggle) motionToggle.checked = settings.reduceMotion;
    if (contrastToggle) contrastToggle.checked = settings.highContrast;
    if (cursorToggle) cursorToggle.checked = settings.largeCursor;
    if (linksToggle) linksToggle.checked = settings.highlightLinks;
}

/**
 * Set font scale (100-150)
 */
function setFontScale(value) {
    const settings = getSettings();
    settings.fontScale = Math.min(150, Math.max(100, parseInt(value)));
    saveSettings(settings);
    applySettings(settings);
}

/**
 * Set saturation (0-100)
 */
function setSaturation(value) {
    const settings = getSettings();
    settings.saturation = Math.min(100, Math.max(0, parseInt(value)));
    saveSettings(settings);
    applySettings(settings);
}

/**
 * Toggle reduce motion
 */
function toggleReduceMotion() {
    const settings = getSettings();
    settings.reduceMotion = !settings.reduceMotion;
    saveSettings(settings);
    applySettings(settings);
}

/**
 * Toggle high contrast
 */
function toggleHighContrast() {
    const settings = getSettings();
    settings.highContrast = !settings.highContrast;
    saveSettings(settings);
    applySettings(settings);
}

/**
 * Toggle large cursor
 */
function toggleLargeCursor() {
    const settings = getSettings();
    settings.largeCursor = !settings.largeCursor;
    saveSettings(settings);
    applySettings(settings);
}

/**
 * Toggle highlight links
 */
function toggleHighlightLinks() {
    const settings = getSettings();
    settings.highlightLinks = !settings.highlightLinks;
    saveSettings(settings);
    applySettings(settings);
}

/**
 * Reset all settings to defaults
 */
function resetAccessibility() {
    saveSettings(defaultSettings);
    applySettings(defaultSettings);
}

/**
 * Toggle accessibility panel visibility
 */
function toggleAccessibilityPanel() {
    const panel = document.getElementById('accessibility-panel');
    const trigger = document.getElementById('accessibility-trigger');
    if (panel) {
        const isHidden = panel.style.display === 'none' || panel.style.display === '';
        panel.style.display = isHidden ? 'block' : 'none';
        panel.classList.toggle('hidden', !isHidden);
        // Also toggle trigger button visibility (show when panel hidden)
        if (trigger) {
            trigger.style.display = isHidden ? 'none' : 'flex';
        }
    }
}

/**
 * Initialize accessibility on page load
 */
function initAccessibility() {
    const settings = getSettings();
    applySettings(settings);
}

// Auto-initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAccessibility);
} else {
    initAccessibility();
}

/**
 * Toggle theme between light and dark
 */
function toggleTheme() {
    const settings = getSettings();
    settings.theme = settings.theme === 'dark' ? 'light' : 'dark';
    saveSettings(settings);
    applySettings(settings);
}

/**
 * Update theme icons based on current theme
 */
function updateThemeIcons(theme) {
    const icons = document.querySelectorAll('.theme-toggle-icon');
    icons.forEach(icon => {
        // Example: Toggle rotation or specific icon state if needed
        // For now, rely on CSS classes (e.g. dark:invert) which are handled by Tailwind
        // Just adding a state class for potential extra styling
        if (theme === 'dark') {
            icon.classList.add('is-dark');
        } else {
            icon.classList.remove('is-dark');
        }
    });
}

// Expose functions globally
window.accessibility = {
    setFontScale,
    setSaturation,
    toggleReduceMotion,
    toggleHighContrast,
    toggleLargeCursor,
    toggleHighlightLinks,
    resetAccessibility,
    toggleAccessibilityPanel,
    toggleTheme,
    getSettings,
    applySettings
};
