~~~bash
git clone --recurse-submodules https://github.com/aurmich/base_fixcity_fila3.git  base_fixcityam_fila3
cd base_fixcityam_fila3
~~~


~~~bash
git remote -v
~~~
must return 
~~~bash
origin  https://github.com/aurmich/base_fixcity_fila3.git (fetch)
origin  https://github.com/aurmich/base_fixcity_fila3.git (push)
~~~

~~~bash
git submodule foreach git remote -v
~~~
must return 
~~~bash
Entering 'bashscripts'
origin  https://github.com/aurmich/bashscripts_fila3.git (fetch)
origin  https://github.com/aurmich/bashscripts_fila3.git (push)
Entering 'laravel/Modules/AI'
origin  https://github.com/aurmich/module_ai_fila3.git (fetch)
origin  https://github.com/aurmich/module_ai_fila3.git (push)
Entering 'laravel/Modules/Activity'
origin  https://github.com/aurmich/module_activity_fila3.git (fetch)
origin  https://github.com/aurmich/module_activity_fila3.git (push)
Entering 'laravel/Modules/Blog'
origin  https://github.com/aurmich/module_blog_fila3.git (fetch)
origin  https://github.com/aurmich/module_blog_fila3.git (push)
Entering 'laravel/Modules/Cms'
origin  https://github.com/aurmich/module_cms_fila3.git (fetch)
origin  https://github.com/aurmich/module_cms_fila3.git (push)
Entering 'laravel/Modules/Comment'
origin  https://github.com/aurmich/module_comment_fila3.git (fetch)
origin  https://github.com/aurmich/module_comment_fila3.git (push)
Entering 'laravel/Modules/Fixcity'
origin  https://github.com/aurmich/module_fixcity_fila3.git (fetch)
origin  https://github.com/aurmich/module_fixcity_fila3.git (push)
Entering 'laravel/Modules/Gdpr'
origin  https://github.com/aurmich/module_gdpr_fila3.git (fetch)
origin  https://github.com/aurmich/module_gdpr_fila3.git (push)
Entering 'laravel/Modules/Geo'
origin  https://github.com/aurmich/module_geo_fila3.git (fetch)
origin  https://github.com/aurmich/module_geo_fila3.git (push)
Entering 'laravel/Modules/Job'
origin  https://github.com/aurmich/module_job_fila3.git (fetch)
origin  https://github.com/aurmich/module_job_fila3.git (push)
Entering 'laravel/Modules/Lang'
origin  https://github.com/aurmich/module_lang_fila3.git (fetch)
origin  https://github.com/aurmich/module_lang_fila3.git (push)
Entering 'laravel/Modules/Media'
origin  https://github.com/aurmich/module_media_fila3.git (fetch)
origin  https://github.com/aurmich/module_media_fila3.git (push)
Entering 'laravel/Modules/Notify'
origin  https://github.com/aurmich/module_notify_fila3.git (fetch)
origin  https://github.com/aurmich/module_notify_fila3.git (push)
Entering 'laravel/Modules/Rating'
origin  https://github.com/aurmich/module_rating_fila3.git (fetch)
origin  https://github.com/aurmich/module_rating_fila3.git (push)
Entering 'laravel/Modules/Seo'
origin  https://github.com/aurmich/module_seo_fila3.git (fetch)
origin  https://github.com/aurmich/module_seo_fila3.git (push)
Entering 'laravel/Modules/Setting'
origin  https://github.com/aurmich/module_setting_fila3.git (fetch)
origin  https://github.com/aurmich/module_setting_fila3.git (push)
Entering 'laravel/Modules/Tenant'
origin  https://github.com/aurmich/module_tenant_fila3.git (fetch)
origin  https://github.com/aurmich/module_tenant_fila3.git (push)
Entering 'laravel/Modules/Ticket'
origin  https://github.com/aurmich/module_ticket_fila3.git (fetch)
origin  https://github.com/aurmich/module_ticket_fila3.git (push)
Entering 'laravel/Modules/UI'
origin  https://github.com/aurmich/module_ui_fila3.git (fetch)
origin  https://github.com/aurmich/module_ui_fila3.git (push)
Entering 'laravel/Modules/User'
origin  https://github.com/aurmich/module_user_fila3.git (fetch)
origin  https://github.com/aurmich/module_user_fila3.git (push)
Entering 'laravel/Modules/Xot'
origin  https://github.com/aurmich/module_xot_fila3.git (fetch)
origin  https://github.com/aurmich/module_xot_fila3.git (push)
Entering 'laravel/Themes/Sixteen'
origin  https://github.com/aurmich/theme_sixteen_fila3.git (fetch)
origin  https://github.com/aurmich/theme_sixteen_fila3.git (push)
Entering 'laravel/Themes/TwentyOne'
origin  https://github.com/aurmich/theme_twentyone_fila3.git (fetch)
origin  https://github.com/aurmich/theme_twentyone_fila3.git (push)
~~~


~~~bash
cd laravel
cp .env.latest .env
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
php -d memory_limit=-1 composer.phar update -W

~~~

puo' venire fuori un errore del tipo:
Fatal error: Trait "Spatie\QueueableAction\QueueableAction" not found in F:\var\www\_bases\base_fixcityam_fila3\laravel\
Modules\Xot\Actions\File\FixPathAction.php on line 13
soluzione
~~~bash
php -d memory_limit=-1 composer.phar update -W
~~~

Fatal error: Cannot redeclare Amp\delay() (previously declared in C:\Users\sottanamarco\AppData\Roaming\Composer\vendor\
amphp\amp\lib\functions.php:131) in F:\var\www\_bases\base_fixcityam_fila3\laravel\vendor\amphp\amp\src\functions.php on
 line 81
soluzione
~~~bash
php -d memory_limit=-1 composer.phar update -W
~~~

~~~bash
php artisan vendor:publish --all 
rm -rf database/migrations/
touch database/fixcity_user.sqlite
touch database/fixcity_data.sqlite
~~~

edit laravel.env
~~~env
APP_URL=http://fixcity.local
~~~

~~~bash
php artisan filament:assets
php artisan migrate
php artisan serve --host=fixcityam.local
~~~

se 
 <br />
  <b>Warning</b>:  Unknown: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Host sconosciuto.  in <b>U
nknown</b> on line <b>0</b><br />
  Failed to listen on fixcityam.local:8000 (reason: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Ho
st sconosciuto. )
  <br />
  <b>Warning</b>:  Unknown: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Host sconosciuto.  in <b>U
nknown</b> on line <b>0</b><br />
  Failed to listen on fixcityam.local:8001 (reason: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Ho
st sconosciuto. )
  <br />
  <b>Warning</b>:  Unknown: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Host sconosciuto.  in <b>U
nknown</b> on line <b>0</b><br />
  Failed to listen on fixcityam.local:8002 (reason: php_network_getaddresses: getaddrinfo for fixcityam.local failed: Ho
st sconosciuto. )



apri /etc/hosts
127.0.0.1      fixcityam.local #xot

