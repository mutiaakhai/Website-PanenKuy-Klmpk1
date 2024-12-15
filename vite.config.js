import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/welcome.css',
                'resources/css/home.css',
                'resources/css/guest.css',
                'resources/css/register.css',
                'resources/css/setting.css',
                'resources/css/berhasil.css',
                'resources/css/katalog.css',
                'resources/css/kategori.css',
                'resources/css/user.css',
                'resources/css/help.css',
                'resources/css/editprofile.css',
                'resources/css/viewprofile.css'

                
            ],
            refresh: true,
        }),
    ],
});
