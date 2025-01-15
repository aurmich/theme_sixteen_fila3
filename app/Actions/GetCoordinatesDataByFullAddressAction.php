<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

class GetCoordinatesDataByFullAddressAction
{
    public function execute(string $address): array
    {
        // Simulate fetching coordinates for the given address
        // In real implementation, this could be an API call to a geocoding service
        // Here we return dummy coordinates for demonstration purposes
        return [
            'latitude' => 40.7128,  // Example latitude
            'longitude' => -74.0060, // Example longitude
        ];
    }
}
