<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Spatie\QueueableAction\QueueableAction;
use Modules\Geo\Services\GoogleMapsService;

class CalculateTravelTimeAction
{
    use QueueableAction;

    public function __construct(
        protected GoogleMapsService $googleMapsService
    ) {}

    public function execute($origin, $destination): string
    {
        if (empty($origin->latitude) || empty($origin->longitude) || 
            empty($destination->latitude) || empty($destination->longitude)) {
            return 'N/D';
        }

        $response = $this->googleMapsService->getDistanceMatrix(
            "{$origin->latitude},{$origin->longitude}",
            "{$destination->latitude},{$destination->longitude}"
        );

        if (! $response || ! isset($response['rows'][0]['elements'][0]['duration'])) {
            return 'N/D';
        }

        return $this->formatDuration($response['rows'][0]['elements'][0]['duration']['value']);
    }

    protected function formatDuration(int $seconds): string
    {
        $hours = floor($seconds / 3600);
        $minutes = ceil(($seconds % 3600) / 60);

        if ($hours > 0) {
            return sprintf('%dh %dm', $hours, $minutes);
        }

        return sprintf('%dm', $minutes);
    }
}
