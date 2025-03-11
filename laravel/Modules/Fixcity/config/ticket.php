<?php

return [
    'name' => 'Ticket',
    'namespace' => 'Modules\\Fixcity\\Ticket',
    'routes' => [
        'prefix' => 'ticket',
        'middleware' => ['web', 'auth'],
    ],
    'notifications' => [
        'enabled' => true,
        'channels' => ['mail', 'database'],
    ],
    'events' => [
        'enabled' => true,
    ],
<<<<<<< HEAD
];
=======
]; 
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
