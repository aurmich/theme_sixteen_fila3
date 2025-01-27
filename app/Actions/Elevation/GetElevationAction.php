<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Elevation;

use Modules\Geo\DataTransferObjects\ElevationResultDTO;
use Modules\Geo\Exceptions\InvalidElevationDataException;
use Modules\Geo\Services\GoogleMapsService;

class GetElevationAction
{
    public function __construct(
        private readonly GoogleMapsService $googleMapsService
    ) {
    }

    /**
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
    }
}
