<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\BingMaps;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati dell'indirizzo dal servizio Bing Maps.
 */
class GetAddressFromBingMapsAction
{
    private const BASE_URL = 'http://dev.virtualearth.net/REST/v1';

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
        $apiKey = config('services.bing.key');
        dddx($apiKey);
        if (empty($apiKey)) {
            throw new \Exception('Bing Maps API key not configured');
        }

        $response = Http::get(self::BASE_URL.'/Locations', [
            'query' => $address,
            'key' => $apiKey,
            'maxResults' => 1,
        ]);
        dddx($response);
        if (! $response->successful()) {
            return null;
        }

        /** @var array{resourceSets?: array<int, array{resources?: array<int, array{point?: array{coordinates?: array<int, float>}, address?: array{countryRegion?: string, locality?: string, countryRegionIso2?: string, postalCode?: string, neighborhood?: string, adminDistrict2?: string, addressLine?: string, adminDistrict?: string}}>}>} $data */
        $data = $response->json();

        if (empty($data['resourceSets'][0]['resources'][0])) {
            return null;
        }

        $result = $data['resourceSets'][0]['resources'][0];
        $point = $result['point'] ?? null;
        $address = $result['address'] ?? [];

        if (empty($point['coordinates'])) {
            return null;
        }

        return AddressData::from([
            'latitude' => (float) ($point['coordinates'][0] ?? 0),
            'longitude' => (float) ($point['coordinates'][1] ?? 0),
            'country' => $address['countryRegion'] ?? 'Italia',
            'city' => $address['locality'] ?? '',
            'country_code' => $address['countryRegionIso2'] ?? 'IT',
            'postal_code' => (int) ($address['postalCode'] ?? 0),
            'locality' => $address['neighborhood'] ?? '',
            'county' => $address['adminDistrict2'] ?? '',
            'street' => $address['addressLine'] ?? '',
            'street_number' => '',
            'district' => $address['neighborhood'] ?? '',
            'state' => $address['adminDistrict'] ?? '',
        ]);
    }
}
