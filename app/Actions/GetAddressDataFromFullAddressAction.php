<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Modules\Geo\Actions\GoogleMaps\GetGeocodingDataAction;
use Modules\Geo\Datas\GeocodingData;

/**
<<<<<<< HEAD
 * Classe per ottenere i dati dell'indirizzo da diversi servizi di geocoding.
=======
 * Classe per ottenere i dati dell'indirizzo utilizzando diversi servizi di geocoding.
>>>>>>> 023759a (up)
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
<<<<<<< HEAD
     * Esegue la ricerca dell'indirizzo su tutti i servizi disponibili.
     *
     * @param string $address L'indirizzo da cercare
     *
     * @return AddressData|null I dati dell'indirizzo trovato o null se non trovato
=======
     * Ottiene i dati dell'indirizzo da un indirizzo completo.
     *
     * @param string $fullAddress L'indirizzo da cercare
     *
     * @throws \RuntimeException Se la richiesta fallisce o l'indirizzo non viene trovato
     *
     * @return GeocodingData I dati dell'indirizzo trovato
>>>>>>> 023759a (up)
     */
    public function execute(string $fullAddress): GeocodingData
    {
        try {
            $result = $this->geocodingAction->execute($fullAddress);

            return $result;
        } catch (\Exception $e) {
            throw new \RuntimeException('Errore durante il recupero dei dati dell\'indirizzo: '.$e->getMessage());
        }
<<<<<<< HEAD

        if ($this->errors->isNotEmpty()) {
            Notification::make()
                ->warning()
                ->title('Geocoding Error')
                ->body($this->errors->join("\n"))
                ->send();
        }

        return null;
    }

    /**
     * Restituisce la collezione degli errori.
     *
     * @return Collection<int, string>
     */
    public function getErrors(): Collection
    {
        return $this->errors;
=======
>>>>>>> 023759a (up)
    }
}
