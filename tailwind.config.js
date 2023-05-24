/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1440px",
        },
        fontFamily: {
            sans: ["Raleway", "sans-serif"],
        },
        extend: {
            colors: {
                deepYellow: "hsla(48, 98%, 48%, 1)",
                lightYellow: "hsla(48, 98%, 48%, 0.4)",
                lighterYellow: "hsla(48, 98%, 48%, 0.1)",
                lightBrown: "hsla(0, 0%, 38%, 1)",
                lightGreen: "hsla(120, 100%, 34%, 1)",
                DeepGreen: "hsla(145, 100%, 18%, 1)",
                lighterGreen: "hsla(127, 10%, 70%, 0.2)",
                lightestGreen: "hsla(127, 10%, 70%, 0.15)",
                DeepRed: "hsla(2, 100%, 65%, 1)",
                lighterBlack: "hsla(0, 0%, 0%, 0.5)",
                lighterTeal: "hsla(145, 100%, 18%, 0.05)",
                lowTeal: "hsla(127, 10%, 70%, 0.3)",
            },
        },
    },
    plugins: [require("tw-elements/dist/plugin.cjs")],
    darkMode: "class",
};
