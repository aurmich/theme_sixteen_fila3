<?php

declare(strict_types=1);

namespace Modules\Geo\Services;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Contracts\GeocodingServiceInterface;

class NominatimService implements GeocodingServiceInterface
{
    protected string $baseUrl = 'https://nominatim.openstreetmap.org';

    public function getCoordinates(string $address): ?array
    {
        try {
            $response = Http::get($this->baseUrl.'/search', [
                'q' => $address,
                'format' => 'json',
                'limit' => 1,
            ]);

            if ($response->successful() && ! empty($response->json())) {
                $data = $response->json()[0];

                return [
                    'latitude' => (float) $data['lat'],
                    'longitude' => (float) $data['lon'],
                ];
            }
        } catch (\Exception $e) {
            report($e);
        }

        return null;
    }
}
