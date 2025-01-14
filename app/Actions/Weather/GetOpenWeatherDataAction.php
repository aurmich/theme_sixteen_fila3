<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Weather;

use Illuminate\Support\Facades\Http;

class GetOpenWeatherDataAction
{
    private const ENDPOINT = 'https://api.openweathermap.org/data/2.5/weather';

    public function execute(float $latitude, float $longitude): ?array
    {
        try {
            $response = Http::get(self::ENDPOINT, [
                'lat' => $latitude,
                'lon' => $longitude,
                'appid' => config('services.openweather.api_key'),
                'units' => 'metric',
                'lang' => 'it',
            ]);

            if ($response->successful()) {
                $data = $response->json();

                return [
                    'temperature' => $data['main']['temp'],
                    'feels_like' => $data['main']['feels_like'],
                    'humidity' => $data['main']['humidity'],
                    'pressure' => $data['main']['pressure'],
                    'weather' => [
                        'main' => $data['weather'][0]['main'],
                        'description' => $data['weather'][0]['description'],
                        'icon' => $data['weather'][0]['icon'],
                    ],
                    'wind' => [
                        'speed' => $data['wind']['speed'],
                        'direction' => $data['wind']['deg'],
                    ],
                    'clouds' => $data['clouds']['all'],
                    'timestamp' => $data['dt'],
                ];
            }

            return null;
        } catch (\Exception $e) {
            \Log::error('OpenWeather API error: '.$e->getMessage());

            return null;
        }
    }
}
