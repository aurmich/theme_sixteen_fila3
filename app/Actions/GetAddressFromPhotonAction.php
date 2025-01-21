<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati completi dell'indirizzo dal servizio Photon
 * 
 * Photon è un servizio di geocoding basato su OpenStreetMap, ottimizzato per prestazioni.
 * Vantaggi:
 * - Completamente gratuito
 * - Molto veloce grazie all'indicizzazione Elasticsearch
 * - Supporto per ricerca con autocompletamento
 * - Non richiede API key
 * 
 * Limitazioni:
 * - Dati limitati rispetto a Nominatim
 * - Aggiornamenti meno frequenti
 * - No limite di richieste esplicito, ma consigliato uso responsabile
 */
class GetAddressFromPhotonAction
{
    private const BASE_URL = 'https://photon.komoot.io';

    /**
     * Esegue la ricerca dell'indirizzo completo su Photon
     * 
     * @param string $address L'indirizzo da cercare
     * @return AddressData|null I dati completi dell'indirizzo trovato o null se non trovato
     */
    public function execute(string $address): ?AddressData
    {
        $response = Http::get(self::BASE_URL . '/api', [
            'q' => $address,
            'limit' => 1,
        ]);

        if (!$response->successful()) {
            return null;
        }

        $data = $response->json();
        if (empty($data['features'])) {
            return null;
        }

        $feature = $data['features'][0];
        $properties = $feature['properties'];
        $coordinates = $feature['geometry']['coordinates'];

        return AddressData::from([
            'latitude' => (float) $coordinates[1],
            'longitude' => (float) $coordinates[0],
            'country' => $properties['country'] ?? 'Italia',
            'city' => $properties['city'] ?? '',
            'country_code' => $properties['countrycode'] ?? 'IT',
            'postal_code' => (int) ($properties['postcode'] ?? 0),
            'locality' => $properties['locality'] ?? '',
            'county' => $properties['county'] ?? '',
            'street' => $properties['street'] ?? '',
            'street_number' => $properties['housenumber'] ?? '',
            'district' => $properties['district'] ?? '',
            'state' => $properties['state'] ?? ''
        ]);
    }
}
