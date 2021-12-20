const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    mode: "jit",
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    content: [    "./resources/**/*.blade.php",    "./resources/**/*.js",    "./resources/**/*.vue",  ],
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

                'primary': {
                        100: "#d4d7d1",
                        200: "#a9afa3",
                        300: "#7e8674",
                        400: "#535e46",
                        500: "#283618",
                        600: "#202b13",
                        700: "#18200e",
                        800: "#10160a",
                        900: "#080b05"
                },
                'primary-alt' :{
                        100: "#dfe2d7",
                        200: "#bfc4af",
                        300: "#a0a788",
                        400: "#808960",
                        500: "#606c38",
                        600: "#4d562d",
                        700: "#3a4122",
                        800: "#262b16",
                        900: "#13160b"
                },
                'secondary': {
                        100: "#f8ecdf",
                        200: "#f1d9bf",
                        300: "#ebc79e",
                        400: "#e4b47e",
                        500: "#dda15e",
                        600: "#b1814b",
                        700: "#856138",
                        800: "#584026",
                        900: "#2c2013"
                },
                'secondary-alt': {
                        100: "#ffe7d9",
                        200: "#ffcfb3",
                        300: "#ffb88c",
                        400: "#ffa066",
                        500: "#ff8840",
                        600: "#cc6d33",
                        700: "#995226",
                        800: "#66361a",
                        900: "#331b0d"
                },

            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
