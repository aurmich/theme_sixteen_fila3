<?php

declare(strict_types=1);

namespace Modules\Geo\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Geo\Actions\Elevation\GetElevationAction;
use Modules\Geo\Actions\GetCoordinatesFromGoogleMapsAction;
use Modules\Geo\Actions\GetCoordinatesFromMultipleServicesAction;
use Modules\Geo\Actions\GetCoordinatesFromOpenStreetMapAction;
use Modules\Geo\Actions\IPGeolocation\GetLocationFromIPAction;
use Modules\Geo\Actions\Nominatim\LookupPlaceAction;
use Modules\Geo\Actions\Nominatim\ReverseGeocodeAction;
use Modules\Geo\Actions\Nominatim\SearchPlacesAction;
use Modules\Geo\Actions\TimeZone\GetTimeZoneAction;
use Modules\Geo\Actions\Weather\GetOpenWeatherDataAction;

class GeoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(GetCoordinatesFromGoogleMapsAction::class);
        $this->app->bind(GetCoordinatesFromOpenStreetMapAction::class);
        $this->app->bind(GetCoordinatesFromMultipleServicesAction::class);
        $this->app->bind(ReverseGeocodeAction::class);
        $this->app->bind(SearchPlacesAction::class);
        $this->app->bind(LookupPlaceAction::class);
        $this->app->bind(GetLocationFromIPAction::class);
        $this->app->bind(GetTimeZoneAction::class);
        $this->app->bind(GetElevationAction::class);
        $this->app->bind(GetOpenWeatherDataAction::class);
    }

    public function boot()
    {
        // Assicuriamoci che la configurazione di Google Maps sia disponibile
        if (! config('services.google.maps_api_key')) {
            \Log::warning('Google Maps API key non configurata');
        }
        if (! config('services.geonames.username')) {
            \Log::warning('GeoNames username non configurato');
        }
        if (! config('services.openweather.api_key')) {
            \Log::warning('OpenWeather API key non configurata');
        }
    }
}
