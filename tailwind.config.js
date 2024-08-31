/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/css/**/*.css",
    ],
    theme: {
        extend: {
            fontFamily: {
                Playfair: ["Playfair"],
                Permanent: ["Permanent Marker"],
                Josefin: ["Josefin Sans"],
            },
        },
    },
    plugins: [],
};
