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

    /**
     * @param object{latitude: float|int|string, longitude: float|int|string} $origin
     * @param object{latitude: float|int|string, longitude: float|int|string} $destination
     */
    public function execute(object $origin, object $destination): string
    {
        if (!isset($origin->latitude) || !isset($origin->longitude)
            || !isset($destination->latitude) || !isset($destination->longitude)) {
            return 'N/D';
        }

        /** @var array{
         *     rows?: array<array{
         *         elements: array<array{
         *             distance?: array{value: int}
         *         }>
         *     }>
         * }|null $response */
        $response = $this->googleMapsService->getDistanceMatrix(
            "{$origin->latitude},{$origin->longitude}",
            "{$destination->latitude},{$destination->longitude}"
        );

        if (! $response || 
            empty($response['rows']) ||
            empty($response['rows'][0]['elements']) ||
            !isset($response['rows'][0]['elements'][0]['distance']['value'])) {
            return 'N/D';
        }

        $distanceMeters = (int) $response['rows'][0]['elements'][0]['distance']['value'];
        
        return $this->formatDistance($distanceMeters);
    }

    protected function formatDistance(int $meters): string
    {
        if ($meters < 1000) {
            return $meters.' m';
        }

        $kilometers = round($meters / 1000, 1);
        return $kilometers.' km';
    }
}
