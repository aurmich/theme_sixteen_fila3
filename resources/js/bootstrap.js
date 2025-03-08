<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    //window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    //window.L = window.leaflet = leaflet = require('leaflet');
    //require('leaflet-extra-markers');
    //require('leaflet.markercluster');
    //require('leaflet.locatecontrol');
    //require('leaflet.locatecontrol/src/L.Control.Locate.js');
    //require('leaflet.locatecontrol/dist/L.Control.Locate.min.js');
    //require('leaflet-sidebar/src/L.Control.Sidebar.js');
    //require('leaflet-sidebar-v2');
    //require('leaflet.Permalink/leaflet.permalink.js');

    //require('opening_hours');

    require('bootstrap');
} catch (e) {
}


var pub_res = '.';
//require(pub_res + '/leaflet.permalink.min.js');
//require(pub_res+'/leaflet.extra-markers.min.js');
//require(pub_res+'/leaflet.markercluster.js');
//require(pub_res+'/leaflet-sidebar.js');
//require(pub_res+'/L.Control.Locate.min.js');
//require(pub_res+'/opening_hours+deps.min.js');
//var json=$.getJSON(base_url_lang + '/restaurant?responseType=geoJson').done(function(response){
//console.log('da bootstrap');
//console.log(response);
//    var json=response;
//    require(pub_res+'/xot-markers.js')(json);
//    return json;
//});
//require(pub_res+'/popupcontent.js'); //Uncaught ReferenceError: popupcontent is not defined
//require(pub_res + '/xot-markers.js');

>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
/**
=======
import _ from 'lodash';
window._ = _;

/**
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
<<<<<<< HEAD
<<<<<<< HEAD
=======
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
=======
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
<<<<<<< HEAD
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
=======
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
<<<<<<< HEAD
=======
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
=======
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
