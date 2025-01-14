<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Nominatim;

use Illuminate\Support\Facades\Http;

class LookupPlaceAction
{
    private const ENDPOINT = 'https://nominatim.openstreetmap.org/lookup';

    public function execute(string $osmType, int $osmId): ?array
    {
        try {
            $response = Http::withHeaders([
                'User-Agent' => config('app.name').' Application',
            ])->get(self::ENDPOINT, [
                'osm_ids' => "{$osmType}{$osmId}",
                'format' => 'json',
                'addressdetails' => 1,
                'accept-language' => 'it',
            ]);

            if ($response->successful() && ! empty($response->json())) {
                $place = $response->json()[0];

                return [
                    'name' => $place['display_name'],
                    'latitude' => (float) $place['lat'],
                    'longitude' => (float) $place['lon'],
                    'address' => $place['address'],
                    'osm_type' => $place['osm_type'],
                    'osm_id' => $place['osm_id'],
                    'class' => $place['class'],
                    'type' => $place['type'],
                ];
            }

            return null;
        } catch (\Exception $e) {
            \Log::error('Nominatim lookup error: '.$e->getMessage());

            return null;
        }
    }
}
