<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati completi dell'indirizzo dal servizio Nominatim di OpenStreetMap.
 *
 * Nominatim è il servizio di geocoding ufficiale di OpenStreetMap.
 * Vantaggi:
 * - Gratuito e senza limiti di utilizzo
 * - Dati molto dettagliati e aggiornati frequentemente
 * - Supporto per indirizzi in tutto il mondo
 *
 * Limitazioni:
 * - Max 1 richiesta al secondo
 * - Necessario un User-Agent personalizzato
 * - I risultati possono variare in base alla qualità dei dati OSM
 */
class GetAddressFromNominatimAction
{
    private const BASE_URL = 'https://nominatim.openstreetmap.org';

    /**
     * Esegue la ricerca dell'indirizzo completo su Nominatim.
     *
     * @param string $address L'indirizzo da cercare
     *
     * @return AddressData|null I dati completi dell'indirizzo trovato o null se non trovato
     */
    public function execute(string $address): ?AddressData
    {
        $response = Http::withHeaders([
            'User-Agent' => 'TechPlanner/1.0',
        ])->get(self::BASE_URL.'/search', [
            'q' => $address,
            'format' => 'json',
            'limit' => 1,
            'addressdetails' => 1,
        ]);

        if (! $response->successful() || empty($response->json())) {
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
            'state' => $address['state'] ?? '',
        ]);
    }
}
