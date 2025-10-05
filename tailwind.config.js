import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './resources/js/**/*.js',
        './resources/scss/**/*.scss',
        './resources/css/**/*.css',
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
        },
    },

    plugins: [forms],
};
