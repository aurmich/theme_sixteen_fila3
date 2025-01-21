<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Elevation;

use Modules\Geo\Datas\ElevationData;

/**
 * Classe per ottenere i dati dell'elevazione da Open Elevation.
 */
class GetElevationAction
{
    public function __construct(
        private readonly FetchOpenElevationAction $fetchOpenElevationAction,
    ) {
    }

    /**
     * Ottiene l'elevazione per le coordinate specificate.
     *
     * @param float $latitude  Latitudine
     * @param float $longitude Longitudine
     *
     * @return ElevationData|null Dati dell'elevazione o null se non disponibili
     */
    public function execute(float $latitude, float $longitude): ?ElevationData
    {
        return $this->fetchOpenElevationAction->execute($latitude, $longitude);
    }
}
