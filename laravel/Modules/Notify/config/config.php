<?php

declare(strict_types=1);

return [
    'name' => 'Notify',
<<<<<<< HEAD
    'icon' => 'heroicon-o-envelope', // icona nella dashboard
    'navigation_sort' => 1,
=======
    'description' => 'Modulo per la gestione delle notifiche e comunicazioni',
    'icon' => 'heroicon-o-bell',
    'navigation' => [
        'enabled' => true,
        'sort' => 70,
    ],
    'routes' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
    ],
    'providers' => [
        'Modules\\Notify\\Providers\\NotifyServiceProvider',
    ],
>>>>>>> origin/master
];
