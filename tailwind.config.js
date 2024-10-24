import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        
    ],

    theme: {
        extend: {
            keyframes: {
                blink: {
                  '0%, 100%': { opacity: 0 },
                  '50%': { opacity: 1 },
                },
              },
              animation: {
                blink: 'blink 1.4s infinite both',
              },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
        // 'ageno':'#330066',
        // 'ageno-2':'#4458AC',
        // 'ageno-3':'#53287E'
        'ageno':'rgb(59 130 246)',
        // 'ageno':'#673de6',
        'ageno-2':'rgb(37 99 235)',
        // 'ageno': '#8B4513',
        // 'ageno-2': '#CC7722',
        'ageno-dark': 'rgb(23 37 84)',
        'ageno-3':'rgb(29 78 216)',
        'ageno-deep-green': '#006400',
        'ageno-deep-brown': '#8B4513',
        'ageno-deep-ochre': '#CC7722'

            }
        },
    },

    plugins: [forms,require('tailwind-scrollbar')],
};
