<?php

declare(strict_types=1);

return [
    'name' => 'Media',
<<<<<<< HEAD
    'icon' => 'fas-photo-video',
    'navigation_sort' => 1,
=======
    'description' => 'Modulo per la gestione dei file multimediali e documenti',
    'icon' => 'heroicon-o-photo',
    'navigation' => [
        'enabled' => true,
        'sort' => 60,
    ],
    'routes' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
    ],
    'providers' => [
        'Modules\\Media\\Providers\\MediaServiceProvider',
    ],
>>>>>>> origin/master
];
