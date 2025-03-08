const dotenvExpand = require('dotenv-expand');
<<<<<<< HEAD
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));
=======
<<<<<<< HEAD
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));
=======
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

<<<<<<< HEAD
mix.js(__dirname + '/resources/assets/js/app.js', 'js/notify.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/notify.css');
=======
<<<<<<< HEAD
mix.js(__dirname + '/Resources/assets/js/app.js', 'js/notify.js')
    .sass(__dirname + '/Resources/assets/sass/app.scss', 'css/notify.css');
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/notify.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/notify.css');
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master

if (mix.inProduction()) {
    mix.version();
}
