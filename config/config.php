<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
    'name' => 'Xot',
    'description' => 'Modulo base con funzionalità core e utilities',
    'icon' => 'heroicon-o-cube',
    'navigation' => [
        'enabled' => true,
        'sort' => 110,
    ],
    'routes' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
    ],
    'providers' => [
        'Modules\\Xot\\Providers\\XotServiceProvider',
    ],
=======
    'name' => 'Setting',
    'icon' => 'heroicon-o-cog', // icon on dashboard
    'navigation_sort' => 1,
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
];
