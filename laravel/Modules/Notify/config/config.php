<?php

declare(strict_types=1);

return [
    'name' => 'Notify',
<<<<<<< HEAD
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
=======
    'icon' => 'heroicon-o-envelope', // icona nella dashboard
    'navigation_sort' => 1,
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
];
