<?php return array (
  'navigation' => array (
    'name' => 'Impostazioni Geo',
    'plural' => 'Impostazioni Geo',
    'group' => array (
      'name' => 'Geo',
      'description' => 'Configurazione del modulo geografico',
    ),
    'label' => 'Impostazioni',
    'sort' => 34,
    'icon' => 'geo-settings',
  ),
  'fields' => array (
    'default_map_provider' => 'Provider Mappa Predefinito',
    'api_keys' => array (
      'google_maps' => 'API Key Google Maps',
      'mapbox' => 'API Key Mapbox',
      'here' => 'API Key HERE Maps',
    ),
    'default_location' => array (
      'lat' => 'Latitudine Predefinita',
      'lng' => 'Longitudine Predefinita',
      'zoom' => 'Zoom Predefinito',
    ),
    'display_options' => array (
      'units' => 'Unità di Misura',
      'language' => 'Lingua Mappe',
      'theme' => 'Tema Mappe',
    ),
  ),
  'providers' => array (
    'google' => 'Google Maps',
    'mapbox' => 'Mapbox',
    'here' => 'HERE Maps',
    'osm' => 'OpenStreetMap',
  ),
  'units' => array (
    'metric' => 'Metrico',
    'imperial' => 'Imperiale',
  ),
);
