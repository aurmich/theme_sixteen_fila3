<?php

declare(strict_types=1);

namespace Modules\Geo\Services;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Contracts\GeocodingServiceInterface;

class PositionStackService implements GeocodingServiceInterface
{
    protected string $baseUrl = 'http://api.positionstack.com/v1';

    protected ?string $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.positionstack.api_key');
    }

    public function getCoordinates(string $address): ?array
    {
        if (! $this->apiKey) {
            return null;
        }

        try {
            $response = Http::get($this->baseUrl.'/forward', [
                'access_key' => $this->apiKey,
                'query' => $address,
                'limit' => 1,
            ]);

            if ($response->successful() && ! empty($response->json()['data'])) {
                $data = $response->json()['data'][0];

                return [
                    'latitude' => (float) $data['latitude'],
                    'longitude' => (float) $data['longitude'],
                ];
            }
        } catch (\Exception $e) {
            report($e);
        }

        return null;
    }
}
