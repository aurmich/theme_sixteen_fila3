<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Modules\Geo\DataTransferObjects\LocationDTO;
use Modules\Geo\Exceptions\InvalidLocationException;

class ClusterLocationsAction
{
    public function __construct(
        private CalculateDistanceAction $distanceCalculator
    ) {
    }

    /**
     * @param array<LocationDTO> $locations
     * @return array<array{center: LocationDTO, points: array<LocationDTO>}>
     */
    public function execute(array $locations, float $maxDistance = 1.0): array
    {
        $clusters = [];

        foreach ($locations as $location) {
            if (! $location instanceof LocationDTO) {
                throw new InvalidLocationException('Invalid location data');
            }

            $assigned = false;

            foreach ($clusters as &$cluster) {
                $distance = $this->distanceCalculator->execute(
                    $cluster['center']->latitude,
                    $cluster['center']->longitude,
                    $location->latitude,
                    $location->longitude
                );

                if ($distance <= $maxDistance) {
                    $cluster['points'][] = $location;
                    $this->updateClusterCenter($cluster);
                    $assigned = true;
                    break;
                }
            }

            if (! $assigned) {
                $clusters[] = [
                    'center' => $location,
                    'points' => [$location],
                ];
            }
        }

        return $clusters;
    }

    /**
     * @param array{center: LocationDTO, points: array<LocationDTO>} $cluster
     */
    private function updateClusterCenter(array &$cluster): void
    {
        $latSum = array_sum(array_map(
            fn (LocationDTO $point) => $point->latitude,
            $cluster['points']
        ));
        
        $lonSum = array_sum(array_map(
            fn (LocationDTO $point) => $point->longitude,
            $cluster['points']
        ));
        
        $count = count($cluster['points']);

        $cluster['center'] = new LocationDTO(
            latitude: $latSum / $count,
            longitude: $lonSum / $count
        );
    }
}
