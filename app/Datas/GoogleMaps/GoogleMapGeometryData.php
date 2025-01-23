<?php

declare(strict_types=1);

namespace Modules\Geo\Datas\GoogleMaps;

use Spatie\LaravelData\Data;

class GoogleMapGeometryData extends Data
{
    public function __construct(
        public ?GoogleMapLocationData $location,
        public string $location_type,
        public ?GoogleMapBoundsData $bounds,
        public ?GoogleMapBoundsData $viewport
    ) {
    }
}
