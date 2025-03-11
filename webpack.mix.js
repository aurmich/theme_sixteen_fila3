<<<<<<< HEAD
<<<<<<< HEAD
=======
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

<<<<<<< HEAD
<<<<<<< HEAD
mix.js(__dirname + '/resources/assets/js/app.js', 'js/xot.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/xot.css');
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/job.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/job.css');
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/blog.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/blog.css');
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)

if (mix.inProduction()) {
    mix.version();
}
