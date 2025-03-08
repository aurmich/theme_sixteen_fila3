<<<<<<< HEAD
<<<<<<< HEAD
const dotenvExpand = require('dotenv-expand');
<<<<<<< HEAD
<<<<<<< HEAD
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));
=======
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)

=======
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(
    {
        build: {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            outDir: '../../public/build-setting',
=======
            outDir: '../../public/build-user',
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
            outDir: '../../public/build-user',
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
            outDir: '../../public/build-media',
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
            outDir: '../../public/build-user',
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
            emptyOutDir: true,
            manifest: true,
        },
        plugins: [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        laravel(
            {
                publicDirectory: '../../public',
                buildDirectory: 'build-setting',
                input: [
                __dirname + '/resources/assets/sass/app.scss',
                __dirname + '/resources/assets/js/app.js'
                ],
                refresh: true,
            }
        ),
    ],
=======
=======
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
            laravel(
                {
                    publicDirectory: '../../public',
                    buildDirectory: 'build-user',
<<<<<<< HEAD
=======
            laravel(
                {
                    publicDirectory: '../../public',
                    buildDirectory: 'build-media',
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
                    input: [
                        __dirname + '/resources/assets/sass/app.scss',
                        __dirname + '/resources/assets/js/app.js'
                    ],
                    refresh: true,
                }
            ),
        ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
    }
);
=======
    }
);

//export const paths = [
//    'Modules/$STUDLY_NAME$/resources/assets/sass/app.scss',
//    'Modules/$STUDLY_NAME$/resources/assets/js/app.js',
//];
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
    }
);
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
