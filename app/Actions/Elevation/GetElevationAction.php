<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Elevation;

use Modules\Geo\Datas\LocationData;
use Modules\Geo\Services\GoogleMapsService;

/**
 * Classe per ottenere l'elevazione di un punto geografico.
 */
class GetElevationAction
{
    public function __construct(
        private readonly GoogleMapsService $googleMapsService,
    ) {
    }

    /**
     * Ottiene l'elevazione per una posizione.
     *
     * @param LocationData $location La posizione di cui ottenere l'elevazione
     *
     * @throws \RuntimeException Se la risposta non è valida
     *
     * @return float L'elevazione in metri
     */
    public function execute(LocationData $location): float
    {
        $response = $this->googleMapsService->getElevation(
            sprintf('%f,%f', $location->latitude, $location->longitude)
        );

        if (empty($response['results'])
            || ! isset($response['results'][0]['elevation'])
        ) {
            throw new \RuntimeException('Errore nel recupero dell\'elevazione: risposta non valida.');
        }

        return (float) $response['results'][0]['elevation'];
    }

    /**
     * Formatta l'elevazione in una stringa leggibile.
     */
    private function formatElevation(float $meters): string
    {
        return sprintf('%.1f m', $meters);
    }
}
