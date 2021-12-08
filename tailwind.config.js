const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    mode: "jit",
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        scale: {
            '105': '-1'
        },
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "primary-bg": "#283618",
                "primary-bg-alt": "#606c38",
                "secondary-bg": "#bc6c25",
                "secondary-bg-alt": "#f5d1a9",
                "primary-text": "#dda15e",
                "primary-text-alt": "#dc2f02",
                "secondary-text": "#fefae0",
                "orange-ripe": "#FF8840",
                "orange-ripe-light": "#F59963",
                "main-bg": "#fedfa2",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
