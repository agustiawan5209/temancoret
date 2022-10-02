const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'banger': 'Bangers'
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('daisyui')],
    daisyui: {
        themes: [{
            mytheme: {

                "primary": "#44b0ea",

                "secondary": "#06d8c3",

                "accent": "#fbbf24",

                "neutral": "#1c1917",

                "base-100": "#FCFCFD",

                "info": "#5A9EE2",

                "success": "#22c55e",

                "warning": "#F7D940",

                "error": "#f43f5e",
                "white": '#ffffff'
            },
        }, ],
    },
};
