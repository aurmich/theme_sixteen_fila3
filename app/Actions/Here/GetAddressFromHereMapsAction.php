<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Here;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati dell'indirizzo dal servizio Here Maps.
 */
class GetAddressFromHereMapsAction
{
    private const BASE_URL = 'https://geocode.search.hereapi.com/v1/geocode';

    /**
     * Esegue la ricerca dell'indirizzo su Here Maps.
     *
     * @param string $address L'indirizzo da cercare
     *
     * @return AddressData|null I dati dell'indirizzo trovato o null se non trovato
     */
    public function execute(string $address): ?AddressData
    {
        $apiKey = config('services.here.key');

        if (empty($apiKey)) {
            throw new \Exception('Here Maps API key not configured');
        }

        $response = Http::get(self::BASE_URL, [
            'q' => $address,
            'apiKey' => $apiKey,
            'limit' => 1,
        ]);

        if (! $response->successful()) {
            return null;
        }

        /** @var array{items?: array<int, array{position: array{lat: float, lng: float}, address: array{countryName?: string, city?: string, postalCode?: string, street?: string, houseNumber?: string}}>}> $data */
        $data = $response->json();

        if (empty($data['items'][0])) {
            return null;
        }

        $result = $data['items'][0];
        $position = $result['position'] ?? [];
        $address = $result['address'] ?? [];

        return AddressData::from([
            'latitude' => (float) ($position['lat'] ?? 0),
            'longitude' => (float) ($position['lng'] ?? 0),
            'country' => $address['countryName'] ?? 'Italia',
            'city' => $address['city'] ?? '',
            'postal_code' => (int) ($address['postalCode'] ?? 0),
            'street' => $address['street'] ?? '',
            'street_number' => $address['houseNumber'] ?? '',
        ]);
    }
}
