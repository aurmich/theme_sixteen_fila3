<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\Photon;

use Illuminate\Support\Facades\Http;
use Modules\Geo\Datas\AddressData;
use Modules\Geo\Datas\Photon\PhotonAddressData;

class GetAddressFromPhotonAction
{
    private const BASE_URL = 'https://photon.komoot.io/api';

    public function execute(string $address): ?AddressData
    {
        try {
            $response = Http::get(self::BASE_URL, [
                'q' => $address,
                'limit' => 1,
            ]);

            if (! $response->successful()) {
                \Log::error('Photon API request failed', [
                    'status' => $response->status(),
                    'address' => $address,
                ]);

                return null;
            }

            $data = $response->json();

            if (empty($data['features'][0])) {
                \Log::warning('No features found in Photon response', [
                    'address' => $address,
                ]);

                return null;
            }

            $photonData = PhotonAddressData::fromPhotonFeature($data['features'][0]);

            return new AddressData(
                country: $photonData->country,
                city: $photonData->city,
                postcode: $photonData->postcode,
                street: $photonData->street,
                housenumber: $photonData->housenumber,
                latitude: $photonData->coordinates['latitude'],
                longitude: $photonData->coordinates['longitude']
            );
        } catch (\Exception $e) {
            \Log::error('Exception during Photon API request', [
                'exception' => $e->getMessage(),
                'address' => $address,
            ]);

            return null;
        }
    }
}
