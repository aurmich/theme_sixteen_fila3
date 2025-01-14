<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

class OptimizeRouteAction
{
    public function execute(array $points): array
    {
        // Implementazione dell'algoritmo del commesso viaggiatore
        // usando l'algoritmo nearest neighbor come approccio greedy
        $route = [];
        $unvisited = $points;

        // Partiamo dal primo punto
        $current = array_shift($unvisited);
        $route[] = $current;

        while (! empty($unvisited)) {
            $nearest = $this->findNearest($current, $unvisited);
            $route[] = $nearest;

            // Rimuovi il punto visitato
            $unvisited = array_filter($unvisited, fn ($p) => $p['latitude'] != $nearest['latitude']
                || $p['longitude'] != $nearest['longitude']
            );

            $current = $nearest;
        }

        return $route;
    }

    private function findNearest(array $point, array $candidates): array
    {
        $distanceCalculator = app(CalculateDistanceAction::class);
        $nearest = null;
        $minDistance = PHP_FLOAT_MAX;

        foreach ($candidates as $candidate) {
            $distance = $distanceCalculator->execute(
                $point['latitude'],
                $point['longitude'],
                $candidate['latitude'],
                $candidate['longitude']
            );

            if ($distance < $minDistance) {
                $minDistance = $distance;
                $nearest = $candidate;
            }
        }

        return $nearest;
    }
}
