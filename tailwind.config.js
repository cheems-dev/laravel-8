module.exports = {
    purge: [],
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "media", // or 'media' or 'class'
    theme: {
        fontFamily: {
            sans: ["Poppins", "ui-sans-serif", "system-ui"],
        },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
