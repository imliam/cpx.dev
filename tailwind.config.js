/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                // Sampled from the cpx banner
                orange: {
                    300: "#ffb182",
                    400: "#ff9455",
                    500: "#ff7826",
                    600: "#e85f0c",
                    700: "#b84a09",
                },
                ink: {
                    950: "#111112",
                    900: "#19191a",
                    800: "#212121",
                    700: "#2c2c2d",
                    600: "#484849",
                    500: "#6b6b6c",
                    400: "#8f8f90",
                    300: "#b4b4b5",
                    200: "#d6d6d7",
                    100: "#ebebec",
                },
            },
            backgroundImage: {
                grid: "linear-gradient(to right, rgba(255, 255, 255, 0.045) 1px, transparent 1px), linear-gradient(to bottom, rgba(255, 255, 255, 0.045) 1px, transparent 1px)",
            },
            backgroundSize: {
                "grid-64": "64px 64px",
            },
        },
    },
    plugins: [],
};
