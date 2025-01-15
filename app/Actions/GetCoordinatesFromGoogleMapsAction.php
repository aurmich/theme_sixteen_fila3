<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Illuminate\Support\Facades\Http;

class GetCoordinatesFromGoogleMapsAction
{
    public function execute(string $address): ?array
    {
        try {
            $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json', [
                'address' => $address,
                'key' => config('services.google.maps_api_key'),
            ]);

            if ($response->successful() && $response->json('status') === 'OK') {
                $location = $response->json('results.0.geometry.location');

                return [
                    'latitude' => $location['lat'],
                    'longitude' => $location['lng'],
                ];
            }

            return null;
        } catch (\Exception $e) {
            \Log::error('Google Maps geocoding error: '.$e->getMessage());

            return null;
        }
    }
}
