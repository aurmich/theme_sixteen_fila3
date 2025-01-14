<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Elevation;

use Illuminate\Support\Facades\Http;

class GetElevationAction
{
    private const ENDPOINT = 'https://api.open-elevation.com/api/v1/lookup';

    public function execute(float $latitude, float $longitude): ?array
    {
        try {
            $response = Http::post(self::ENDPOINT, [
                'locations' => [
                    [
                        'latitude' => $latitude,
                        'longitude' => $longitude,
                    ],
                ],
            ]);

            if ($response->successful()) {
                $data = $response->json()['results'][0];

                return [
                    'elevation' => $data['elevation'],
                    'latitude' => $data['latitude'],
                    'longitude' => $data['longitude'],
                ];
            }

            return null;
        } catch (\Exception $e) {
            \Log::error('Elevation lookup error: '.$e->getMessage());

            return null;
        }
    }
}
