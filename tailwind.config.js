const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    purge: [
        './resources/**/*.blade.php',
        './resources/**/*,js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                inter: ["Inter", 'Nunito']
            },
            colors: {
                cgray: "#9EA1B1",
                ccream: "#FED585",
                cred1: "#FE724C",
                cred2: "#E02525",
                cgreen1: "#A3D517",
                cgreen2: "#00DC09",
                cyellow: "#F3C23C",
                clightblue: "#F4F7FCBF",
                cblue: "#2264E5",
                cdarkblue: "#464F60",
                clightblue2: "#F9FAFC",
                cyellow2: "#FFC529",
                cgreen3: "#039300",
                cgray2: "#F0F1FA",
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
