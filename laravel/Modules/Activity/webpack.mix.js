const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
mix.js(__dirname + '/Resources/assets/js/app.js', 'js/blog.js')
    .sass(__dirname + '/Resources/assets/sass/app.scss', 'css/blog.css');

if (mix.inProduction()) {
    mix.version();
}
=======
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
mix.js(__dirname + '/resources/assets/js/app.js', 'js/blog.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/blog.css');

if (mix.inProduction()) {
    mix.version();
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
