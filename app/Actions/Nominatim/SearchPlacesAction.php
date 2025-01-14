<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Nominatim;

use Illuminate\Support\Facades\Http;

class SearchPlacesAction
{
    private const ENDPOINT = 'https://nominatim.openstreetmap.org/search';

    public function execute(
        string $query,
        ?string $country = null,
        int $limit = 10
    ): array {
        try {
            $params = [
                'q' => $query,
                'format' => 'json',
                'limit' => $limit,
                'addressdetails' => 1,
                'accept-language' => 'it',
            ];

            if ($country) {
                $params['countrycodes'] = $country;
            }

            $response = Http::withHeaders([
                'User-Agent' => config('app.name').' Application',
            ])->get(self::ENDPOINT, $params);

            if ($response->successful()) {
                return collect($response->json())->map(function ($place) {
                    return [
                        'name' => $place['display_name'],
                        'latitude' => (float) $place['lat'],
                        'longitude' => (float) $place['lon'],
                        'type' => $place['type'],
                        'importance' => $place['importance'],
                        'address' => $place['address'],
                    ];
                })->all();
            }

            return [];
        } catch (\Exception $e) {
            \Log::error('Nominatim search error: '.$e->getMessage());

            return [];
        }
    }
}
