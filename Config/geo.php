<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Google Maps API
    |--------------------------------------------------------------------------
    |
    | Configurazione per l'integrazione con Google Maps API.
    |
    */
    'google_maps' => [
        'api_key' => env('GOOGLE_MAPS_API_KEY'),
        'default_location' => [
            'lat' => 41.9028, // Roma
            'lng' => 12.4964,
        ],
        'default_zoom' => 6,
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache
    |--------------------------------------------------------------------------
    |
    | Configurazione per la cache del modulo.
    |
    */
    'cache' => [
        'locations' => [
            'ttl' => env('GEO_LOCATIONS_CACHE_TTL', 300), // 5 minuti
            'key' => 'geo_locations',
        ],
        'routes' => [
            'ttl' => env('GEO_ROUTES_CACHE_TTL', 3600), // 1 ora
            'key' => 'geo_routes',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Markers
    |--------------------------------------------------------------------------
    |
    | Configurazione per i marker della mappa.
    |
    */
    'markers' => [
        'path' => resource_path('images/markers'),
        'types' => [
            'store' => [
                'icon' => 'store.png',
                'size' => [32, 32],
            ],
            'warehouse' => [
                'icon' => 'warehouse.png',
                'size' => [32, 32],
            ],
            'office' => [
                'icon' => 'office.png',
                'size' => [32, 32],
            ],
            'factory' => [
                'icon' => 'factory.png',
                'size' => [32, 32],
            ],
            'default' => [
                'icon' => 'default.png',
                'size' => [32, 32],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Route Optimization
    |--------------------------------------------------------------------------
    |
    | Configurazione per l'ottimizzazione dei percorsi.
    |
    */
    'route_optimization' => [
        'max_waypoints' => env('GEO_MAX_WAYPOINTS', 25),
        'mode' => 'driving',
        'language' => 'it',
        'units' => 'metric',
        'avoid' => ['highways', 'tolls', 'ferries'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Map Styles
    |--------------------------------------------------------------------------
    |
    | Stili personalizzati per la mappa Google Maps.
    |
    */
    'map_styles' => [
        [
            'featureType' => 'poi',
            'elementType' => 'labels',
            'stylers' => [['visibility' => 'off']],
        ],
        [
            'featureType' => 'transit',
            'elementType' => 'labels',
            'stylers' => [['visibility' => 'off']],
        ],
        [
            'featureType' => 'water',
            'elementType' => 'geometry',
            'stylers' => [['color' => '#c9c9c9']],
        ],
        [
            'featureType' => 'landscape',
            'elementType' => 'geometry',
            'stylers' => [['color' => '#f5f5f5']],
        ],
    ],
];
