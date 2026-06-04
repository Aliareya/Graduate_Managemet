import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#2563EB', // Blue-600
                secondary: '#F3F4F6', // Gray-100
                success: '#10B981', // Emerald-500
                danger: '#EF4444', // Red-500
                warning: '#F59E0B', // Amber-500
            }
        },
    },

    // plugins: [forms],
};
