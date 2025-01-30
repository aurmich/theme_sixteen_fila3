<?php

declare(strict_types=1);

namespace Modules\Geo\Datas;

/**
 * Data Transfer Object per le posizioni geografiche.
 */
class LocationData
{
    /**
     * @param float       $latitude  Latitudine in gradi decimali
     * @param float       $longitude Longitudine in gradi decimali
     * @param string|null $name      Nome opzionale della posizione
     */
    public function __construct(
        public readonly float $latitude,
        public readonly float $longitude,
        public readonly ?string $name = null,
    ) {
    }
}
