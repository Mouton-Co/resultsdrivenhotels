import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/js/homepage-header.js',
                'resources/js/dropdowns.js',
                'resources/js/cards-carousel.js',
                'resources/js/our-services.js',
            ],
            refresh: true,
        }),
    ],
});
