<?php

declare(strict_types=1);

namespace Modules\Geo\Traits;

use Illuminate\Database\Eloquent\Builder;

trait GeographicalScopes
{
    /**
     * Scope per calcolare la distanza tra due punti.
     */
    public function scopeWithDistance(Builder $query, float $latitude, float $longitude): Builder
    {
        return $query->select('*', \DB::raw("
            (6371 * acos(
                cos(radians($latitude)) *
                cos(radians(latitude)) *
                cos(radians(longitude) - radians($longitude)) +
                sin(radians($latitude)) *
                sin(radians(latitude))
            )) AS distance
        "));
    }

    /**
     * Scope per ordinare i risultati per distanza.
     */
    public function scopeOrderByDistance(Builder $query): Builder
    {
        return $query->orderBy('distance');
    }
}
