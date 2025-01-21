<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati dell'indirizzo dal servizio Bing Maps.
 */
class GetAddressFromBingMapsAction
{
    private const BASE_URL = 'http://dev.virtualearth.net/REST/v1/Locations';

    /**
     * Esegue la ricerca dell'indirizzo su Bing Maps.
     *
     * @param string $address L'indirizzo da cercare
     *
     * @throws \Exception Se la chiave API non è configurata
     *
     * @return AddressData|null I dati dell'indirizzo trovato o null se non trovato
     */
    public function execute(string $address): ?AddressData
    {
        $apiKey = config('services.bing.maps_api_key');

        if (empty($apiKey)) {
            throw new \Exception('Bing Maps API key not configured');
        }

        $response = Http::get(self::BASE_URL, [
            'q' => $address,
            'key' => $apiKey,
            'output' => 'json',
        ]);

        if (! $response->successful()) {
            return null;
        }

        $data = $response->json();
        if (empty($data['resourceSets'][0]['resources'])) {
            return null;
        }

        $resource = $data['resourceSets'][0]['resources'][0];
        $location = $resource['point']['coordinates'];
        $address = $resource['address'];

        return AddressData::from([
            'latitude' => (float) $location[0],
            'longitude' => (float) $location[1],
            'country' => $address['countryRegion'] ?? 'Italia',
            'city' => $address['locality'] ?? '',
            'country_code' => $address['countryRegionIso2'] ?? 'IT',
            'postal_code' => (int) ($address['postalCode'] ?? 0),
            'locality' => $address['neighborhood'] ?? '',
            'county' => $address['adminDistrict2'] ?? '',
            'street' => $address['addressLine'] ?? '',
            'street_number' => '',  // Bing non fornisce il numero civico separatamente
            'district' => $address['neighborhood'] ?? '',
            'state' => $address['adminDistrict'] ?? '',
        ]);
    }
}
