<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati completi dell'indirizzo dal servizio LocationIQ
 * 
 * LocationIQ è un servizio di geocoding commerciale basato su OpenStreetMap.
 * Vantaggi:
 * - Piano gratuito generoso (10,000 richieste/giorno)
 * - API affidabile e veloce
 * - Supporto enterprise disponibile
 * - Dati dettagliati e ben strutturati
 * 
 * Limitazioni:
 * - Richiede API key
 * - Rate limiting sul piano gratuito
 * - Alcune funzionalità avanzate solo nei piani a pagamento
 */
class GetAddressFromLocationIQAction
{
    private const BASE_URL = 'https://eu1.locationiq.com/v1';

    /**
     * Esegue la ricerca dell'indirizzo completo su LocationIQ
     * 
     * @param string $address L'indirizzo da cercare
     * @return AddressData|null I dati completi dell'indirizzo trovato o null se non trovato
     * @throws \Exception Se la chiave API non è configurata
     */
    public function execute(string $address): ?AddressData
    {
        $apiKey = config('services.locationiq.key');
        
        if (empty($apiKey)) {
            throw new \Exception('LocationIQ API key not configured');
        }

        $response = Http::get(self::BASE_URL . '/search', [
            'key' => $apiKey,
            'q' => $address,
            'format' => 'json',
            'limit' => 1,
            'addressdetails' => 1,
        ]);

        if (!$response->successful() || empty($response->json())) {
            return null;
        }

        $result = $response->json()[0];
        $address = $result['address'] ?? [];
        
        return AddressData::from([
            'latitude' => (float) $result['lat'],
            'longitude' => (float) $result['lon'],
            'country' => $address['country'] ?? 'Italia',
            'city' => $address['city'] ?? $address['town'] ?? $address['village'] ?? '',
            'country_code' => $address['country_code'] ?? 'IT',
            'postal_code' => (int) ($address['postcode'] ?? 0),
            'locality' => $address['suburb'] ?? '',
            'county' => $address['county'] ?? '',
            'street' => $address['road'] ?? '',
            'street_number' => $address['house_number'] ?? '',
            'district' => $address['suburb'] ?? '',
            'state' => $address['state'] ?? ''
        ]);
    }
}
