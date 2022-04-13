module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ["Inter", "sans-serif"],
        },
        extend: {
            colors: {
                primary: "#005F6C",
                secondary: "#FF5B24",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
