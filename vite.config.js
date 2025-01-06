import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    build: {
        manifest: true,  // This option generates the manifest.json file
        outDir: 'public/build',  // Make sure this matches your target directory
      }
}




);





