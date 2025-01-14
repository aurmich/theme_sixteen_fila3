<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

class ClusterLocationsAction
{
    public function execute(array $points, float $maxDistance = 1.0): array
    {
        $clusters = [];
        $distanceCalculator = app(CalculateDistanceAction::class);

        foreach ($points as $point) {
            $assigned = false;

            foreach ($clusters as &$cluster) {
                $distance = $distanceCalculator->execute(
                    $cluster['center']['latitude'],
                    $cluster['center']['longitude'],
                    $point['latitude'],
                    $point['longitude']
                );

                if ($distance <= $maxDistance) {
                    $cluster['points'][] = $point;
                    $this->updateClusterCenter($cluster);
                    $assigned = true;
                    break;
                }
            }

            if (! $assigned) {
                $clusters[] = [
                    'center' => $point,
                    'points' => [$point],
                ];
            }
        }

        return $clusters;
    }

    private function updateClusterCenter(array &$cluster): void
    {
        $latSum = array_sum(array_column($cluster['points'], 'latitude'));
        $lonSum = array_sum(array_column($cluster['points'], 'longitude'));
        $count = count($cluster['points']);

        $cluster['center'] = [
            'latitude' => $latSum / $count,
            'longitude' => $lonSum / $count,
        ];
    }
}
