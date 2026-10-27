import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Paleta corporativa: ámbar como relleno (texto oscuro encima),
                // ink para texto ámbar sobre fondo claro, night para velos sobre foto.
                mih: {
                    amber: '#fbbf24',
                    ink: '#92400e',
                    night: '#0b1a2e',
                },
            },
        },
    },
    plugins: [],
};
