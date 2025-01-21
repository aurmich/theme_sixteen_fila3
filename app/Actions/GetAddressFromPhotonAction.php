<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati dell'indirizzo dal servizio Photon.
 */
class GetAddressFromPhotonAction
{
    private const BASE_URL = 'https://photon.komoot.io';

    /**
     * Esegue la ricerca dell'indirizzo su Photon.
     *
     * @param string $address L'indirizzo da cercare
     *
     * @return AddressData|null I dati dell'indirizzo trovato o null se non trovato
     */
    public function execute(string $address): ?AddressData
    {
        $response = Http::withHeaders([
            'User-Agent' => 'TechPlanner/1.0',
        ])->get(self::BASE_URL.'/api', [
            'q' => $address,
            'limit' => 1,
            'lang' => 'it',
        ]);

        if (! $response->successful()) {
            return null;
        }

        /** @var array{features?: array<int, array{properties?: array{country?: string, city?: string, countrycode?: string, postcode?: string, locality?: string, county?: string, street?: string, housenumber?: string, district?: string, state?: string}, geometry?: array{coordinates?: array<int, float>}}>} $data */
        $data = $response->json();

        if (empty($data['features'])) {
            return null;
        }

        $result = $data['features'][0];
        $properties = $result['properties'] ?? [];
        $coordinates = $result['geometry']['coordinates'] ?? [];

        if (empty($coordinates)) {
            return null;
        }

        return AddressData::from([
            'latitude' => (float) ($coordinates[1] ?? 0),
            'longitude' => (float) ($coordinates[0] ?? 0),
            'country' => $properties['country'] ?? 'Italia',
            'city' => $properties['city'] ?? '',
            'country_code' => $properties['countrycode'] ?? 'IT',
            'postal_code' => (int) ($properties['postcode'] ?? 0),
            'locality' => $properties['locality'] ?? '',
            'county' => $properties['county'] ?? '',
            'street' => $properties['street'] ?? '',
            'street_number' => $properties['housenumber'] ?? '',
            'district' => $properties['district'] ?? '',
            'state' => $properties['state'] ?? '',
        ]);
    }
}
