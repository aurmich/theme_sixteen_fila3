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

}
