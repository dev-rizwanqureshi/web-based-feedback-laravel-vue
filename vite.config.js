import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';
import i18n from 'laravel-vue-i18n/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/Assets/scss/style.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        vue(),
        i18n(),
    ],
    resolve: {
        alias: {
            ziggy: path.resolve("vendor/tightenco/ziggy/dist/vue.es"),
        },
    },
    optimizeDeps: {
        include: [
            'fast-deep-equal',
        ],
    },
    build: {
        chunkSizeWarningLimit: 100000000
    }
});
