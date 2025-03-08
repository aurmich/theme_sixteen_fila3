<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
mix.js(__dirname + '/resources/assets/js/app.js', 'js/xot.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/xot.css');
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/blog.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/blog.css');
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/job.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/job.css');
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/blog.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/blog.css');
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/notify.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/notify.css');
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/tenant.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/tenant.css');
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/blog.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/blog.css');
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/blog.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/blog.css');
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/cms.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/cms.css');
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/rating.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/rating.css');
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/lang.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/lang.css');
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)

if (mix.inProduction()) {
    mix.version();
}
=======
const mix = require('laravel-mix');

mix.options({
    purifyCss: false,
 });

 mix.autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'], // more than one
        tether: ['window.Tether', 'Tether'],
        'tether-shepherd': ['Shepherd'],
        'popper.js/dist/popper.js': ['Popper'],
        sweetalert2:['Swal'],
        'magnific-popup':['magnificPopup'],
        moment: 'moment', // only one
        axios: 'axios',
        leaflet: ['leaflet','L']
    });


// require('laravel-mix-merge-manifest');
//mix.setPublicPath('../../public').mergeManifest();

 var src=__dirname + '/Resources';
 var dest= 'resources/dist'

 mix.js(src+'/js/app.js', dest+'/js/geo.js')
    .sass(src + '/sass/app.scss', dest+'/css/geo.css')
    .setResourceRoot('../')
    .setPublicPath(dest);

 mix.vue({ version: 3 });

 mix.autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'], // more than one
        moment: 'moment' // only one
        //tether: ['Tether', 'windows.Tether'],
    });

 mix.extract([
    'axios',
    'vue',
    'tether',
    'lodash',
    'popper.js',
    'jquery',
    'sweetalert2',
    'moment',
    'nouislider',
    'bootstrap',
    'video.js',
    'videojs',
 ]);


 if (mix.inProduction()) {
     mix.version();
 }
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
