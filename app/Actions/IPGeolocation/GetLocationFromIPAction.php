<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\IPGeolocation;

use Illuminate\Support\Facades\Http;

class GetLocationFromIPAction
{
    private const ENDPOINT = 'https://ipapi.co/';

    public function execute(?string $ip = null): ?array
    {
        try {
            $ip = $ip ?? request()->ip();
            $response = Http::get(self::ENDPOINT.$ip.'/json/');

            if ($response->successful()) {
                $data = $response->json();

                return [
                    'ip' => $data['ip'],
                    'city' => $data['city'],
                    'region' => $data['region'],
                    'country' => $data['country_name'],
                    'latitude' => $data['latitude'],
                    'longitude' => $data['longitude'],
                    'timezone' => $data['timezone'],
                    'postal_code' => $data['postal'] ?? null,
                    'asn' => $data['asn'] ?? null,
                    'org' => $data['org'] ?? null,
                ];
            }

            return null;
        } catch (\Exception $e) {
            \Log::error('IP Geolocation error: '.$e->getMessage());

            return null;
        }
    }
}
