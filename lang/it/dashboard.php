<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

return [
    'resources' => 'Risorse',
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
    'navigation' => [
        'name' => 'dashboard',
        'plural' => 'dashboard',
        'group' => [
            'name' => '',
        ],
    ],
    'fields' => [
        'name' => 'Nome',
        'guard_name' => 'Guard',
        'permissions' => 'Permessi',
        'updated_at' => 'Aggiornato il',
        'first_name' => 'Nome',
        'last_name' => 'Cognome',
        'select_all' => [
            'name' => 'Seleziona Tutti',
            'message' => '',
        ],
    ],
    'actions' => [
        'import' => [
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
        ],
=======
return [
    'navigation' => [
        'name' => 'Dashboard',
        'plural' => 'Dashboard',
        'group' => [
            'name' => 'Notifiche',
            'description' => 'Panoramica delle notifiche',
        ],
        'label' => 'Dashboard',
        'sort' => 49,
        'icon' => 'notify-dashboard-animated',
    ],
    'widgets' => [
        'total_notifications' => 'Totale Notifiche',
        'unread_notifications' => 'Notifiche Non Lette',
        'notifications_by_type' => 'Notifiche per Tipo',
        'recent_notifications' => 'Notifiche Recenti',
        'notification_trends' => 'Trend Notifiche',
        'channel_status' => 'Stato Canali',
    ],
    'charts' => [
        'notifications_over_time' => 'Notifiche nel Tempo',
        'notifications_by_channel' => 'Notifiche per Canale',
        'delivery_success_rate' => 'Tasso di Consegna',
        'response_times' => 'Tempi di Risposta',
    ],
    'metrics' => [
        'delivery_rate' => 'Tasso di Consegna',
        'open_rate' => 'Tasso di Apertura',
        'click_rate' => 'Tasso di Click',
        'bounce_rate' => 'Tasso di Bounce',
    ],
    'periods' => [
        'today' => 'Oggi',
        'yesterday' => 'Ieri',
        'last_7_days' => 'Ultimi 7 giorni',
        'last_30_days' => 'Ultimi 30 giorni',
        'this_month' => 'Questo mese',
        'last_month' => 'Mese scorso',
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
declare(strict_types=1);

return [
    'navigation' => [
        'name' => 'Dashboard Geo',
        'plural' => 'Dashboard Geo',
        'group' => [
            'name' => 'Geo',
            'description' => 'Panoramica delle informazioni geografiche',
        ],
        'label' => 'Dashboard',
        'sort' => 30,
        'icon' => 'dashboard', // Aggiornamento dell'icona della dashboard usando la nuova icona dashboard
    ],
    'widgets' => [
        'total_locations' => 'Totale Località',
        'total_places' => 'Totale Luoghi',
        'recent_activity' => 'Attività Recente',
        'popular_places' => 'Luoghi Popolari',
    ],
    'charts' => [
        'locations_by_type' => 'Località per Tipo',
        'places_by_category' => 'Luoghi per Categoria',
        'activity_timeline' => 'Timeline Attività',
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    ],
];
