<?php

declare(strict_types=1);

namespace Modules\Geo\Datas;

use Spatie\LaravelData\Data;

class AddressData extends Data
{
    public float $latitude;

    public float $longitude;
    /*
    "osm_id" => 11966363775
    "osm_type" => "N"
    "osm_key" => "amenity"
    "osm_value" => "library"
    "name" => "Biblioteca di Marghera"
    //"type" => "house"
    */
    public string $country="Italia";
    public string $city;// => "Marghera"
    public string $country_code = "IT";
    public int $postal_code;//" => "30175"
    public string $locality;//" => "Catene"
    public string $county;//" => "Venezia"
    public string $street;//" => "Piazza del Mercato"
    public string $street_number;//" => "40"
    public string $district;//" => "Marghera"
    public string $state;//" => "Veneto"
}
