<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Modules\Geo\Services\GoogleMapsService;
use Spatie\QueueableAction\QueueableAction;

class CalculateTravelTimeAction
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
        if (! isset($origin->latitude) || ! isset($origin->longitude)
            || ! isset($destination->latitude) || ! isset($destination->longitude)) {
            return 'N/D';
        }

        /** @var array{
         *     rows?: array<array{
         *         elements: array<array{
         *             duration?: array{value: int}
         *         }>
         *     }>
         * }|null $response */
        $response = $this->googleMapsService->getDistanceMatrix(
            "{$origin->latitude},{$origin->longitude}",
            "{$destination->latitude},{$destination->longitude}"
        );

        if (! $response
            || empty($response['rows'])
            || empty($response['rows'][0]['elements'])
            || ! isset($response['rows'][0]['elements'][0]['duration']['value'])) {
            return 'N/D';
        }

        $durationSeconds = (int) $response['rows'][0]['elements'][0]['duration']['value'];

        return $this->formatDuration($durationSeconds);
    }

    protected function formatDuration(int $seconds): string
    {
        $hours = (int) floor($seconds / 3600);
        $minutes = (int) ceil(($seconds % 3600) / 60);

        if ($hours > 0) {
            return sprintf('%dh %dm', $hours, $minutes);
        }

        return sprintf('%dm', $minutes);
    }
}
