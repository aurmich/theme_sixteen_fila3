<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Modules\Geo\DataTransferObjects\LocationDTO;
use Modules\Geo\Exceptions\InvalidLocationException;
use Modules\Geo\Services\GoogleMapsService;

class CalculateDistanceAction
{
    public function __construct(
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
    }
}
