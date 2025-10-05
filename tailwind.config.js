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

    safelist: [
        'w-[1215px]',
        'h-[765px]',
        'w-[496px]',
        'h-[496px]',
        'w-[200px]',
        'h-[200px]',
        'text-[72px]',
        'leading-[85.36px]',
        'mt-[152px]',
        'mb-[300px]',
        'top-[269px]',
        'left-[39px]',
        'top-[41px]',
        'w-[59px]',
        'h-[59px]',
        'right-[5px]',
        'w-[30px]',
        'h-[30px]',
        'top-[143px]',
        'w-72',
        'top-[253px]',
        'w-[260px]',
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
