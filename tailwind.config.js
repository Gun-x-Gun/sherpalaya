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
    //     fontFamily: {
    //         sans: ['Graphik', 'sans-serif'],
    //         serif: ['Merriweather', 'serif'],
    //     },
    // },
    // themes: [
    //     {
    //         mytheme: {
    //             primary: "#0d0d0d",
    //             secondary: "#2F4F4F",
    //             accent: "#37cdbe",
    //             neutral: "#3d4451",
    //             "base-100": "#ffffff"
    //         },
    //         fontFamily: {
    //             sans: ['Graphik', 'sans-serif'],
    //         },
    //     },


    // ]

    flyonui: {
        themes: [
          {
            mytheme: {
              primary: "#00008B",
              secondary: "#00008B",
              accent: "#A9A9A9",
            //   neutral: "#3d4451",
            //   "base-100": "#ffffff",
            },
          },
        ],
      },
      theme: {
        extend: {},
      },


};

