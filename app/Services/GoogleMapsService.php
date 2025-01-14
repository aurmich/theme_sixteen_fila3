<?php

declare(strict_types=1);

namespace Modules\Geo\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class GoogleMapsService
{
    protected string $apiKey;
    protected string $baseUrl = 'https://maps.googleapis.com/maps/api';

    public function __construct()
    {
        $apiKey = config('services.google.maps_api_key');
        if (!$apiKey) {
            throw new \RuntimeException('Google Maps API key is not configured. Please set GOOGLE_MAPS_API_KEY in your .env file.');
        }
        $this->apiKey = $apiKey;
    }

    public function getDistanceMatrix(string $origins, string $destinations): ?array
    {
        $cacheKey = "distance_matrix:{$origins}:{$destinations}";

        return Cache::remember($cacheKey, now()->addDay(), function () use ($origins, $destinations) {
            $response = Http::get("{$this->baseUrl}/distancematrix/json", [
                'origins' => $origins,
                'destinations' => $destinations,
                'key' => $this->apiKey,
            ]);

            if (! $response->successful() || $response->json('status') !== 'OK') {
                return null;
            }

            return $response->json();
        });
    }

    public function getCoordinatesByAddress(string $address): ?array
    {
        $cacheKey = "geocode:" . md5($address);

        return Cache::remember($cacheKey, now()->addWeek(), function () use ($address) {
            $response = Http::get("{$this->baseUrl}/geocode/json", [
                'address' => $address,
                'key' => $this->apiKey,
            ]);

            if (! $response->successful() || 
                $response->json('status') !== 'OK' || 
                empty($response->json('results'))) {
                return null;
            }

            return $response->json('results.0.geometry.location');
        });
    }
}
