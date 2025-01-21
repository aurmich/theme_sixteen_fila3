<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Photon;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati dell'indirizzo dal servizio Photon.
 */
class GetAddressFromPhotonAction
{
    private const BASE_URL = 'https://photon.komoot.io/api';

    /**
     * Esegue la ricerca dell'indirizzo su Photon.
     *
     * @param string $address L'indirizzo da cercare
     *
     * @return AddressData|null I dati dell'indirizzo trovato o null se non trovato
     */
    public function execute(string $address): ?AddressData
    {
        $response = Http::get(self::BASE_URL, [
            'q' => $address,
            'limit' => 1,
        ]);

        if (! $response->successful()) {
            return null;
        }

        /** @var array{features?: array<int, array{geometry: array{coordinates: array<int, float>}, properties: array{country?: string, city?: string, postcode?: string, street?: string, housenumber?: string}}>}> $data */
        $data = $response->json();
        dddx($data);
        if (empty($data['features'][0])) {
            return null;
        }

        $result = $data['features'][0];
        $geometry = $result['geometry'] ?? [];
        $properties = $result['properties'] ?? [];

        return AddressData::from([
            'latitude' => (float) ($geometry['coordinates'][1] ?? 0),
            'longitude' => (float) ($geometry['coordinates'][0] ?? 0),
            'country' => $properties['country'] ?? 'Italia',
            'city' => $properties['city'] ?? '',
            'postal_code' => (int) ($properties['postcode'] ?? 0),
            'street' => $properties['street'] ?? '',
            'street_number' => $properties['housenumber'] ?? '',
        ]);
    }
}
