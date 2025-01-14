<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Illuminate\Support\Facades\Http;

class GetCoordinatesFromOpenStreetMapAction
{
    private const NOMINATIM_ENDPOINT = 'https://nominatim.openstreetmap.org/search';

    public function execute(string $address): ?array
    {
        try {
            $response = Http::withHeaders([
                'User-Agent' => config('app.name').' Application',
            ])->get(self::NOMINATIM_ENDPOINT, [
                'q' => $address,
                'format' => 'json',
                'limit' => 1,
            ]);

            if ($response->successful() && ! empty($response->json())) {
                $result = $response->json()[0];

                return [
                    'latitude' => (float) $result['lat'],
                    'longitude' => (float) $result['lon'],
                ];
            }

            return null;
        } catch (\Exception $e) {
            \Log::error('OpenStreetMap geocoding error: '.$e->getMessage());

            return null;
        }
    }
}
