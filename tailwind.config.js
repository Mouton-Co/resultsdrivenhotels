import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/**/*.blade.php",
        "./resources/**/**/**/*.blade.php",
        "./resources/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                nunito: ['Nunito', ...defaultTheme.fontFamily.sans],
                merriweather: ['Merriweather', ...defaultTheme.fontFamily.serif],
                akshar: ['Akshar', ...defaultTheme.fontFamily.serif],
                abel: ['Abel', ...defaultTheme.fontFamily.sans],
                viaoda: ['Viaoda Libre', ...defaultTheme.fontFamily.sans],
                baskerville: ['Baskerville', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                gold: '#c59d5f',
                white: '#d9d9d9',
                ...defaultTheme.colors,
            }
        },
        screens: {
            'smaller-than-730': { 'min': '0px', 'max': '730px' },
            'smaller-than-1060': { 'min': '0px', 'max': '1060px' },
            'smaller-than-1450': { 'min': '0px', 'max': '1450px' },
            ...defaultTheme.screens,
        },
    },
};
