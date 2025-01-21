<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati dell'indirizzo dal servizio Google Maps
 */
class GetAddressFromGoogleMapsAction
{
    private const BASE_URL = 'https://maps.googleapis.com/maps/api/geocode/json';

    /**
     * Esegue la ricerca dell'indirizzo su Google Maps
     * 
     * @param string $address L'indirizzo da cercare
     * @return AddressData|null I dati dell'indirizzo trovato o null se non trovato
     * @throws \Exception Se la chiave API non è configurata
     */
    public function execute(string $address): ?AddressData
    {
        $apiKey = config('services.google.maps_api_key');
        
        if (empty($apiKey)) {
            throw new \Exception('Google Maps API key not configured');
        }

        $response = Http::get(self::BASE_URL, [
            'address' => $address,
            'key' => $apiKey,
        ]);

        if (!$response->successful()) {
            return null;
        }

        $data = $response->json();
        if (empty($data['results'])) {
            return null;
        }

        $result = $data['results'][0];
        $location = $result['geometry']['location'];
        $components = collect($result['address_components']);

        $getComponent = function(string $type) use ($components) {
            return $components->first(function($component) use ($type) {
                return in_array($type, $component['types']);
            })['long_name'] ?? '';
        };

        $getShortComponent = function(string $type) use ($components) {
            return $components->first(function($component) use ($type) {
                return in_array($type, $component['types']);
            })['short_name'] ?? '';
        };

        return AddressData::from([
            'latitude' => (float) $location['lat'],
            'longitude' => (float) $location['lng'],
            'country' => $getComponent('country') ?: 'Italia',
            'city' => $getComponent('locality') ?: $getComponent('administrative_area_level_3'),
            'country_code' => $getShortComponent('country') ?: 'IT',
            'postal_code' => (int) ($getComponent('postal_code') ?: 0),
            'locality' => $getComponent('sublocality') ?: $getComponent('neighborhood'),
            'county' => $getComponent('administrative_area_level_2'),
            'street' => $getComponent('route'),
            'street_number' => $getComponent('street_number'),
            'district' => $getComponent('sublocality_level_1'),
            'state' => $getComponent('administrative_area_level_1')
        ]);
    }
}
