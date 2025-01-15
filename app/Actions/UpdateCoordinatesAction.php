<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Modules\Geo\Services\GoogleMapsService;
use Spatie\QueueableAction\QueueableAction;

class UpdateCoordinatesAction
{
    use QueueableAction;

    public function __construct(
        protected GoogleMapsService $googleMapsService,
    ) {}

    public function execute(string $address): ?array
    {
        if (empty($address)) {
            return null;
        }

        $coordinates = $this->googleMapsService->getCoordinatesByAddress($address);

        if (! $coordinates) {
            return null;
        }

        return [
            'latitude' => $coordinates['lat'],
            'longitude' => $coordinates['lng'],
        ];
    }
}
