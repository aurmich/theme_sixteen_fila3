<?php

declare(strict_types=1);

return [
    'name' => 'Media',
<<<<<<< HEAD
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
=======
    'icon' => 'fas-photo-video',
    'navigation_sort' => 1,
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
];
