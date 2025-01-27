<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Elevation;

<<<<<<< HEAD
use Modules\Geo\DataTransferObjects\ElevationResultDTO;
use Modules\Geo\Exceptions\InvalidElevationDataException;
use Modules\Geo\Services\GoogleMapsService;
=======
use Modules\Geo\Datas\ElevationData;
>>>>>>> e46023e4e4295af58fc905ea1e415be6acef15a5

/**
 * Classe per ottenere i dati dell'elevazione da Open Elevation.
 */
class GetElevationAction
{
    public function __construct(
<<<<<<< HEAD
        private readonly GoogleMapsService $googleMapsService
=======
        private readonly FetchOpenElevationAction $fetchOpenElevationAction,
>>>>>>> e46023e4e4295af58fc905ea1e415be6acef15a5
    ) {
    }

    /**
<<<<<<< HEAD
     * @throws InvalidElevationDataException
     */
    public function execute(float $latitude, float $longitude): ElevationResultDTO
    {
        $response = $this->googleMapsService->getElevation($latitude, $longitude);

        if (!isset($response['results'][0])) {
            throw new InvalidElevationDataException('Invalid elevation data');
        }

        $result = $response['results'][0];

        return new ElevationResultDTO(
            elevation: (float)$result['elevation'],
            latitude: (float)$result['location']['lat'],
            longitude: (float)$result['location']['lng']
        );
=======
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
>>>>>>> e46023e4e4295af58fc905ea1e415be6acef15a5
    }
}
