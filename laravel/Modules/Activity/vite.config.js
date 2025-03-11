const dotenvExpand = require('dotenv-expand');
<<<<<<< HEAD
<<<<<<< HEAD
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));
=======
<<<<<<< HEAD
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));
=======
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(
    {
        build: {
            outDir: '../../public/build-activity',
            emptyOutDir: true,
            manifest: true,
        },
        plugins: [
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        laravel(
            {
                publicDirectory: '../../public',
                buildDirectory: 'build-activity',
                input: [
                __dirname + '/Resources/assets/sass/app.scss',
                __dirname + '/Resources/assets/js/app.js'
                ],
                refresh: true,
            }
        ),
    ],
=======
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
            laravel(
                {
                    publicDirectory: '../../public',
                    buildDirectory: 'build-activity',
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
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    }
);
