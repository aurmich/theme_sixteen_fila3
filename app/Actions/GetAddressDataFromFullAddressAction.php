<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Filament\Notifications\Notification;
use Illuminate\Support\Collection;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati dell'indirizzo da diversi servizi di geocoding.
 */
class GetAddressDataFromFullAddressAction
{
    /** @var Collection<int, string> */
    private Collection $errors;

    /** @var array<class-string<object>> */
    private array $services = [
        GetAddressFromGoogleMapsAction::class,
        GetAddressFromBingMapsAction::class,
        GetAddressFromOpenCageAction::class,
        GetAddressFromNominatimAction::class,
        GetAddressFromPhotonAction::class,
        GetAddressFromLocationIQAction::class,
    ];

    public function __construct()
    {
        $this->errors = collect();
    }

    /**
     * Esegue la ricerca dell'indirizzo su tutti i servizi disponibili.
     *
     * @param string $address L'indirizzo da cercare
     *
     * @return AddressData|null I dati dell'indirizzo trovato o null se non trovato
     */
    public function execute(string $address): ?AddressData
    {
        foreach ($this->services as $service) {
            try {
                /** @var GetAddressFromGoogleMapsAction|GetAddressFromBingMapsAction|GetAddressFromOpenCageAction|GetAddressFromNominatimAction|GetAddressFromPhotonAction|GetAddressFromLocationIQAction $instance */
                $instance = app($service);
                $result = $instance->execute($address);

                if ($result) {
                    return $result;
                }
            } catch (\Exception $e) {
                $this->errors->push("Error with {$service}: {$e->getMessage()}");
            }
        }

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
    }
}
