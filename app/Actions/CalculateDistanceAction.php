<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Illuminate\Support\Collection;
use Modules\Geo\Actions\GoogleMaps\CalculateDistanceMatrixAction;
use Modules\Geo\Datas\LocationData;

/**
 * Classe per calcolare la distanza tra due punti.
 */
class CalculateDistanceAction
{
    public function __construct(
        private readonly CalculateDistanceMatrixAction $distanceMatrixAction,
    ) {
    }

    /**
     * Calcola la distanza tra due punti.
     *
     * @param LocationData $origin      Punto di origine
     * @param LocationData $destination Punto di destinazione
     *
     * @return array{distance: array{text: string, value: int}, duration: array{text: string, value: int}, status: string}
     */
    public function execute(LocationData $origin, LocationData $destination): array
    {
        $response = $this->distanceMatrixAction->execute(
            new Collection([$origin]),
            new Collection([$destination])
        );

        if (empty($response) || empty($response[0]) || empty($response[0][0])) {
            throw new \RuntimeException('Errore nel calcolo della distanza: risposta non valida.');
        }

        return $response[0][0];
    }

    /**
     * Formatta la distanza in metri in una stringa leggibile.
     */
    private function formatDistance(int $meters): string
    {
        if ($meters < 1000) {
            return sprintf('%d m', $meters);
        }

        $kilometers = round($meters / 1000, 1);

        return sprintf('%.1f km', $kilometers);
    }
}
