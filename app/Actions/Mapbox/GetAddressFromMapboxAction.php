<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Mapbox;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati dell'indirizzo dal servizio Mapbox.
 */
class GetAddressFromMapboxAction
{
    private const BASE_URL = 'https://api.mapbox.com/geocoding/v5/mapbox.places';

    /**
     * Esegue la ricerca dell'indirizzo su Mapbox.
     *
     * @param string $address L'indirizzo da cercare
     *
     * @return AddressData|null I dati dell'indirizzo trovato o null se non trovato
     */
    public function execute(string $address): ?AddressData
    {
        $apiKey = config('services.mapbox.key');

        if (empty($apiKey)) {
            throw new \Exception('Mapbox API key not configured');
        }

        $response = Http::get(self::BASE_URL.'/'.urlencode($address).'.json', [
            'access_token' => $apiKey,
            'limit' => 1,
        ]);

        if (! $response->successful()) {
            return null;
        }

        /** @var array{features?: array<int, array{geometry: array{coordinates: array<int, float>}, place_name?: string, context?: array<array{short_code?: string, text?: string}>}>} $data */
        $data = $response->json();

        if (empty($data['features'][0])) {
            return null;
        }

        $result = $data['features'][0];
        $geometry = $result['geometry'] ?? [];
        $context = collect($result['context'] ?? []);

        return AddressData::from([
            'latitude' => (float) ($geometry['coordinates'][1] ?? 0),
            'longitude' => (float) ($geometry['coordinates'][0] ?? 0),
            'country' => $context->firstWhere('short_code', 'country')['text'] ?? 'Italia',
            'city' => $context->firstWhere('short_code', 'place')['text'] ?? '',
            'postal_code' => (int) ($context->firstWhere('short_code', 'postcode')['text'] ?? 0),
            'street' => $context->firstWhere('short_code', 'address')['text'] ?? '',
            'street_number' => '',
        ]);
    }
}
