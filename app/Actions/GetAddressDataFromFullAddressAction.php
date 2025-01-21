<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Modules\Geo\Actions\GoogleMaps\GetGeocodingDataAction;
use Modules\Geo\Datas\GeocodingData;

/**
 * Classe per ottenere i dati dell'indirizzo utilizzando diversi servizi di geocoding.
 */
class GetAddressDataFromFullAddressAction
{
    public function __construct(
        private readonly GetGeocodingDataAction $geocodingAction,
        // private GetAddressFromGoogleMapsAction $googleMapsAction,
        // private GetAddressFromBingMapsAction $bingMapsAction,
        // private GetAddressFromLocationIQAction $locationIQAction,
        // private GetAddressFromNominatimAction $nominatimAction,
        // private GetAddressFromOpenCageAction $openCageAction,
        // private GetAddressFromPhotonAction $photonAction,
    ) {
        // $this->errors = collect([]);
    }

    /**
     * Ottiene i dati dell'indirizzo da un indirizzo completo.
     *
     * @param string $fullAddress L'indirizzo da cercare
     *
     * @throws \RuntimeException Se la richiesta fallisce o l'indirizzo non viene trovato
     *
     * @return GeocodingData I dati dell'indirizzo trovato
     */
    public function execute(string $fullAddress): GeocodingData
    {
        try {
            $result = $this->geocodingAction->execute($fullAddress);

            return $result;
        } catch (\Exception $e) {
            throw new \RuntimeException('Errore durante il recupero dei dati dell\'indirizzo: '.$e->getMessage());
        }
    }

    /**
     * Restituisce la collezione degli errori.
     *
     * @return Collection<int, string>
     */
    public function getErrors(): Collection
    {
        return $this->errors;
    }
}
