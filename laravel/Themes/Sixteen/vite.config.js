//const dotenvExpand = require('dotenv-expand');
//dotenvExpand(
//	require('dotenv').config({ path: '../../.env' /*, debug: true*/ }),
//);

import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin'



export default defineConfig({
    build: {
        //outDir: '../../../public_html/build/ewall',
<<<<<<< HEAD
<<<<<<< HEAD
        outDir: './resources/dist',
=======
<<<<<<< HEAD
        outDir: './Resources/dist',
=======
        outDir: './resources/dist',
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
        outDir: './resources/dist',
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        emptyOutDir: false,
        manifest: 'manifest.json',
        //rollupOptions: {
        //    output: {
        //        entryFileNames: `assets/[name].js`,
        //        chunkFileNames: `assets/[name].js`,
        //        assetFileNames: `assets/[name].[ext]`
        //    }
        //}
    },
    ssr: {
        noExternal: ['chart.js/**']
    },
    plugins: [
        laravel({
            publicDirectory: '../../../public_html/',
            // buildDirectory: 'assets/',
            input: [
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
                //__dirname + '/Resources/sass/app.scss',
                //__dirname + '/Resources/scss/app-mix.scss',
                __dirname + '/Resources/css/app.css',
                __dirname + '/Resources/js/app.js',
                //__dirname + '/Resources/css/filament/theme.css'
=======
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                //__dirname + '/resources/sass/app.scss',
                //__dirname + '/resources/scss/app-mix.scss',
                __dirname + '/resources/css/app.css',
                __dirname + '/resources/js/app.js',
                // Aggiungiamo i CSS di Filament
                //__dirname + '/vendor/filament/**/*.css',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    resolve: {
        alias: {
            '@': '/resources',
        },
    },
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
});


/*
import collectModuleAssetsPaths from './../../vite-module-loader.js';

async function getConfig() {
    const paths = [
        'resources/css/app.css',
        'resources/js/app.js',
    ];
    const allPaths = await collectModuleAssetsPaths(paths, 'Modules');

    return defineConfig({
        plugins: [
            laravel({
                input: allPaths,
                refresh: true,
            })
        ]
    });
}

export default getConfig();
*/

/*
<<<<<<< HEAD
<<<<<<< HEAD
var $from = './resources/dist';
=======
<<<<<<< HEAD
var $from = './Resources/dist';
=======
var $from = './resources/dist';
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
var $from = './resources/dist';
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
var $to = '../../../public_html/themes/Five/dist';
console.log('from :' + $from);
console.log('to :' + $to);

//mix.copyDirectory($from, $to);
viteStaticCopy({
    targets: [
        {
            src: $from,
            dest: $to
        }
    ]
})
*/
