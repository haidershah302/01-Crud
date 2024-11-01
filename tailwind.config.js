import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                mono: ['Audiowide', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'xs': '432px'
            }
        },
    },
    plugins: [require('daisyui')],
    daisyui: {
        themes: [
            'light', 'dark',
            {
                light: {

                    "primary": "#ec4899",

                    "primary-content": "#fce7f3",

                    "secondary": "#e879f9",

                    "secondary-content": "#fae8ff",

                    "accent": "#f59e0b",

                    "accent-content": "#fef3c7",

                    "neutral": "#111827",

                    "neutral-content": "#f3f4f6",

                    "base-100": "#ffffff",

                    "base-200": "#f5f5f5",

                    "base-300": "#e7e6e6",

                    "base-content": "#1c1917",

                    "info": "#67e8f9",

                    "info-content": "#cffafe",

                    "success": "#00f190",

                    "success-content": "#d1fae5",

                    "warning": "#facc15",

                    "warning-content": "#fef9c3",

                    "error": "#ef4444",

                    "error-content": "#fee2e2",
                },
                dark: {
                    "primary": "#f43f5e",

                    "primary-content": "#ffe4e6",

                    "secondary": "#d946ef",

                    "secondary-content": "#fae8ff",

                    "accent": "#f59e0b",

                    "accent-content": "#fef3c7",

                    "neutral": "#44403c",

                    "neutral-content": "#f5f5f4",

                    "base-100": "#1c1917",

                    "base-200": "#292524",

                    "base-300": "#44403c",

                    "base-content": "#f5f5f4",

                    "info": "#22d3ee",

                    "info-content": "#cffafe",

                    "success": "#34d399",

                    "success-content": "#d1fae5",

                    "warning": "#facc15",

                    "warning-content": "#fef3c7",

                    "error": "#ef4444",

                    "error-content": "#fee2e2",
                }
            }
        ],
        darkTheme: "dark",
        styled: true,
    },
};
