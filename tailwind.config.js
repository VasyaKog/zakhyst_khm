import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
                fontFamily: {
                    'montserrat': ['Montserrat', ...defaultTheme.fontFamily.sans],
                    'unbounded': ['Unbounded', ...defaultTheme.fontFamily.sans],
                    'sans': ['Montserrat', ...defaultTheme.fontFamily.sans],
                },
            colors: {
                'veteran-blue': '#3971E2', // Blue color from your design
            },
            spacing: {
                '50': '50px',
                '90': '90px',
                '120': '120px',
                '200': '200px',
                '260': '260px',
                '320': '320px',
                '325': '325px',
                '375': '375px',
                '519': '519px',
                '669': '669px',
                '700': '700px',
            }
        },
    },

    plugins: [forms],
};
