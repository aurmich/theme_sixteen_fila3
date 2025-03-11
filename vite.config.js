<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

=======
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(
    {
        build: {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            outDir: '../../public/build-user',
=======
            outDir: '../../public/build-media',
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
            outDir: '../../public/build-user',
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
            outDir: '../../public/build-ui',
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
            emptyOutDir: true,
            manifest: true,
        },
        plugins: [
            laravel(
                {
                    publicDirectory: '../../public',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    buildDirectory: 'build-user',
=======
                    buildDirectory: 'build-media',
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
                    buildDirectory: 'build-user',
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
                    buildDirectory: 'build-ui',
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
                    input: [
                        __dirname + '/resources/assets/sass/app.scss',
                        __dirname + '/resources/assets/js/app.js'
                    ],
                    refresh: true,
                }
            ),
        ],
    }
);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

//export const paths = [
//    'Modules/$STUDLY_NAME$/resources/assets/sass/app.scss',
//    'Modules/$STUDLY_NAME$/resources/assets/js/app.js',
//];
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
