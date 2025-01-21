<?php

declare(strict_types=1);

namespace Modules\Geo\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GoogleMapsService
{
    protected string $apiKey;

    protected string $baseUrl = 'https://maps.googleapis.com/maps/api';

    public function __construct()
    {
        /** @var string|null $apiKey */
        $apiKey = config('services.google.maps_api_key');
        if (! is_string($apiKey) || empty($apiKey)) {
            throw new \RuntimeException('Google Maps API key is not configured. Please set GOOGLE_MAPS_API_KEY in your .env file.');
        }
        $this->apiKey = $apiKey;
    }

    /**
     * @return array{
     *     destination_addresses: array<string>,
     *     origin_addresses: array<string>,
     *     rows: array<array{
     *         elements: array<array{
     *             distance?: array{text: string, value: int},
     *             duration?: array{text: string, value: int},
     *             status: string
     *         }>
     *     }>,
     *     status: string
     * }|null
     */
    public function getDistanceMatrix(string $origins, string $destinations): ?array
    {
        $cacheKey = "distance_matrix:{$origins}:{$destinations}";

        /** @var array|null $result */
        $result = Cache::remember($cacheKey, now()->addDay(), function () use ($origins, $destinations) {
            $response = Http::get("{$this->baseUrl}/distancematrix/json", [
                'origins' => $origins,
                'destinations' => $destinations,
                'key' => $this->apiKey,
            ]);

            if (! $response->successful() || 'OK' !== $response->json('status')) {
                return null;
            }

            /** @var array{
             * destination_addresses: array<string>,
             * origin_addresses: array<string>,
             * rows: array<array{
             * elements: array<array{
             * distance?: array{text: string, value: int},
             * duration?: array{text: string, value: int},
             * status: string
             * }>
             * }>,
             * status: string
             * }|null $data */
            $data = $response->json();

            return $data;
        });

        return $result;
    }

    /**
     * @return array{lat: float, lng: float}|null
     */
    public function getCoordinatesByAddress(string $address): ?array
    {
        $cacheKey = 'geocode:'.md5($address);

        /** @var array{lat: float, lng: float}|null $result */
        $result = Cache::remember($cacheKey, now()->addWeek(), function () use ($address) {
            $response = Http::get("{$this->baseUrl}/geocode/json", [
                'address' => $address,
                'key' => $this->apiKey,
            ]);

            if (! $response->successful()
                || 'OK' !== $response->json('status')
                || empty($response->json('results'))) {
                return null;
            }

            /** @var array{results: array<array{geometry: array{location: array{lat: float, lng: float}}}>} $data */
            $data = $response->json();

            if (empty($data['results'][0]['geometry']['location'])) {
                return null;
            }

            return $data['results'][0]['geometry']['location'];
        });

        return $result;
    }
}
