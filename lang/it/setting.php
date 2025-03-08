<<<<<<< HEAD
<<<<<<< HEAD
<?php

return [
    'navigation' => [
        'name' => 'Impostazione',
        'plural' => 'Impostazioni',
        'group' => 'Sistema',
        'label' => 'setting',
        'sort' => 65,
        'icon' => 'heroicon-o-cog-6-tooth',
    ],
];
=======
<?php return array (
  'fields' => 
  array (
    'version' => 
    array (
      'label' => 'version',
    ),
  ),
);
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
<?php

declare(strict_types=1);

return [
    'navigation' => [
        'name' => 'Impostazioni Geo',
        'plural' => 'Impostazioni Geo',
        'group' => [
            'name' => 'Geo',
            'description' => 'Configurazione del modulo geografico',
        ],
        'label' => 'Impostazioni',
        'sort' => 34,
        'icon' => 'settings', // Aggiornamento dell'icona delle impostazioni
    ],
    'fields' => [
        'default_map_provider' => 'Provider Mappa Predefinito',
        'api_keys' => [
            'google_maps' => 'API Key Google Maps',
            'mapbox' => 'API Key Mapbox',
            'here' => 'API Key HERE Maps',
        ],
        'default_location' => [
            'lat' => 'Latitudine Predefinita',
            'lng' => 'Longitudine Predefinita',
            'zoom' => 'Zoom Predefinito',
        ],
        'display_options' => [
            'units' => 'Unità di Misura',
            'language' => 'Lingua Mappe',
            'theme' => 'Tema Mappe',
        ],
    ],
    'providers' => [
        'google' => 'Google Maps',
        'mapbox' => 'Mapbox',
        'here' => 'HERE Maps',
        'osm' => 'OpenStreetMap',
    ],
    'units' => [
        'metric' => 'Metrico',
        'imperial' => 'Imperiale',
    ],
];
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
