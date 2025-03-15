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
            padding:{'98':'98px'},
            fontSize: {
                h1sm:'35px',
                h1lg: '56px',
                h3:'35px',
                h3sm:'24px',
                bouttom:'18px'
            },
            colors: {  primry:'#2F3238' ,
                primry1:'#51565E',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins','sans-serif'],
            },
            screens:{'xm':'320px','sm':'480px','md':'768px','lg':'1024px','xl':'1280px','2xl':'1536px'},
        },
    },
    plugins: [],
};
