<?php

declare(strict_types=1);

namespace Modules\Geo\Datas\GoogleMaps;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GoogleMapResponseData extends Data
{
    public function __construct(
        public string $status,
        /** @var DataCollection<GoogleMapResultData> */
        public DataCollection $results
    ) {
    }
}
