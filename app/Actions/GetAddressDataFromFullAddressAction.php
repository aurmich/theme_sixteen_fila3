<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Filament\Notifications\Notification;
use Illuminate\Support\Collection;
use Modules\Geo\Datas\AddressData;

/**
 * Classe che recupera i dati completi di un indirizzo utilizzando diversi servizi di geocoding
 * Prova ogni servizio in sequenza fino a quando non trova un risultato valido
 * 
 * I servizi supportati sono:
 * - Google Maps
 * - Bing Maps
 * - OpenCage
 * - OpenStreetMap (Nominatim)
 * - Photon
 * - LocationIQ
 */
class GetAddressDataFromFullAddressAction
{
    private Collection $errors;
    
    private array $services = [
        'Google Maps' => GetAddressFromGoogleMapsAction::class,
        'Bing Maps' => GetAddressFromBingMapsAction::class,
        'OpenCage' => GetAddressFromOpenCageAction::class,
        'OpenStreetMap' => GetAddressFromOpenStreetMapAction::class,
        'Nominatim' => GetAddressFromNominatimAction::class,
        'Photon' => GetAddressFromPhotonAction::class,
        'LocationIQ' => GetAddressFromLocationIQAction::class,
    ];

    public function __construct()
    {
        $this->errors = collect();
    }

    /**
     * Esegue la ricerca dell'indirizzo completo su multipli servizi di geocoding
     * 
     * @param string $address L'indirizzo da cercare
     * @return AddressData|null I dati completi dell'indirizzo trovato o null se nessun servizio ha trovato risultati
     */
    public function execute(string $address): ?AddressData
    {
        foreach ($this->services as $serviceName => $serviceClass) {
            try {
                $addressData = app($serviceClass)->execute($address);
                
                if ($addressData instanceof AddressData) {
                    return $addressData;
                }
            } catch (\Exception $e) {
                $this->errors->push($serviceName . ': ' . $e->getMessage());
            }
        }

        \Log::warning('Geocoding failed for address: ' . $address, [
            'errors' => $this->errors->toArray(),
        ]);

        foreach ($this->errors as $error) {
            Notification::make()
                ->title('Geocoding Error')
                ->body($error)
                ->danger()
                ->persistent()
                ->send();
        }

        return null;
    }

    public function getErrors(): Collection
    {
        return $this->errors;
    }
}
