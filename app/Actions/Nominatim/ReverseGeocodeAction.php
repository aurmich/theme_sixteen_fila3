<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Nominatim;

use Illuminate\Support\Facades\Http;

class ReverseGeocodeAction
{
    private const ENDPOINT = 'https://nominatim.openstreetmap.org/reverse';

    public function execute(float $latitude, float $longitude): ?array
    {
        try {
            $response = Http::withHeaders([
                'User-Agent' => config('app.name').' Application',
            ])->get(self::ENDPOINT, [
                'lat' => $latitude,
                'lon' => $longitude,
                'format' => 'json',
                'addressdetails' => 1,
                'accept-language' => 'it',
            ]);

            if ($response->successful()) {
                $data = $response->json();

                return [
                    'full_address' => $data['display_name'],
                    'address' => [
                        'street' => $data['address']['road'] ?? null,
                        'house_number' => $data['address']['house_number'] ?? null,
                        'postcode' => $data['address']['postcode'] ?? null,
                        'city' => $data['address']['city'] ?? $data['address']['town'] ?? $data['address']['village'] ?? null,
                        'state' => $data['address']['state'] ?? null,
                        'country' => $data['address']['country'] ?? null,
                    ],
                    'osm_type' => $data['osm_type'] ?? null,
                    'osm_id' => $data['osm_id'] ?? null,
                ];
            }

            return null;
        } catch (\Exception $e) {
            \Log::error('Nominatim reverse geocoding error: '.$e->getMessage());

            return null;
        }
    }
}
