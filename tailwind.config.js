import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

// import daisyui from "daisyui"
// plugins: [forms, daisyui],

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    daisyui: {
        themes: ['light'] //to add only light theme [unelse it will add all themes
    }
,
    plugins: [forms, require("daisyui"), require('tailwind-scrollbar-hide')],
};