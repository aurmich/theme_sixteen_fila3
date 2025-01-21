<?php

declare(strict_types=1);

namespace Modules\Geo\Datas;

use Spatie\LaravelData\Data;

/**
 * Data object per la gestione delle informazioni degli indirizzi.
 *
 * Questo oggetto rappresenta un indirizzo completo con tutte le sue componenti,
 * incluse le coordinate geografiche. È utilizzato per standardizzare il formato
 * degli indirizzi attraverso diversi provider di geocoding.
 *
 * @property float  $latitude      Latitudine dell'indirizzo
 * @property float  $longitude     Longitudine dell'indirizzo
 * @property string $country       Nome del paese (default: 'Italia')
 * @property string $country_code  Codice del paese (default: 'IT')
 * @property string $city          Nome della città
 * @property string $state         Nome della regione/stato
 * @property string $county        Nome della provincia
 * @property string $district      Nome del quartiere/distretto
 * @property string $locality      Nome della località
 * @property string $street        Nome della via
 * @property string $street_number Numero civico
 * @property int    $postal_code   Codice postale
 */
class AddressData extends Data
{
    public function __construct(
        public float $latitude,
        public float $longitude,
        public string $city,
        public string $state,
        public string $county,
        public string $district,
        public string $locality,
        public string $street,
        public string $street_number,
        public int $postal_code,
        public string $country = 'Italia',
        public string $country_code = 'IT',
    ) {
    }

    /**
     * Restituisce l'indirizzo formattato come stringa.
     */
    public function getFormattedAddress(): string
    {
        $parts = [
            $this->street.' '.$this->street_number,
            $this->postal_code.' '.$this->city,
            $this->county,
            $this->state,
            $this->country,
        ];

        return implode(', ', array_filter($parts));
    }

    /**
     * Crea un'istanza da un array di dati OpenStreetMap.
     *
     * @param array{
     *     lat: string|float,
     *     lon: string|float,
     *     address: array{
     *         city?: string,
     *         town?: string,
     *         state?: string,
     *         county?: string,
     *         suburb?: string,
     *         district?: string,
     *         locality?: string,
     *         road?: string,
     *         house_number?: string,
     *         postcode?: string,
     *         country?: string,
     *         country_code?: string
     *     }
     * } $data
     */
    public static function fromOpenStreetMap(array $data): self
    {
        $address = $data['address'] ?? [];

        return new self(
            latitude: (float) $data['lat'],
            longitude: (float) $data['lon'],
            city: $address['city'] ?? $address['town'] ?? '',
            state: $address['state'] ?? '',
            county: $address['county'] ?? '',
            district: $address['suburb'] ?? $address['district'] ?? '',
            locality: $address['locality'] ?? '',
            street: $address['road'] ?? '',
            street_number: $address['house_number'] ?? '',
            postal_code: (int) ($address['postcode'] ?? 0),
            country: $address['country'] ?? 'Italia',
            country_code: strtoupper($address['country_code'] ?? 'IT'),
        );
    }
}
