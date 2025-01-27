<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

<<<<<<< HEAD
use Modules\Geo\DataTransferObjects\LocationDTO;
use Modules\Geo\Exceptions\InvalidLocationException;
use Modules\Geo\Services\GoogleMapsService;
=======
use Illuminate\Support\Collection;
use Modules\Geo\Actions\GoogleMaps\CalculateDistanceMatrixAction;
use Modules\Geo\Datas\LocationData;
>>>>>>> e46023e4e4295af58fc905ea1e415be6acef15a5

/**
 * Classe per calcolare la distanza tra due punti.
 */
class CalculateDistanceAction
{
    public function __construct(
<<<<<<< HEAD
        private readonly GoogleMapsService $googleMapsService
    ) {
    }

    public function execute(LocationDTO $origin, LocationDTO $destination): string
    {
        $response = $this->googleMapsService->getDistanceMatrix(
            "{$origin->latitude},{$origin->longitude}",
            "{$destination->latitude},{$destination->longitude}"
        );

        if (!$response || 
            empty($response['rows']) ||
            empty($response['rows'][0]['elements']) ||
            !isset($response['rows'][0]['elements'][0]['distance']['value'])
        ) {
            return 'N/D';
        }

        $distanceMeters = (int)$response['rows'][0]['elements'][0]['distance']['value'];
        return $this->formatDistance($distanceMeters);
    }

    private function formatDistance(int $meters): string
    {
        if ($meters < 1000) {
            return $meters.' m';
        }

        $kilometers = round($meters / 1000, 1);
        return $kilometers.' km';
=======
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
>>>>>>> e46023e4e4295af58fc905ea1e415be6acef15a5
    }
}
