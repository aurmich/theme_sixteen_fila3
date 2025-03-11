<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
<<<<<<< HEAD
    'name' => 'Xot',
    'description' => 'Modulo base con funzionalità core e utilities',
    'icon' => 'heroicon-o-cube',
    'navigation' => [
        'enabled' => true,
        'sort' => 110,
=======
    'name' => 'Job',
    'description' => 'Modulo per la gestione dei lavori in background e code',
    'icon' => 'heroicon-o-queue-list',
    'navigation' => [
        'enabled' => true,
        'sort' => 40,
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
    'name' => 'User',
    'description' => 'Modulo per la gestione degli utenti e autorizzazioni',
    'icon' => 'heroicon-o-users',
    'navigation' => [
        'enabled' => true,
        'sort' => 100,
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
    ],
    'routes' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
    ],
    'providers' => [
<<<<<<< HEAD
<<<<<<< HEAD
        'Modules\\Xot\\Providers\\XotServiceProvider',
=======
        'Modules\\Job\\Providers\\JobServiceProvider',
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
        'Modules\\User\\Providers\\UserServiceProvider',
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
    ],
];
