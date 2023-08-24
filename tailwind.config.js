import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */

export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],


    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat'], 
            },
            colors: {
                primary: '#8404F4',
                secondary: '#FCF304',
                bgcolor: '#F7F1F1',
                // ...
              },
              spacing: {
                '25' : '25rem',
              },
        },
    },
    

    plugins: [
        require('@tailwindcss/forms'),
        require('daisyui'),
    ],
};
