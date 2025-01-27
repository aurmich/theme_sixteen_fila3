<?php

declare(strict_types=1);

namespace Modules\Geo\Datas\GoogleMaps;

use Spatie\LaravelData\Data;

class GoogleMapLocationData extends Data
{
    public function __construct(
        public float $lat,
        public float $lng,
    ) {
    }
}
