<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
    'name' => 'User',
    'description' => 'Modulo per la gestione degli utenti e autorizzazioni',
    'icon' => 'heroicon-o-users',
    'navigation' => [
        'enabled' => true,
        'sort' => 100,
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
    'name' => 'Media',
    'description' => 'Modulo per la gestione dei file multimediali e documenti',
    'icon' => 'heroicon-o-photo',
    'navigation' => [
        'enabled' => true,
        'sort' => 60,
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
    'name' => 'Notify',
    'description' => 'Modulo per la gestione delle notifiche e comunicazioni',
    'icon' => 'heroicon-o-bell',
    'navigation' => [
        'enabled' => true,
        'sort' => 70,
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
    'name' => 'Tenant',
    'description' => 'Modulo per la gestione multi-tenant dell\'applicazione',
    'icon' => 'heroicon-o-building-office',
    'navigation' => [
        'enabled' => true,
        'sort' => 80,
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
    ],
    'routes' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
    ],
    'providers' => [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'Modules\\Xot\\Providers\\XotServiceProvider',
    ],
=======
    'name' => 'Setting',
    'icon' => 'heroicon-o-cog', // icon on dashboard
    'navigation_sort' => 1,
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
        'Modules\\Job\\Providers\\JobServiceProvider',
    ],
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
        'Modules\\User\\Providers\\UserServiceProvider',
    ],
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
        'Modules\\Media\\Providers\\MediaServiceProvider',
    ],
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
        'Modules\\Notify\\Providers\\NotifyServiceProvider',
    ],
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
        'Modules\\Tenant\\Providers\\TenantServiceProvider',
    ],
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
];
