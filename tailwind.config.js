import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */

const { addDynamicIconSelectors } = require("@iconify/tailwind")

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flyonui/dist/js/*.js',
        "./src/*.html",

    ],
    plugins: [
        require('flyonui'),
        require('flyonui/plugin'),
        addDynamicIconSelectors()
    ],
    // theme: {
    //     extend: {
    //         fontFamily: {
    //             sans: ['Figtree', ...defaultTheme.fontFamily.sans],

    //         },
    //     },
    // },
    flyonui: {
        themes: ["light", "dark", "gourmet", "corporate", "luxury", "soft"]
      }

};

