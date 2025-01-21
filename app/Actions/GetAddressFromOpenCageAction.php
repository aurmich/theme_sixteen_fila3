<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati dell'indirizzo dal servizio OpenCage
 * OpenCage è un servizio di geocoding che aggrega dati da diverse fonti.
 */
class GetAddressFromOpenCageAction
{
    private const BASE_URL = 'https://api.opencagedata.com/geocode/v1/json';

    /**
     * Esegue la ricerca dell'indirizzo su OpenCage.
     *
     * @param string $address L'indirizzo da cercare
     *
     * @throws \Exception Se la chiave API non è configurata
     *
     * @return AddressData|null I dati dell'indirizzo trovato o null se non trovato
     */
    public function execute(string $address): ?AddressData
    {
        $apiKey = config('services.opencage.api_key');

        if (empty($apiKey)) {
            throw new \Exception('OpenCage API key not configured');
        }

        $response = Http::get(self::BASE_URL, [
            'q' => $address,
            'key' => $apiKey,
        ]);

        if (! $response->successful()) {
            return null;
        }

        $data = $response->json();
        if (empty($data['results'])) {
            return null;
        }

        $result = $data['results'][0];
        $components = $result['components'];

        return AddressData::from([
            'latitude' => (float) $result['geometry']['lat'],
            'longitude' => (float) $result['geometry']['lng'],
            'country' => $components['country'] ?? 'Italia',
            'city' => $components['city'] ?? $components['town'] ?? $components['village'] ?? '',
            'country_code' => $components['country_code'] ?? 'IT',
            'postal_code' => (int) ($components['postcode'] ?? 0),
            'locality' => $components['suburb'] ?? '',
            'county' => $components['county'] ?? '',
            'street' => $components['road'] ?? '',
            'street_number' => $components['house_number'] ?? '',
            'district' => $components['suburb'] ?? '',
            'state' => $components['state'] ?? '',
        ]);
    }
}
