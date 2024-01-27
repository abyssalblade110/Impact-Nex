import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app-frontend.css',
        'resources/js/app-frontend.js',
        'resources/sass/app-backend.scss',
        'resources/js/app-backend.js',
      ],
      refresh: [
        'app/View/Components/**',
        'lang/**',
        'resources/lang/**',
        'resources/views/**',
        'resources/routes/**',
        'routes/**',
        'Modules/**/Resources/lang/**',
        'Modules/**/Resources/views/**/*.blade.php',
      ],
    }),
  ],
  resolve: {
    alias: {
      // Use a tilde (~) prefix for aliases pointing to node_modules.
      // This is a convention used by Vite.
      '~coreui': path.resolve(__dirname, 'node_modules/@coreui/coreui'),
    },
  },
});
