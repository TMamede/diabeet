import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './storage/framework/views/*.php',

        // blades do Laravel (paginação etc.)
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',

        // se você usa componentes Livewire em PHP
        './app/Http/Livewire/**/*.php',

        // (opcional) se usa pacotes com blades
        './vendor/livewire/livewire/src/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [forms],
};
