<?php

namespace Modules\Geo\Contracts;

interface GeocodingServiceInterface
{
    /**
     * Get coordinates from address
     * 
     * @param string $address
     * @return array{latitude: float, longitude: float}|null
     */
    public function getCoordinates(string $address): ?array;
}
