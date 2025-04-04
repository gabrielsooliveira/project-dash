import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources',
            'ziggy': path.resolve('vendor/tightenco/ziggy'),
        },
    },
    server: {
        host: 'project-dash.test',
        port: 5174,
        hmr: {
            host: 'project-dash.test',
        },
    }
});
