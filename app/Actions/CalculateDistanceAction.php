<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Modules\Geo\Services\GoogleMapsService;
use Spatie\QueueableAction\QueueableAction;

class CalculateDistanceAction
{
    use QueueableAction;

    public function __construct(
        protected GoogleMapsService $googleMapsService,
    ) {
    }

    public function execute($origin, $destination): string
    {
        if (empty($origin->latitude) || empty($origin->longitude)
            || empty($destination->latitude) || empty($destination->longitude)) {
            return 'N/D';
        }

        $response = $this->googleMapsService->getDistanceMatrix(
            "{$origin->latitude},{$origin->longitude}",
            "{$destination->latitude},{$destination->longitude}"
        );

        if (! $response || ! isset($response['rows'][0]['elements'][0]['distance'])) {
            return 'N/D';
        }

        return $this->formatDistance($response['rows'][0]['elements'][0]['distance']['value']);
    }

    protected function formatDistance(int $meters): string
    {
        if ($meters < 1000) {
            return $meters.' m';
        }

        return round($meters / 1000, 1).' km';
    }
}
