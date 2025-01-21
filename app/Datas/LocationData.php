<?php

declare(strict_types=1);

namespace Modules\Geo\Datas;

use Spatie\LaravelData\Data;

/**
 * Data object per la gestione delle informazioni di localizzazione
 *
 * @property float $latitude Latitudine della posizione
 * @property float $longitude Longitudine della posizione
 * @property string|null $address Indirizzo completo
 * @property string|null $street Via
 * @property string|null $number Numero civico
 * @property string|null $city Città
 * @property string|null $state Stato/Regione
 * @property string|null $country Nazione
 * @property string|null $postalCode Codice postale
 */
class LocationData extends Data
{
    public function __construct(
        public readonly float $latitude,
        public readonly float $longitude,
        public readonly ?string $address = null,
        public readonly ?string $street = null,
        public readonly ?string $number = null,
        public readonly ?string $city = null,
        public readonly ?string $state = null,
        public readonly ?string $country = null,
        public readonly ?string $postalCode = null,
    ) {}

    /**
     * Restituisce l'indirizzo formattato
     */
    public function getFormattedAddress(): string
    {
        $parts = [];

        if ($this->street) {
            $parts[] = $this->street;
            if ($this->number) {
                $parts[count($parts) - 1] .= ', ' . $this->number;
            }
        }

        if ($this->city) {
            $parts[] = $this->city;
        }

        if ($this->state) {
            $parts[] = $this->state;
        }

        if ($this->country) {
            $parts[] = $this->country;
        }

        if ($this->postalCode) {
            $parts[] = $this->postalCode;
        }

        return implode(', ', $parts);
    }
}
