/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins"],
            },
            container: {
                padding: {
                    DEFAULT: "2rem",
                    sm: "2rem",
                    lg: "4rem",
                    xl: "6rem",
                    "2xl": "8rem",
                    center: true,
                },
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
