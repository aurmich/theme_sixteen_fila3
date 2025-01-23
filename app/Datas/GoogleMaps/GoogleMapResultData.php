<?php

declare(strict_types=1);

namespace Modules\Geo\Datas\GoogleMaps;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GoogleMapResultData extends Data
{
    public function __construct(
        public ?GoogleMapGeometryData $geometry,
        /** @var DataCollection<GoogleMapComponentData> */
        public DataCollection $address_components,
        public string $formatted_address,
        public array $types
    ) {
    }
}
