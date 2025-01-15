<?php

namespace Modules\Geo\Traits;

use Illuminate\Database\Eloquent\Builder;

trait GeographicalScopes
{
    /**
     * Scope per calcolare la distanza tra due punti.
     *
     * @param Builder $query
     * @param float $latitude
     * @param float $longitude
     * @return Builder
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
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeOrderByDistance(Builder $query): Builder
    {
        return $query->orderBy('distance');
    }
} 