<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Illuminate\Support\Collection;

class GetCoordinatesFromMultipleServicesAction
{
    private Collection $errors;

    public function __construct()
    {
        $this->errors = collect();
    }

    public function execute(string $address): ?array
    {
        // Prova con Google Maps
        try {
            $coordinates = app(GetCoordinatesFromGoogleMapsAction::class)
                ->execute($address);

            if ($coordinates) {
                return $coordinates;
            }
        } catch (\Exception $e) {
            $this->errors->push('Google Maps: '.$e->getMessage());
        }

        // Prova con OpenStreetMap
        try {
            $coordinates = app(GetCoordinatesFromOpenStreetMapAction::class)
                ->execute($address);

            if ($coordinates) {
                return $coordinates;
            }
        } catch (\Exception $e) {
            $this->errors->push('OpenStreetMap: '.$e->getMessage());
        }

        \Log::warning('Geocoding failed for address: '.$address, [
            'errors' => $this->errors->toArray(),
        ]);

        return null;
    }

    public function getErrors(): Collection
    {
        return $this->errors;
    }
}
