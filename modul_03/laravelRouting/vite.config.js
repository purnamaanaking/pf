import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, process.cwd(), '');
    return  {
        server: {
            hmr: {
            host: env.HOMESTEAD_HOST,
            },
            host: env.HOMESTEAD_HOST,
            watch: {
            usePolling: true,
            },
        },
        plugins: [
            laravel({
                input: [
                    'resources/sass/app.scss',
                    'resources/js/app.js',
                ],
                refresh: true,
            }),
        ],
    }
});
