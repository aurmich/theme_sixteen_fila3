<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\TimeZone;

use Illuminate\Support\Facades\Http;

class GetTimeZoneAction
{
    private const ENDPOINT = 'http://api.geonames.org/timezoneJSON';

    public function execute(float $latitude, float $longitude): ?array
    {
        try {
            $response = Http::get(self::ENDPOINT, [
                'lat' => $latitude,
                'lng' => $longitude,
                'username' => config('services.geonames.username'),
            ]);

            if ($response->successful()) {
                $data = $response->json();

                return [
                    'timezone_id' => $data['timezoneId'],
                    'timezone_name' => $data['timeZoneName'],
                    'dst_offset' => $data['dstOffset'],
                    'gmt_offset' => $data['gmtOffset'],
                    'raw_offset' => $data['rawOffset'],
                    'time' => $data['time'],
                    'sunrise' => $data['sunrise'],
                    'sunset' => $data['sunset'],
                ];
            }

            return null;
        } catch (\Exception $e) {
            \Log::error('Timezone lookup error: '.$e->getMessage());

            return null;
        }
    }
}
