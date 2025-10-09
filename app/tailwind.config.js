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
        sans: ['Work Sans', 'sans-serif'],
        },
        colors: {
        sena: {
            verde: '#39A900',
            verdeOscuro: '#007832',
            grisClaro: '#F6F6F6',
        },
        },
    },
    },

    plugins: [forms],
};
