const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
            content: ["./resources/**/*.blade.php"],
            theme: {
        extend: {},
     },
        plugins: [],
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
