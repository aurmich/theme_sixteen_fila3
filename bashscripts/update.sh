<<<<<<< HEAD
 git pull --force --rebase && rm composer.lock || echo "composer.lock not exists" && composer update -W && composer analyse
=======
git config core.fileMode false
git pull --force --rebase 
rm composer.lock || echo "composer.lock not exists" 
composer update -W 
composer analyse
>>>>>>> c1120baae0 (Squashed 'laravel/Modules/Lang/' content from commit 693742e073)
